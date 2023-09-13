<?php
session_start();

// Destroy the user's session
session_destroy();

// Redirect to a login page
header("Location: login.html");
exit();
?>
