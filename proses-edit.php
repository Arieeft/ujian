<?php
session_start();
if ($_SESSION['status'] !== "login") {
    header('Location: form-login.php');
}
include("config.php");

if (isset($_POST['simpan'])) {
    $id = $_POST['id'];
    $isbn = $_POST['isbn'];
    $judul = $_POST['ijudul'];
    $kategori = $_POST['ikategori'];
    $tahun = $_POST['itahun'];

    $sql = "UPDATE buku SET isbn='$isbn', judul_buku='$judul', kategori='$kategori', tahun_terbit='$tahun' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    if ($query) {
        header('Location: list-siswa.php');
    } else {
        die("Gagal memperbarui data...");
    }
}else{
    die("Gagal terhubung dengan situs...");
}
?>