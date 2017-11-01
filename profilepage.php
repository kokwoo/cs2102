<?php
define('included', true);
include 'includes/HtmlUtilities.php';
include 'DbConnection.php';
include 'logic/profilepageController.php'
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>User profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  </head>

  <body style="padding-bottom:70px;">
    <?php HtmlUtilities::printHeader(); ?>

    <div class="container">
      <h1 class="display-4 text-center"><?php ProfileController::getThisName(); ?></h1>

      <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-10">
          <hr>
        </div>
      </div>
      <div class="row mt-sm-3">
        <div class="col-sm-12">
          <h3> Transaction History </h3>
          <form id="listedView" action="itemview.php" method="POST"></form>
          <table class="table table-hover">
            <thead>
              <tr>
                <th>Item Image</th>
                <th>Item Name</th>
                <th>Posted on</th>
                <th>Status/Last borrowed</th>
              </tr>
            </thead>

            <tbody>
              <?php ProfileController::getHistory(); ?>
            </tbody>
          </table>
        </div>
      </div>






    </div>
    <?php HtmlUtilities::printFooter(); ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/indexJs.js"></script>
  </body>
</html>
