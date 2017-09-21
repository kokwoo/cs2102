<?php

session_start();

class AppSession {

    public static $user = 'USERID';

    private static $doNotRequireLogin = array ("login", "signup", "aboutus");

    public static function getCurrentUser() {
        self::requireValidUser();

        return $_SESSION[self::$user];
    }

    public static function setCurrentUser($newUser) {
        $_SESSION[self::$user] = $newUser;
    }

    public static function logCurrentUserOut() {
        unset($_SESSION[self::$user]);
    }

    public static function hasValidUser() {
        return isset($_SESSION[self::$user]);
    }

    public static function requireValidUser() {
        if (!isset($_SESSION[self::$user])) {
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
