<?php
session_start();
include '../koneksi.php';

	if (isset($_SESSION['username'])&&($_SESSION['password'])) {
		include "koneksi.php";
		$username = $_SESSION['username'];
		$pass = $_SESSION['password'];
		$query = mysqli_query($Koneksi,"SELECT *from admin where username_admin = '$username' and password_admin ='$pass'");
		if ($data=mysqli_fetch_array($query)) {
			echo "<script>alert('Berhasil Login')</script>";
			header("location: admin.php");
		} else {
      session_destroy();
			echo "<script>alert('Gagal Login')</script>";
			header("location: index.php");
		}
	}
?>
