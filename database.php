<?php
// Database configuration
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'database';

// Create database connection
$connection = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
