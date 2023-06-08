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
    <title>Form Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
            body {background-color: #ACCECE;}
    </style>
</head>
<body>
<div class="d-flex justify-content-center">
    <div class="container p-5 m-5">
    <div class="p-5 mb-5 bg-light text-dark w-50 p-3">
    <header>
        <h5 class="text-center pb-3">Register</h5> 
    </header>
    <form action="proses-register.php" method="post">    
                <div class="input-group flex-nowrap px-5">
                <label for="iUsername"></label>
                <input type="text" class="form-control" name="iUsername" placeholder="Username" aria-label="Username" aria-describedby="addon-wrapping">
                </div>    
    
                <div class="input-group flex-nowrap px-5 pt-3">
                <label for="iEmail"></label>
                <input type="email" class="form-control" name="iEmail" placeholder="Email" aria-label="Email" aria-describedby="addon-wrapping">
                </div>
           
                <div class="input-group flex-nowrap px-5 pt-3">
                <label for="iPassword"></label>
                <input type="Password" class="form-control" name="iPassword" placeholder="Password" aria-label="Password" aria-describedby="addon-wrapping">
                </div>

                <div class="pl-5 pt-3">
                <button type="submit" class="btn btn-info btn-sm" type="submit" value="register" name="register">Register</button>
                </div>       
    </form>
    </div>
    </div>
    </div>
    </div>
    </div>
</body>
</html>