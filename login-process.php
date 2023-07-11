<?php
// Include database connection
require_once 'database.php';

// Retrieve form data
$username = $_POST['username'];
$password = $_POST['password'];

// Check if the username and password match
$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$result = mysqli_query($connection, $query);

if (mysqli_num_rows($result) > 0) {
    // Login successful
    echo "Login successful!";
} else {
    // Invalid username or password
    echo "Invalid username or password.";
}

// Close database connection
mysqli_close($connection);
?>
