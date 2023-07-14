<!DOCTYPE html>
<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Login</title>
</head>
<body class="bg-success bg-light-subtle">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="card mt-5 shadow-lg">
     <div class="card-body">
     <h2 class="card-title text-center">Login</h2>
     <form action="login_process.php" method="POST">
        <div class="mb-2">
        <label for="username">Username</label>
        <input type="text"class="form-control rounded" id="username" name="username" required><br>
        </div>
        <div class="mb-2">
        <label for="password">Password</label>
        <input type="password" class="form-control rounded" id="password" name="password" required><br>
        </div>
<div class="d-grid gap-1">
<input type="submit" class="btn btn-outline-primary" value="Login">
</div>
     </form>
     <div class="row text-center mt-2">
     <p>Are you a new user? <a href="register.php">Register</a></p>
     </div>

     </div>
                </div>
            </div> 
        
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
