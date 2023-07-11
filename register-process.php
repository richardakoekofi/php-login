<?php
// Include database connection
require_once 'database.php';

// Retrieve form data
$username = $_POST['reg_username'];
$password = $_POST['reg_password'];

// Check if the username already exists
$query = "SELECT * FROM users WHERE username = '$username'";
$result = mysqli_query($connection, $query);

if (mysqli_num_rows($result) > 0) {
    // Username already exists
    echo "Username already taken.";
} else {
    // Insert new user into the database
    $query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
    $result = mysqli_query($connection, $query);

    if ($result) {
        echo "Registration successful!";
    } else {
        echo "Error: " . mysqli_error($connection);
    }
}

// Close database connection
mysqli_close($connection);
?>
