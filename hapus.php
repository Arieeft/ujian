<?php
session_start();
if ($_SESSION['status'] !== "login") {
    header('Location: form-login.php');
}
?>
<?php
    include("config.php");

    if (isset($_GET['id'])) { 
        $id = $_GET['id'];

    $sql = "DELETE FROM buku WHERE Id=$id"; 
    $query = mysqli_query($db, $sql);
    
    if ($query) {
        header('Location: list-siswa.php');
    }else{
        die("Gagal menghapus...");
    }
}else{
    die("Akses dilarang...");
}
?>