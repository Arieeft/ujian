<?php
session_start();
if ($_SESSION['status'] !== "login") {
    header('Location: form-login.php');
}
    include("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Siswa Baru</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
            body {background-color: #f0fdfc;}
    </style>
</head>
<body>
    <header>
        <h3 class="text-center pt-5">Buku Yang Sudah Terdaftar</h3>
    </header>

    <nav class="text-center">
        <a href="form-daftar.php">Tambah Data </a> | <a href="index.php"> Back</a>
    </nav>
    <br>
    <table class="table text-center">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">ISBN</th>
      <th scope="col">Judul Buku</th>
      <th scope="col">Kategori</th>
      <th scope="col">Penulis</th>
      <th scope="col">Penerbit</th>
      <th scope="col">Tahun Terbit</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
  <?php
            
                $sql = "SELECT * FROM buku";
                $query = mysqli_query($db, $sql);

                while ($buku = mysqli_fetch_array($query)) {
                    echo "<tr>";

                    echo "<td>".$buku['id']."</td>";
                    echo "<td>".$buku['isbn']."</td>";
                    echo "<td>".$buku['judul_buku']."</td>";
                    echo "<td>".$buku['kategori']."</td>";
                    echo "<td>".$buku['penulis']."</td>";
                    echo "<td>".$buku['penerbit']."</td>";
                    echo "<td>".$buku['tahun_terbit']."</td>";
                    
                    echo "<td>";
                    echo "<a href='form-edit.php?id=".$buku['id']."'>Edit</a> | ";
                    echo "<a href='hapus.php?id=".$buku['id']."'>Hapus</a>";
                    echo "</td>";

                    echo "</tr>";
                }
            
            ?>
        </tbody>
</table>

    <p class="pl-5 pt-2">Total: <?php echo mysqli_num_rows($query); ?></p>
</body>
</html>