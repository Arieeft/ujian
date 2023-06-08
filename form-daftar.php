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
    <title>Form Tambah Buku</title>
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
        <h5 class="text-center pb-3">Formulir Pendaftaran Buku Baru</h5> 
    </header>
    <form action="proses-pendaftaran.php" method="post">    
                <div class="input-group flex-nowrap px-5">
                <label for="isbn"></label>
                <input type="text" class="form-control" name="isbn" placeholder="ISBN" aria-label="isbn" aria-describedby="addon-wrapping">
                </div>    
    
                <div class="input-group flex-nowrap px-5 pt-3">
                <label for="judul"></label>
                <input type="text" class="form-control" name="ijudul" placeholder="Judul Buku" aria-label="judul" aria-describedby="addon-wrapping">
                </div>
           
                <div class="input-group flex-nowrap px-5 pt-3">
                <label for="kategori"></label>
                <input type="text" class="form-control" name="ikategori" placeholder="Kategori" aria-label="kategori" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap px-5 pt-3">
                <label for="penulis"></label>
                <input type="text" class="form-control" name="ipenulis" placeholder="Penulis" aria-label="penulis" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap px-5 pt-3">
                <label for="penerbit"></label>
                <input type="text" class="form-control" name="ipenerbit" placeholder="Penerbit" aria-label="penerbit" aria-describedby="addon-wrapping">
                </div>

                <div class="input-group flex-nowrap px-5 pt-3">
                <label for="tahun"></label>
                <input type="year" class="form-control" name="itahun" placeholder="Tahun Terbit" aria-label="tahun" aria-describedby="addon-wrapping">
                </div>

                <div class="pl-5 pt-3">
                <button type="submit" class="btn btn-info btn-sm" value="daftar" name="daftar">Tambah</button>
                </div>       
    
    </div>
    </div>
    </div>
    </div>
    </div>
    </body>
    </form>
</html>