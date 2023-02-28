<?php
    $dbHost = 'localhost';
    $dbName = 'register';
    $dbUsername = 'root';
    $dbPassword = '';
    $conn = mysqli_connect($dbHost, $dbUsername,$dbPassword, $dbName);
    session_start();
    session_unset();
    session_destroy();
    header("location: index.php");
?>