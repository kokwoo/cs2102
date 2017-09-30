<?php
include 'includes/HtmlUtilities.php';
include 'DbConnection.php';

$db = DbConnection::getInstance();
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
                  <div class="form-group col-md-6">
                    <label for="itemname"> Item Name </label>
                    <input class="form-control" type="text" id="itemname" name='itemname' placeholder="Item Name" required />
                    <small id="itemnamehelp" class="form-text text-muted">
                      This name will be shown on the listing.
                    </small>
                  </div>
                </div>

                <div class="form-group">
                  <div class="form-group col-md-6">
                    <label for="price"> Price </label>
                    <input class="form-control" type="text" id="itemprice" name="itemprice" placeholder="0.00" required/>
                    <small id="itempricehelp" class="form-text text-muted">
                      You cant set this item for free or a reasonable price.
                    </small>
                  </div>
                </div>

                <div class="form-group">
                  <div class="form-group col-md-6">
                    <!-- <form action="upload.php" method="post" enctype="multipart/form-data"> -->
                      Select image to upload:
                      <input type="file" name="fileToUpload" id="fileToUpload">
                      
                      <input type="submit" value="Upload Image" name="submit">
                    <!-- </form> -->
                  </div>
                </div>

              </form>
          </div>
        </div>

    </div>
    <div class="container">

    </div>

    <?php HtmlUtilities::printFooter(); ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>
