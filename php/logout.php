<?php

session_start();
$_SESSION = array(); // we empty all session variables
// Finally, destroy the session.
session_destroy();
header('Location:../login.php');
?>
