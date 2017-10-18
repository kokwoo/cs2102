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

    public static function accountOverview() {

        $user = AppSession::getCurrentUser();
        $db = DbConnection::getInstance();

        // $result_borrowed = $db -> executeQuery("SELECT * FROM itemimages, items WHERE itemimages.itemid = items.itemid;", array());
        $result_lent_out = $db -> executeQuery("SELECT * FROM items WHERE items.postedby=$1", array ($user));

        // print '<div class="row mt-sm-3">';
        // print '<div class="col-sm-12">';
        // print '<h3> Pending transactions </h3>';
        // print '<table class="table table-hover">';
        // print '<thead>';
        // print '<tr>';
        // print '<th>Item Name</th>';
        // print '<th>Status</th>';
        // print '</tr>';
        // print '</thead>';
        // print '</table>';
        // print '</div>';
        // print '</div>';
        // print '<div class="row mt-sm-3">';
        // print '<div class="col-sm-12">';
        // print '<h3> Recently borrowed </h3>';
        // print '<table class="table table-hover">';
        // print '<thead>';
        // print '<tr>';
        // print '<th>Item Name</th>';
        // print '<th>Borrowed From</th>';
        // print '<th>Fee</th>';
        // print '<th>Status</th>';
        // print '</tr>';
        // print '</thead>';
        // print '</table>';
        // print '</div>';
        // print '</div>';
        print '<div class="row mt-sm-3">';
        print '<div class="col-sm-12">';
        print '<h3> Recently lent out </h3>';
        print '<table class="table table-hover">';
        print '<thead>';
        print '<tr>';
        print '<th>Item Name</th>';
        print '<th>Lent to</th>';
        print '<th>Fee</th>';
        print '<th>Status</th>';
        print '</tr>';
        while ($row = pg_fetch_assoc($result_lent_out)) {
          print '<tr>';
          print '<td><img src="itemimages/' . $row['imagename'] . '"></td>';
          print '<td>' . $row['name'] . '</td>';
          print '<td>' . $row['type'] . '</td>';
          print '<td>' . $row['price'] . '</td>';
          print '</tr>';
        }
        print '</thead>';
        print '</table>';
        print '</div>';
        print '</div>';


        // while ($row = pg_fetch_assoc($result)) {
        //     print '<tr>';
        //     print '<td><img src="itemimages/' . $row['imagename'] . '"></td>';
        //     print '<td>' . $row['name'] . '</td>';
        //     print '<td>' . $row['type'] . '</td>';
        //     print '<td>' . $row['price'] . '</td>';
        //
        //     if ($row['avaliability'] == ItemStatus::Avaliable) {
        //         print '<td> <span class="badge badge-success">Avaliable</span></td>';
        //     } else {
        //         print '<td> <span class="badge badge-secondary">Loaned out</span></td>';
        //     }
        //
        //     print '<td><form action="itemview.php" method="POST" id="' . $row['itemid'] . '">';
        //     print '<input type="hidden" value ="' . $row['itemid'] . '" name="itemid">';
        //     print '<button class="btn btn-primary btn-sm view" type="button">View details</button></form></td>';
        //     print '</tr>';
        // }

    }
}
?>
