<?php
include 'AppSession.php';
include '../DbConnection.php';

$db = DbConnection::getInstance();

$result = $db->executeQuery("SELECT userid FROM users WHERE userid = $1 LIMIT 1", array($_GET['userid']));
$row = pg_fetch_assoc($result);

if (pg_num_rows($result) === 1) {
    // User id already exists.
    print 'true';
} else {
    print 'false';
}

?>
