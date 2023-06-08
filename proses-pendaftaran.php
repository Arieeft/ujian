<?php
session_start();
if ($_SESSION['status'] !== "login") {
    header('Location: form-login.php');
}
include("config.php");

if (isset($_POST['daftar'])) {
    $isbn = $_POST['isbn']; 
    $judul = $_POST['ijudul']; 
    $kategori = $_POST['ikategori'];
    $penulis = $_POST['ipenulis'];
    $penerbit = $_POST['ipenerbit'];
    $tahun = $_POST['itahun'];

    $sql = "INSERT INTO buku (isbn, judul_buku, kategori, penulis, penerbit, tahun_terbit) 
    VALUE ('$isbn', '$judul', '$kategori', '$penulis', '$penerbit', '$tahun')";
    $query = mysqli_query($db, $sql);

    if ($query) {
        header('Location: index.php?status=sukses');
    }else {
        header('Location: index.php?status=gagal');
    }
 }else {
    die("Akses dilarang...");
 }
?>  