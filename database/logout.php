<?php
session_start();
//remove all session variables
session_unset();
//destroy
session_destroy();
// Redirect to login page with a message
header('Location: ../login.php');
exit();
?>