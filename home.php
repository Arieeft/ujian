<?php
session_start();
if ($_SESSION['status'] !== "login") {
    header('Location: form-login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    <div class="jumbotron">
  <h1 class="display-4">Selamat Datang!</h1>
  <p class="lead">Pendaftaran Peminjaman Buku oleh Arie Wardhana XI Tel 13</p>
  <hr class="my-4">
  <a class="btn btn-primary btn-lg" href="form-login.php" role="button">Login</a>
  <a class="btn btn-outline-info btn-lg" href="form-register.php" role="button">Register</a>
</div>
</body>
</html>