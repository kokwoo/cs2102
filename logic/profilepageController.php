<?php

if (!defined('included')) {
    include 'AppSession.php';
    include '../DbConnection.php';
    include '../includes/GlobalConstants.php';
} else {
    include 'includes/GlobalConstants.php';
}

class ProfileController {
    
    public static function getHistory() {
        $db = DbConnection::getInstance();
        $user =$_GET['user'];
        
        $result = $db -> executeQuery ("SELECT II.imagename, I.name, I.postedon, I.avaliability FROM items I, itemimages II WHERE i.itemid = II.itemid AND I.postedby = $1", array ($user));
        while ($row = pg_fetch_assoc($result)) {
                print '<tr>';
                print '<td><img src ="itemimages/' . $row['imagename'] . '" width="160" height="160" ></td>';
                print '<td>' . $row['name'] . '</td>';
                print '<td>' . $row['postedon'] . '</td>';
            
            if ($row['avaliability'] == ItemStatus::Avaliable) {
                print'<td> Available </td>';
            } else {
                print'<td> Loaned out </td>';
            }
        }
    }
    public static function getThisName() {
        $db = DbConnection::getInstance();
        $user =$_GET['user'];
        $result = $db -> executeQuery ("SELECT U.name FROM users U WHERE U.userid = $1", array ($user));
        
        $row = pg_fetch_assoc($result);
        print $row['name'];
    }
}
?>
