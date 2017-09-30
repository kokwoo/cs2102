<?php

include 'logic/AppSession.php';

class HtmlUtilities {

    public static function printHeader() {
        print <<<EOT
    <nav class="navbar navbar-light navbar-expand-lg" style="background-color: #e9ecef;">
        <a class="navbar-brand" href="index.php">ShareStuff</a>

        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav mr-auto">

EOT;


    if (AppSession::doesPageRequireLogin($_SERVER['REQUEST_URI'])) {
      print '<a class="nav-item nav-link active" href="index.php">Home</a>
      <a class="nav-item nav-link" href="additem.php">Lend Items</a>
      <a class="nav-item nav-link" href="#">Borrow Items</a>';
    }

      print <<<EOT
      </div>

EOT;



        if (AppSession::doesPageRequireLogin($_SERVER['REQUEST_URI'])) {
            print '<span class="navbar-text"> Welcome, ' . AppSession::getCurrentUser();
            print ' (<a href="logout.php">Logout</a>)</span>';
        }

        print <<<EOT
        </div>
    </nav>
EOT;

    }

    public static function printFooter() {
        print <<<EOT

    <nav class="navbar navbar-dark bg-dark fixed-bottom">
      <a class="navbar-brand" href="#">Team 19</a>

      <span class="navbar-text">
      <a href="aboutus.php"> About us </a>
      </span>
    </nav>

EOT;
    }
}

?>
