<?php
include 'includes/HtmlUtilities.php';
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
      <h1 class="display-3">Sign up</h1>
      <p class="lead"> Join the growing community of ShareStuff </p>

      <div class="row">
        <div class="col-sm-10">
          <h4> Account details</h4>
          <hr>
          <form id="signup" class="form" novalidate>
            <div class="form-group">
              <label for="userid"> User ID </label>
              <input class="form-control" type="text" id="userid" name='username' placeholder="User ID" required />
              <small id="useridhelp" class="form-text text-muted">
                This user id will be used to login into your account
              </small>
              <div class="invalid-feedback">
                Please provide a valid user id.
              </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-6">
                <label for="password">Password</label>
                <input class="form-control" type="password" id="password" name='password' placeholder="Password" required/>
                <small id="passwordHelpBlock" class="form-text text-muted">
                  Your password must be at least 8 characters long and can contain any combination of letters, numbers and special characters.
                </small>
                <div class="invalid-feedback">
                  Please enter a password.
                </div>
              </div>
              <div class="form-group col-md-6">
                <label for="passwordagain">Confirm Password</label>
                <input class="form-control" type="password" id="passwordagain" name='passwordagain' placeholder="Enter password again" required/>
                <small id="passwordagainHelpBlock" class="form-text text-muted">
                  Re-enter your password to confirm it.
                </small>
                <div class="invalid-feedback">
                  Please reenter a password.
                </div>
              </div>
            </div>

            <p></p>
            <h4> Your personal details</h4>
            <hr>

            <div class="form-group">
              <label for="name"> Your Name </label>
              <input class="form-control" type="text" id="name" name='name' placeholder="Enter your name" required />
              <small id="useridhelp" class="form-text text-muted">
                Your name will be shown in your public profile.
              </small>
              <div class="invalid-feedback">
                Please provide a valid name.
              </div>
            </div>

            <div class="form-group">
              <label for="address"> Your address </label>
              <input class="form-control" type="text" id="address" name='address' placeholder="Enter your address" required />
              <small id="useridhelp" class="form-text text-muted">
                Your address will not be known to public. If your address is used as a collection point, then it will only be private
                messaged to the relevant user as a collection instruction.
              </small>
              <div class="invalid-feedback">
                Please provide a valid address.
              </div>
            </div>

            <button class="btn btn-primary" type="submit" id="createaccount">Create Account</button>
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
    <script type="text/javascript" src="js/signupJs.js"></script>
  </body>
</html>

