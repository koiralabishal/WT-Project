<?php
include 'register.php';
// session_start();
$dbHost = 'localhost';
$dbName = 'Register';
$dbUsername = 'root';
$dbPassword = '';
$conn = mysqli_connect($dbHost, $dbUsername,$dbPassword, $dbName);
if(!$conn) {
    die("Connection Failed!!");
} 
?>
