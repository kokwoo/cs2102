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

        return self::$instance;
    }

    public function executeQuery(string $query , array $params) {
        return pg_query_params($this->dbConnection, $query, $params);
    }

    public function newTransaction() {
        pg_query($this->dbConnection, "BEGIN");
    }

    public function commit() {
        pg_query($this->dbConnection, "COMMIT");
    }

    public function rollback() {
        pg_query($this->dbConnection, "ROLLBACK");
    }
}

?>
