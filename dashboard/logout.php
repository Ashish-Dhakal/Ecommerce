<?php include '../connection/config.php';
// Destroy the session
session_destroy();

// Redirect to another page
header("Location: ../index.php"); // Replace "index.php" with the desired page URL
exit();
