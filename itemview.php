<?php
include 'includes/HtmlUtilities.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>Borrow an item</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
  </head>
  <body>
    <?php HtmlUtilities::printHeader(); ?>

    <div class="container">
      <h1 class="display-3">Item Details</h1>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Tools</a></li>
        <li class="breadcrumb-item"><a href="#">Hardware</a></li>
        <li class="breadcrumb-item active">Drills</li>
      </ol>
      
      <div class="row">
        <div class="col-sm-6">
          <img class="img-thumbnail" src="http://placehold.it/650x350">
        </div>

        <div class="col-sm-6">
          <h2>My Awesome Drill</h2>
          <p class="lead">Owned by: <a href="#">Bob</a> <span class="badge badge-pill badge-success">Trusted User</span></p>
          <p>Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum.<p>

          <form>
            <div class="form-group row">
              <label class="col-form-label col-sm-4" for="inlineFormInputGroup">Current bid amount</label>
              <div class="input-group col-sm-8">
                <div class="input-group-addon">$</div>
                <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="15.00" readonly>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-form-label col-sm-4" for="inlineFormInputGroup">New bid amount</label>
              <div class="input-group col-sm-8">
                <div class="input-group-addon">$</div>
                <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Bid">
              </div>
            </div>

            <div class="form-group row">
              <button type="submit" class="btn btn-primary btn-lg btn-block">Submit bid</button>
            </div>
          </form>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-12">
          <hr />
          <div class="card">
            <div class="card-header">
              <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                  <a class="nav-link active" href="#">Details</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Reviews</a>
                </li>
              </ul>
            </div>
            <div class="card-body">
              <h4 class="card-title">Special title treatment</h4>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <?php HtmlUtilities::printFooter(); ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
  </body>
</html>