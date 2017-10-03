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

          if(($a%3)==0){
            print '<div class="card-deck">';
          }
           print '<div class="card">';
           print '<img class="card-img-top" src="itemimages/' . $row['imagename'] . '" alt="' . $row['name'] . '">';
           print '<div class="card-body">';
           print '<h4 class="card-title">' . $row['name'] . '</h4>';
           print '<p class="card-text">' . $row['description'] . '</p>';
           print '</div>';
           print '<div class="card-footer">';
           print '<small class="text-muted">Last updated 3 mins ago</small>';
           print '</div></div>';

          if(($a%3)==0){
            print '</div><br>';
          }

          $a = $a+1;
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
