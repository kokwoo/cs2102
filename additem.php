<?php
define('included', true);
include 'includes/HtmlUtilities.php';
include 'DbConnection.php';
include 'logic/ItemAddController.php';

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
  <body style="padding-bottom:70px;">
    <?php HtmlUtilities::printHeader(); ?>
    
    <div class="container">
      <h1 class="display-3">Loan out an item</h1>
      <p class="lead"> Better than to let it collect dust </p>

      <div class="alert alert-success" id="success" role="alert" style="<?php if (!isset($_GET['success'])) { print "display:none;" ; } ?> ">
        Your Item has been successfully listed.
      </div>

        <div class="row">
          <div class="col-sm-10">
              <form id="additem" class="form" action="additem.php" method="POST" enctype="multipart/form-data" novalidate>
                <h4> Item Details </h4>
                <hr>
                <div class="form-group">
                    <label for="itemname"> Item Name </label>
                    <input class="form-control" type="text" id="itemname" name='itemname' placeholder="Item Name" required />
                    <small id="itemnamehelp" class="form-text text-muted">
                      This name will be shown on the listing.
                    </small>
                    <div class="invalid-feedback">
                      Please provide a valid item name.
                    </div>
                </div>

                <div class="form-row">
                   <div class="form-group col-md-6">
                    <label for="itemtype">What type of item is this?</label>

                    <select class="form-control custom-select" id="itemsupertype" name="supertype">
                      <option value="" selected> Select a type </option>
                      <?php ItemAddController::printAllSuperTypes(); ?>
                    </select>
                    <small id="itemtypehelp" class="form-text text-muted">
                      Choose a board category for this item.
                    </small>
                    <div class="invalid-feedback">
                      Please select a valid item category.
                    </div>
                  </div>

                  <div class="form-group col-md-6" id="itemtypegroup" style="display: none;">
                    <label for="itemtype">Sub-type:</label>

                    <select class="form-control custom-select" id="itemtype" name="itemtype">
                      <option selected value=""> Select a type </option>
                      
                    </select>
                    <small id="itemtypehelp" class="form-text text-muted">
                      Choose a more specific category for this item
                    </small>
                    <div class="invalid-feedback">
                      Please select a valid item category.
                    </div>
                  </div>
                </div>

                <div class="form-group">
                    <label for="price"> Price </label>
                    <div class="input-group">
                      <span class="input-group-addon">$</span>
                      <input type="text" class="form-control" id="itemprice" name="itemprice" placeholder="0.00" value="" required>
                      <span class="input-group-btn">
                        <button class="btn btn-secondary" type="button" id="forfree">This item is loaned for free</button>
                      </span>
                    </div>
                    <small id="itempricehelp" class="form-text text-muted">
                      You can set this item for free or a reasonable price.
                    </small>
                    <div class="invalid-feedback">
                      Please enter a valid item loan out price.
                    </div>
                </div>

                <div class="form-group">
                  <label for="pickuploc"> Pickup location</label>
                  <div class="input-group">
                    <input class="form-control" type="text" id="pickuploc" name='pickuploc' placeholder="Pickup address" required />
                    <span class="input-group-btn">
                        <button class="btn btn-info address" type="button">My address</button>
                    </span>
                  </div>
                  <small id="itemnamehelp" class="form-text text-muted">
                    Where should the borrower go to pick up this item?
                  </small>
                  <div class="invalid-feedback">
                    Please enter a valid item pick up location.
                  </div>
                </div>

                <div class="form-group">
                  <label for="returnloc"> Return location</label>
                  <div class="input-group">
                    <input class="form-control" type="text" id="returnloc" name='returnloc' placeholder="Return address" required />
                    <span class="input-group-btn">
                        <button class="btn btn-info address" type="button">My address</button>
                      </span>
                  </div>
                  <small id="itemnamehelp" class="form-text text-muted">
                    Where should the borrower go to return this item?
                  </small>
                  <div class="invalid-feedback">
                    Please enter a valid item return location.
                  </div>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Enter a short description about your item</label>
                    <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                    <small id="descriptionhelp" class="form-text text-muted">
                      You should say something about your item and its condition and other things that you might want others to know.
                    </small>
                    <div class="invalid-feedback">
                      Please enter a short description about your item
                    </div>
                  </div>

                <div class="form-group">
                  <input type="hidden" name="MAX_FILE_SIZE" value="1000000"/>
                  <input type="file" name="imagefile" id="imagefile" accept=".png,.jpg" required>
                  <small id="imagehelp" class="form-text text-muted">
                    Only .jpg or .png files are allowed.
                  </small>
                  <div class="invalid-feedback">
                    Please upload a valid item image.
                  </div>
                </div>

                <input type="hidden" name="formSubmitted" value="true" />
                <button class="btn btn-primary" type="submit" id="additembtn">Add Item</button>
              </form>
          </div>
        </div>
    </div>


    <?php HtmlUtilities::printFooter(); ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/itemaddJs.js"></script>
  </body>
</html>
