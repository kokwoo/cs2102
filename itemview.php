<?php
define('included', true);
include 'includes/HtmlUtilities.php';
include 'logic/itemViewController.php';

// if (!isset($_POST['itemid'])) {
//   header('location:index.php');
// }
if (!isset($_POST['itemid'])) {
  header('location:borrowitems.php');
}

$itemDetails = itemViewController::getItemDetails();
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
  <body style="padding-bottom:70px;">
    <?php HtmlUtilities::printHeader(); ?>

    <div class="container">
      <h1 class="display-3">Item Details</h1>
      <ol class="breadcrumb">
        <?php itemViewController::printItemType($itemDetails['itemid']); ?>
      </ol>

      <div class="row">
        <div class="col-sm-6">
          <img class="img-thumbnail" src="<?php print itemViewController::getItemImage($itemDetails['itemid']); ?>">
        </div>

        <div class="col-sm-6">
          <h2><?php print $itemDetails['name']; ?> </h2>
          <?php if ($itemDetails['avaliability'] == ItemStatus::LoanedOut) { print '<span class="badge badge-secondary">Loaned out</span>';}?>
          <p class="lead">Owned by: <a href="profilepage.php?user=<?php print $itemDetails['postedby']; ?>"><?php print $itemDetails['postedby']; ?></a></p>
          <p><?php print $itemDetails['description']; ?><p>

          <form id="bidform">
            <div class="form-group row">
              <label class="col-form-label col-sm-4" for="inlineFormInputGroup">Current bid amount</label>
              <div class="input-group col-sm-8">
                <div class="input-group-addon">$</div>
                <input type="text" class="form-control" id="currentBidAmount" value="<?php print itemViewController::getCurrentBidAmount($itemDetails['itemid']);?>" readonly>
              </div>
            </div>
            <div class="form-group row">
              <label class="col-form-label col-sm-4" for="inlineFormInputGroup">New bid amount</label>
              <div class="input-group col-sm-8">
                <div class="input-group-addon">$</div>
                <input type="text" class="form-control" id="amount" name="amount" placeholder="Enter bid amount">
              </div>
            </div>

            <div class="form-group row">
              <input type="hidden" name="type" value="bid">
              <input type="hidden" id="itemid" name="itemid" value="<?php print $itemDetails['itemid']; ?>">
              <input type="button" id="submitbid" class="btn btn-primary btn-lg btn-block" value ="Submit bid" <?php if ($itemDetails['avaliability'] == ItemStatus::LoanedOut) { print 'disabled'; } ?> >
            </div>
          </form>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-12">
          <div class="alert" id="bidresults" role="alert" style="display: none;"> </div>
          <hr />
          <div class="card">
            <div class="card-header">
              <ul class="nav nav-tabs card-header-tabs">
                <li class="nav-item">
                  <a class="nav-link active" id="bidButton" href="#">Previous bids</a>
                </li>
                <li class="nav-item">
                  <?php if (itemViewController::isUserAnAdmin()) {
                    print '<a class="nav-link" id="adminButton" href="#">Admin</a>';
                  }?>
                </li>
              </ul>
            </div>
            <?php if (itemViewController::isUserAnAdmin()) {
              print <<<EOT

            <div class="card-body text-center" id="adminBody" style="display:none;">
              <h4 class="card-title">Admin panel</h4>
              <p class="card-text">You can delete this item here. Note that this process is not reversible.</p>
              <a href="#" class="btn btn-danger" id="adminDelete">Delete this item</a>
            </div>
EOT;
            } ?>
            <div class="card-body" id="bidBody">
              <h4 class="card-title">Previously bidded by others</h4>
              <p class="card-text">Note that winning bids are chosen by the user and not by the system.</p>
              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>Bidded by</th>
                    <th>Bid Amount</th>
                    <th>Bidded on</th>
                    <?php if (AppSession::getCurrentUser() == $itemDetails['postedby']) {
                      print '<th>Accept bid</th>';
                    } else {
                      print '<th>Cancel bid </th>';
                    }
                    ?>
                  </tr>
                </thead>
                <tbody id="bidhistory">
                  <?php print itemViewController::getAllBidsForItem($itemDetails['itemid']); ?>
                </tbody>
              </table>
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
    <script type="text/javascript" src="js/itemViewJs.js"></script>
  </body>
</html>
