<!DOCTYPE html>
<html>
<head>
    <title>Registration</title>
</head>
<body>
    <h1>Registration</h1>
    <form action="register_process.php" method="POST">
        <label for="reg_username">Username:</label>
        <input type="text" id="reg_username" name="reg_username" required><br>

        <label for="reg_password">Password:</label>
        <input type="password" id="reg_password" name="reg_password" required><br>

        <input type="submit" value="Register">
    </form>

    <p>Already have an account? <a href="login.php">Login</a></p>
</body>
</html>
