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

        $result_lent_out = $db -> executeQuery("SELECT * FROM items i LEFT JOIN itemimages ii ON ii.itemid = i.itemid WHERE i.postedby=$1 AND i.avaliability = $2", array ($user, ItemStatus::Avaliable));

        if (pg_num_rows($result_lent_out) === 0) {
            print '<tr>'; 
            print "<td class='text-center' colspan=4> <p class ='lead'> Aw! It looks like you don't have any items lent out! Why not start by listing some? </p></td>";
            print '</tr>';

            return;
        }

        while ($row = pg_fetch_assoc($result_lent_out)) {
          print '<tr>';
          print '<td><img src="itemimages/' . $row['imagename'] . '"></td>';
          print '<td>' . $row['name'] . '</td>';
          print '<td>$' . $row['price'] . '</td>';
          print '<td> - </td>';
          print '</tr>';
        }
    }
}
?>
