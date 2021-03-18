<?php
  include '../koneksi.php';

	$id = $_GET['get'];
  $query = mysqli_query($Koneksi, "DELETE FROM pemilik_kost WHERE kode_pemilik_kost = '$id'");
  header("location: admin.php");
?>
