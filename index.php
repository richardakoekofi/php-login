<!DOCTYPE html>
<html lang="en">
<?php
require_once 'database.php';
?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <title>TODO LIST</title>
</head>

<body class="bg-secondary bg-opacity-25">
  <div class="container-sm mt-4">
    <h1 class="text-center">The To-DO Website</h1>
    <div class="row justify-content-center align-items-center mt-5">
      <div class="col-md-8 mt-sm-3">
        <input type="text"  class="form-control rounded" id="tasks2create" placeholder="Set some objectives...">
      </div>
      <div class="col-md-2">
        <button type="button" class="btn btn-outline-success w-100 mt-3 rounded-pill" id="add-btn">Add Task</button>
      </div>
    </div>
  </div>
  <div class="container mt-5">
    <div class="row justify-content-evenly">
      <div class="col-sm-8 ms-sm-5">
        <ul class="list-group list-group-numbered rounded" id="list-group-class">

        </ul>
      </div>
    </div>
  </div>
  <script src="script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>
