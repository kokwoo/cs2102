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

        if (isset($_POST['search'])) {
            $result = $db -> executeQuery("SELECT * FROM items WHERE lower(name) LIKE $1", array("%" . strtolower($_POST['searchterm']) . "%"));

            while ($row = pg_fetch_assoc($result)) {
                print '<tr>';
                print '<td> image</td>';
                print '<td>' . $row['name'] . '</td>';
                print '<td>' . $row['type'] . '</td>';
                print '<td>' . $row['price'] . '</td>';

                if ($row['avaliability'] == ItemStatus::Avaliable) {
                    print '<td> <span class="badge badge-success">Avaliable</span></td>';
                } else {
                    print '<td> <span class="badge badge-secondary">Loaned out</span></td>';
                }

                print '<td><form action="itemview.php" method="POST">';
                print '<input type="hidden" value ="' . $row['itemid'] . '" name="itemid">';
                print '<button class="btn btn-primary btn-sm view">View details</button></td>';
                print '</tr>';
            }
        }

    }
}
?>