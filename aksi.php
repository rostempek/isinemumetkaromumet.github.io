<?php
  include 'koneksi.php';

  $nama = $_POST['nama'];
  $email = $_POST['email'];
  $pesan = $_POST['pesan'];

  mysqli_query($connection, "INSERT INTO pesan (id, nama, email, pesan) VALUES('', '$nama', '$email', '$pesan')");

  header("location:index.php");
?>
