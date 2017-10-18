<?php

if (!defined('included')) {
    include 'AppSession.php';
    include '../DbConnection.php';
    include '../includes/GlobalConstants.php';
} else {
    include 'DbConnection.php';
    include 'includes/GlobalConstants.php';

}

class AccountOverviewController {

    public static function getRecentlyLentOut() {

        $user = AppSession::getCurrentUser();
        $db = DbConnection::getInstance();

        $result_lent_out = $db -> executeQuery("SELECT * FROM items i LEFT JOIN itemimages ii ON ii.itemid = i.itemid WHERE i.postedby=$1", array ($user));

        while ($row = pg_fetch_assoc($result_lent_out)) {
          print '<tr>';
          print '<td><img src="itemimages/' . $row['imagename'] . '"></td>';
          print '<td>' . $row['name'] . '</td>';
          print '<td> - </td>';
          print '<td>$' . $row['price'] . '</td>';
          print '<td> - </td>';
          print '</tr>';
        }
    }
}
?>
