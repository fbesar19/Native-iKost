<?php
  include '../koneksi.php';

	$id = $_GET['get'];
  $query = mysqli_query($Koneksi, "DELETE FROM kost WHERE kode_kost = '$id'");
  header("location: admin.php");
?>
