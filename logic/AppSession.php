<?php

session_start();

class AppSession {

    private static $user = 'USERID';

    private static $doNotRequireLogin = array ("login", "signup", "aboutus");

    public static function getCurrentUser() {
        self::requireValidUser();

        return $_SESSION[$user];
    }

    public static function setCurrentUser($newUser) {
        $_SESSION[$user] = $newUser;
    }

    public static function logCurrentUserOut() {
        $_SESSION[$user] = NULL;
    }

    public static function requireValidUser() {
        if (is_null($_SESSION[$user])) {
            header('Location: login.php');
            exit();
        }
    }

    public static function doesPageRequireLogin($url) {
        $returnVal = true;

        foreach (self::$doNotRequireLogin as $page) {
            $returnVal &= (strpos($url, $page) === false);
        }

        return $returnVal;
    }
}

?>
