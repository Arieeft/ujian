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
    <meta name="viewport" content="width=device-width,
    initial-scale=1.0">
    <title>Pendaftaran Siswa Baru</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
            body {background-color: #f0fdfc;}
    </style>
</head>
<body>
    <head>
        <div class="text-center pt-5">
        <h5>Pendaftaran Peminjaman Buku</h5>
        <h3>SMK Telkom Jakarta</h3>
        </div>
    <nav>
    <?php if (isset($_GET['status'])): ?>
<p class="text-center pt-3">
    <?php
        if ($_GET['status'] == 'sukses') { echo "Pendaftaran siswa baru berhasil!"; 
    }else{
        echo "Pendaftaran gagal!";
    }
    ?>
</p>
<?php endif; ?>
        <div class="text-center p-4">
        <button type="button" class="btn btn-info "><a class="text-decoration-none text-light" href="form-daftar.php">Tambah Buku</a></button>
        <button type="button" class="btn btn-info"><a class="text-decoration-none text-light" href="list-siswa.php">Daftar Buku</a></button>
        <button type="button" class="btn btn-info "><a class="text-decoration-none text-light" href="proses-logout.php">Log Out</a></button>
        </div>
    </nav>
</head>
