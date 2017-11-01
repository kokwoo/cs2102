<?php

if (!defined('included')) {
    include 'AppSession.php';
    include '../DbConnection.php';
    include '../includes/GlobalConstants.php';
} else {
    include 'DbConnection.php';
    include 'includes/GlobalConstants.php';
}

class SearchController {

    public static function handleSearchRequests() {

        $user = AppSession::getCurrentUser();
        $db = DbConnection::getInstance();

        $query = "SELECT I.itemid, I.name, I.type, I.price, I.avaliability, II.imagename FROM items I, itemimages II WHERE I.itemid = II.itemid AND lower(name) LIKE $1";

        if (isset($_GET['search'])) {

            $result = self::processAdvancedSearch();

            while ($row = pg_fetch_assoc($result)) {
                print '<tr>';
                print '<td><img src ="itemimages/' . $row['imagename'] . '" width="160" height="160"></td>';
                print '<td>' . $row['name'] . '</td>';
                print '<td>' . $row['type'] . '</td>';
                print '<td>' . $row['price'] . '</td>';

                if ($row['avaliability'] == ItemStatus::Avaliable) {
                    print '<td> <span class="badge badge-success">Avaliable</span></td>';
                } else {
                    print '<td> <span class="badge badge-secondary">Loaned out</span></td>';
                }

                print '<td><form action="itemview.php" method="POST" id="' . $row['itemid'] . '">';
                print '<input type="hidden" value ="' . $row['itemid'] . '" name="itemid">';
                print '<button class="btn btn-primary btn-sm view" type="button">View details</button></form></td>';
                print '</tr>';
            }
        }

    }

    private static function processAdvancedSearch() {
        $db = DbConnection::getInstance();

        $array = array("%" . strtolower($_GET['searchterm']) . "%");
        $query = "SELECT I.itemid, I.name, I.type, I.price, I.avaliability, II.imagename FROM items I, itemimages II, types T WHERE I.itemid = II.itemid AND T.type = I.type AND lower(name) LIKE $1";

        if ($_GET['posted'] != "") {
            $query = $query . " AND I.postedby=$2";
            $array2 = array($_GET['posted']);
            $array = array_merge($array, $array2);
        } else {
            $query = $query . " AND 1=$2";
            $array2 = array(1);
            $array = array_merge($array, $array2);
        }

        if ($_GET['item_super'] != "") {
            $query = $query . " AND T.supertype =$3";
            $array2 = array($_GET['item_super']);
            $array = array_merge($array, $array2);
        } else {
            $query = $query . " AND 1=$3";
            $array2 = array(1);
            $array = array_merge($array, $array2);
        }

        if ($_GET['item_type'] != "") {
            $query = $query . " AND I.type =$4";
            $array2 = array($_GET['item_type']);
            $array = array_merge($array, $array2);
        } else {
            $query = $query . " AND 1=$4";
            $array2 = array(1);
            $array = array_merge($array, $array2);
        }

        if ($_GET['amt_from'] != "") {
            $query = $query . " AND I.price >= $5";
            $array2 = array($_GET['amt_from']);
            $array = array_merge($array, $array2);
        } else {
            $query = $query . " AND 1=$5";
            $array2 = array(1);
            $array = array_merge($array, $array2);
        }

        if ($_GET['amt_to'] != "") {
            $query = $query . " AND I.price <= $6";
            $array2 = array($_GET['amt_to']);
            $array = array_merge($array, $array2);
        } else {
            $query = $query . " AND 1=$6";
            $array2 = array(1);
            $array = array_merge($array, $array2);
        }

        $result = $db -> executeQuery($query, $array);
        return $result;
    }
}
?>
