<?php
session_start();
$hostname = "http://localhost/ecommerce/";

$conn = new mysqli("localhost","root","", "ecommerse");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";
?>