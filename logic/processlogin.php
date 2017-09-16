<?php
include 'AppSession.php';
include '../DbConnection.php';

$db = DbConnection::getInstance();

$result = $db->executeQuery("SELECT userid, password FROM users WHERE userid = $1 LIMIT 1", array($_POST['username']));
$row = pg_fetch_assoc($result);

if ($row['userid'] === $_POST['username'] && $row['password'] === hash("sha256", $_POST['password'], false)) {
    
    AppSession::setCurrentUser($row['userid']);
    $db->executeQuery("UPDATE users SET lastlogin = now() WHERE userid = $1", array($row['userid']));
    print 'true';
} else {
    print 'false';
}

?>
