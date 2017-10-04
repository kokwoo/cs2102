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
            $result = $db -> executeQuery($query, array("%" . strtolower($_GET['searchterm']) . "%"));

            while ($row = pg_fetch_assoc($result)) {
                print '<tr>';
                print '<td><img src ="itemimages/' . $row['imagename'] . '"></td>';
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
}
?>