<?php
define('included', true);
include 'includes/HtmlUtilities.php';
include 'logic/AccountOverviewController.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>ShareStuff</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  </head>

  <body style="padding-bottom:70px;">
    <?php HtmlUtilities::printHeader(); ?>

    <div class="container">
      <h1 class="display-4 text-center">Account Overview</h1>

      <div class="row">
        <div class="col-sm-2"></div>
        <div class="col-sm-10">
          <hr>

          <form action="search.php" method="GET">
            <div class="input-group">
              <input class="form-control" type="text" name="searchterm" placeholder="Search for a item to borrow" />
              <span class="input-group-btn">
                <button type="submit" class="btn btn-primary" type="button">Search</button>
              </span>
            </div>
            <div class="form-group mt-sm-1">
              <button class="btn btn-secondary btn-block" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                Advanced Search
              </button>

              <div class="collapse" id="collapseExample">
                <div class="card card-body">
                  <input type="hidden" name="search" value="true">
                  Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
      <div class="row mt-sm-3">
        <div class="col-sm-12">
          <h3> Pending transactions </h3>
          <table class="table table-hover">
            <thead>
              <tr>
                <th>Item Image</th>
                <th>Item Name</th>
                <th>Lent to</th>
                <th>Status</th>
              </tr>
            </thead>
          </table>
        </div>
      </div>

      <div class="row mt-sm-3">
        <div class="col-sm-12">
          <h3> Recently borrowed </h3>

          <table class="table table-hover">
            <thead>
              <tr>
                <th>Item Image</th>
                <th>Item Name</th>
                <th>Borrowed From</th>
                <th>Fee</th>
                <th>Status</th>
              </tr>
            </thead>
          </table>
        </div>
      </div>

      <div class="row mt-sm-3">
        <div class="col-sm-12">
          <h3> Recently listed by you </h3>
          <table class="table table-hover">
            <thead>
              <tr>
                <th>Item Image</th>
                <th>Item Name</th>
                <th>Fee</th>
                <th>Status</th>
              </tr>
            </thead>

            <tbody>
              
              <?php AccountOverviewController::getRecentlyLentOut(); ?>

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
    <script type="text/javascript" src="js/loginJs.js"></script>
    <script type="text/javascript" src="js/searchJs.js"></script>
  </body>
</html>
