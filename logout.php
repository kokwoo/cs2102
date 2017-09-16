<?php

include 'logic/AppSession.php';

AppSession::logCurrentUserOut();
header('location: login.php');

exit();

?>
