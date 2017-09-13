<?php

include 'privateConstants.php';

class DbConnection {

    public $dbConnection = NULL;
    
    private static $instance = NULL;

    private function __construct() {
       $this->dbConnection = pg_connect("host=" .HOST . " dbname=" . DB_NAME . " user=" . USER . " password=" . PASSWORD)
            or die('Could not connect: ' . pg_last_error());

    }

    public static function getInstance() {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance->dbConnection;
    }
}

?>