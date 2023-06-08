<?php
session_start();
if ($_SESSION['status'] !== "login") {
    header('Location: form-login.php');
}

include("config.php");

if (!isset($_GET['id'])) { 
    header('Location: list-siswa.php');
}

$id = $_GET['id'];

$sql = "SELECT * FROM buku WHERE id=$id"; 
$query = mysqli_query($db, $sql); 
$buku = mysqli_fetch_assoc($query);

if (mysqli_num_rows($query) < 1) { 
    die("Data tidak ditemukan...");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        <h5 class="text-center pb-3">Formulir Pengeditan Buku</h5> 
    </header>
    <form action="proses-edit.php" method="post">  
            <input type="hidden" name="id" value=" <?php echo $buku['id']; ?> " >
            <div class="input-group flex-nowrap px-5">
                <label for="isbn"></label>
                <input type="text" class="form-control" name="isbn" placeholder="ISBN" aria-label="isbn" aria-describedby="addon-wrapping" value="<?php echo $buku['isbn'] ?>">
                </div> 
            
                <div class="input-group flex-nowrap px-5 pt-3">
                <label for="judul"></label>
                <input type="text" class="form-control" name="ijudul" placeholder="Judul Buku" aria-label="judul" aria-describedby="addon-wrapping" value="<?php echo $buku ['judul_buku']?>">
                </div>    

                <div class="input-group flex-nowrap px-5 pt-3">
                <label for="kategori"></label>
                <input type="text" class="form-control" name="ikategori" placeholder="Kategori" aria-label="Password" aria-describedby="addon-wrapping" value="<?php echo $buku ['kategori']?>">
                </div>

                <div class="input-group flex-nowrap px-5 pt-3">
                <label for="penulis"></label>
                <input type="text" class="form-control" name="ipenulis" placeholder="Penulis" aria-label="penulis" aria-describedby="addon-wrapping" value="<?php echo $buku ['penulis']?>">
                </div> 

                <div class="input-group flex-nowrap px-5 pt-3">
                <label for="penerbit"></label>
                <input type="text" class="form-control" name="ipenerbit" placeholder="Penerbit" aria-label="penerbit" aria-describedby="addon-wrapping" value="<?php echo $buku ['penerbit']?>">
                </div> 

                <div class="input-group flex-nowrap px-5 pt-3">
                <label for="tahun"></label>
                <input type="year" class="form-control" name="itahun" placeholder="Tahun Terbit" aria-label="tahun" aria-describedby="addon-wrapping" value="<?php echo $buku ['tahun_terbit']?>">
                </div>
            <p>
            <div class="pl-5 pt-3">
                <button type="submit" class="btn btn-info btn-sm" value="simpan" name="simpan">Simpan</button>
                </div>
        </form>
        </div>
    </div>
    </div>
    </div>
    </div>
</body>
</html>