<?php

if (!defined('included')) {
    include 'AppSession.php';
    include '../DbConnection.php';
    include '../includes/GlobalConstants.php';
} else {
    include 'DbConnection.php';
    include 'includes/GlobalConstants.php';

}

class itemListController {

    public static function showListing() {

        $user = AppSession::getCurrentUser();
        $db = DbConnection::getInstance();


        $result = $db -> executeQuery("SELECT * FROM itemimages, items WHERE itemimages.itemid = items.itemid;", array());

        $a = 0;

        while ($row = pg_fetch_assoc($result)) {
            print '<tr>';
            print '<td><img src="itemimages/' . $row['imagename'] . '"></td>';
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
?>

<!-- <div class="card-deck">
    <div class="card">
      <img class="card-img-top" src="itemimages/image59cfaa596f675.png" alt="Card image cap">
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
    <div class="card">
      <img class="card-img-top" src="itemimages/image59cfaa596f675.png" alt="Card image cap">
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
    <div class="card">
      <img class="card-img-top" src="itemimages/image59cfaa596f675.png" alt="Card image cap">
      <div class="card-body">
        <h4 class="card-title">Card title</h4>
        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      </div>
      <div class="card-footer">
        <small class="text-muted">Last updated 3 mins ago</small>
      </div>
    </div>
</div>
<br> -->
