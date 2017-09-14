<?php
include 'DbConnection.php';
include 'includes/HtmlUtilities.php';

$db = DbConnection::getInstance();
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
  <body style="background:url('images/login-bg.jpg'); background-size:cover;">
    <?php HtmlUtilities::printHeader(); ?>
    <div class="container">
      <div class="row">
        <div class="Absolute-Center is-Responsive">
        <div class="row">
            <div class="jumbotron col-sm-6 border border-secondary">
              <h1 class="display-4">Login</h1>
              <hr class="my-4">
              <form action="" id="loginForm">
                <div class="form-group">
                  <label for="userid"> User ID </label>
                  <input class="form-control" type="text" id="userid" name='username' placeholder="User ID"/>          
                </div>
                <div class="form-group">
                  <label for="password"> Password </label>
                  <input class="form-control" type="password" id="password" name='password' placeholder="Password"/>     
                </div>

                <button type="submit" class="btn btn-primary">Sign in</button>
            </form>

            </div>

            <div class="jumbotron col-sm-6 border border-secondary">
              <h1 class="display-4">Sign up!</h1>

              <p class="lead"> Signing up is free and takes no time at all.</p>
              <hr class="my-4">
              <p> So sign up today!</p>
              <button type="button" class="btn btn-lg btn-primary">Sign up</button>
            </div>
          </div>
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