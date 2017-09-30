<?php
include 'includes/HtmlUtilities.php';
include 'DbConnection.php';

$db = DbConnection::getInstance();

if (isset($_POST['formSubmitted'])){
  $result = $db->executeQuery(
      "INSERT INTO items VALUES($1, $2, $3, $4, $5, now() )",
      array(
        $_POST['username'],
        $_POST['name'],
        $_POST['password'],
        $_POST['address'],
        'users'
      ));
  if (pg_affected_rows($result) === 1) {
    header('location:signup.php?success=true');
  }
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>Add Item</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  </head>
  <body>
    <?php HtmlUtilities::printHeader(); ?>
    <div class="container">
      <h1 class="display-3">Add an Item</h1>
      <p class="lead"> Add stuff here la! </p>

      <div class="alert alert-success" id="success" role="alert" style="display:none;">
        Your Item has been successfully added.
      </div>

        <div class="row">
          <div class="col-sm-10">
              <form id="additem" class="form" action="additem.php" method="POST" novalidate>
                <h4> Item Details </h4>
                <hr>
                <div class="form-group">
                    <label for="itemname"> Item Name </label>
                    <input class="form-control" type="text" id="itemname" name='itemname' placeholder="Item Name" required />
                    <small id="itemnamehelp" class="form-text text-muted">
                      This name will be shown on the listing.
                    </small>
                </div>

                <div class="form-group">
                       <label for="itemtype">Select type:</label>
                    <select class="form-control" id="itemtype">
                      <option value="COLLECTIONS">COLLECTIONS</option>
                      <option value="CLOTHING">CLOTHING</option>
                      <option value="HOME AND LIFESTYLE">HOME AND LIFESTYLE</option>
                      <option value="HOBBIES AND GADGETS">HOBBIES AND GADGETS</option>
                      <option value="ENTERTAINMENT">ENTERTAINMENT</option>
                      <option value="OTHER">OTHER</option>
                    </select>
                    <small id="itemtypehelp" class="form-text text-muted">
                      Choose a category for this item.
                    </small>
                </div>

                <div class="form-group">
                    <label for="price"> Price </label>
                    <input class="form-control" type="text" id="itemprice" name="itemprice" placeholder="0.00" required/>
                    <small id="itempricehelp" class="form-text text-muted">
                      You can set this item for free or a reasonable price.
                    </small>
                </div>

                <div class="form-group">
                  <label for="image"> Select image to upload: </label>
                  <input id="input-b1" name="input-b1" type="file" class="file">
                  <small id="itemimagehelp" class="form-text text-muted">
                    Upload an image here.
                  </small>
                </div>

                <input type="hidden" name="formSubmitted" value="true" />
                <button class="btn btn-primary" type="submit" id="additem">Add Item</button>
              </form>
          </div>
        </div>
    </div>


    <?php HtmlUtilities::printFooter(); ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>
