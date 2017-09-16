<?php
include 'DbConnection.php';
include 'includes/HtmlUtilities.php';

if (AppSession::hasValidUser()) {
  header('location:index.php');
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

    <style type="text/css">
      .Absolute-Center {
        margin: auto;
        position: absolute;
        top: 0; left: 0; bottom: 0; right: 0;
      }

      .Absolute-Center.is-Responsive {
        width: 50%;
        height: 50%;
        padding: 40px;
      }
    </style>
  </head>
  <body style="background:url('images/login-bg.jpg') no-repeat center center fixed; background-size:cover;">
    <?php HtmlUtilities::printHeader(); ?>
    <div class="container">
      <div class="row">
        <div class="Absolute-Center is-Responsive">
        <div class="row">
            <div class="jumbotron col-sm-6 border border-secondary">
              <h1 class="display-4">Login</h1>
              <hr class="my-4">
              <div class="alert alert-danger" id="incorrectDetails" role="alert" style="display:none;">
                Username and/or password is incorrect.
              </div>
              <form id="loginForm">
                <div class="form-group">
                  <label for="userid"> User ID </label>
                  <input class="form-control" type="text" id="userid" name='username' placeholder="User ID"/>
                </div>
                <div class="form-group">
                  <label for="password"> Password </label>
                  <input class="form-control" type="password" id="password" name='password' placeholder="Password"/>
                </div>

                <input type="button" id="login" class="btn btn-primary" value="Sign in" />
            </form>

            </div>

            <div class="jumbotron col-sm-6 border border-secondary">
              <h1 class="display-4">Sign up!</h1>

              <p class="lead"> Signing up is free and takes no time at all.</p>
              <hr class="my-4">
              <p> So sign up today!</p>
              <input value="Sign Up" type="button" class="btn btn-lg btn-primary" id="signUp" onClick="document.location.href='signup.php'"/>
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
    <script type="text/javascript" src="js/loginJs.js"></script>
  </body>
</html>
