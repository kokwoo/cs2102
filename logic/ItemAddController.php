<?php

if (!defined('included')) {
    include 'AppSession.php';
    include '../DbConnection.php';
    include '../includes/GlobalConstants.php';
} else {
    include 'includes/GlobalConstants.php';
}

class ItemAddController {

    public static function handleAjaxRequests() {
        if ($_POST['request'] == 'subtypes') {
            self::printAllSubTypes();
        
        } else if ($_POST['request'] == 'address') {
            self::getUserAddress();
        }
    }

    private static function getUserAddress() {
        $db = DbConnection::getInstance();
        $user = AppSession::getCurrentUser();

        $result = $db -> executeQuery ("SELECT address FROM users WHERE userid = $1", array ($user));
        $row = pg_fetch_assoc($result);

        print $row['address'];
    }

    private static function printAllSubTypes() {
        $db = DbConnection::getInstance();

        $result = $db -> executeQuery("SELECT type FROM types WHERE superType=$1", array($_POST['supertype']));

        print '<option selected value=""> Select a type </option>';

        while($row = pg_fetch_assoc($result)) {
            print '<option value ="' . $row['type'] . '">' . $row['type'] . '</option>';
        }
    }

    public static function handleFormSubmission() {
        $images_folder = getcwd() . DIRECTORY_SEPARATOR . 'itemimages' . DIRECTORY_SEPARATOR;

        if (!isset($_POST['formSubmitted'])){
            return;
        }

        $db = DbConnection::getInstance();
        $user = AppSession::getCurrentUser();
        
        if (preg_match('~^image/p?jpeg$~i', $_FILES['imagefile']['type'])) 
        { 
            $ext = '.jpg'; 
        } 
        else if (preg_match('~^image/(x-)?png$~i', $_FILES['imagefile']['type'])) 
        { 
            $ext = '.png'; 
        } 
        else 
        { 
            var_dump($_FILES);
            exit("file extension not supported");
        } 

        $filename = $images_folder . uniqid("image") . $ext;

        $db -> newTransaction();

        $result = $db->executeQuery("INSERT INTO items(type,name,price,avaliability,postedby,description, pickupat, returnat) VALUES($1, $2, $3, $4, $5, $6, $7, $8)",
            array(
                $_POST['itemtype'],
                $_POST['itemname'],                
                $_POST['itemprice'],
                ItemStatus::Avaliable,
                $user,
                $_POST['description'],
                $_POST['pickuploc'],
                $_POST['returnloc']
            ) );

        if (pg_affected_rows($result) === 0) {
            $db -> rollback();
            return;
        }

        $query = $db -> executeQuery("SELECT itemid FROM items ORDER BY itemid DESC LIMIT 1", array());
        
        if (!$query) {
            $db -> rollback();
            return;
        }

        $row = pg_fetch_assoc($query);

        $result2 = $db -> executeQuery ("INSERT INTO itemimages VALUES ($1, $2)", array (basename($filename), $row['itemid']));

        if (pg_affected_rows($result2) === 1) {

            // Copy the file (if it is deemed safe) 
            if (!is_uploaded_file($_FILES['imagefile']['tmp_name']) || !move_uploaded_file($_FILES['imagefile']['tmp_name'], $filename)) 
            { 
             $db -> rollback();
              exit("Cannot save file"); 
            }

            $db -> commit();
            header("location:additem.php?success=true");
        } else {
            $db -> rollback();
            exit("Something went wrong in saving data in the database");
        }
    }

    public static function printAllSuperTypes() {
        $db = DbConnection::getInstance();
        $result = $db -> executeQuery("SELECT type FROM types WHERE superType IS NULL", array());

        while($row = pg_fetch_assoc($result)) {
            print '<option value ="' . $row['type'] . '">' . $row['type'] . '</option>';
        }
    }
}

if (defined('included')) {
    ItemAddController::handleFormSubmission();
} else {
    ItemAddController::handleAjaxRequests();
}

?>
