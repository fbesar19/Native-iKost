<?php
session_start();
include '../koneksi.php';

	if (isset($_SESSION['username'])&&($_SESSION['password'])) {
		include "koneksi.php";
		$username = $_SESSION['username'];
		$pass = $_SESSION['password'];
		$query = mysqli_query($Koneksi,"SELECT *from mahasiswa where username_mhs = '$username' and password_mhs='$pass'");
		if ($data=mysqli_fetch_array($query)) {
			echo "<script>alert('Berhasil Login')</script>";
			header("location: user.php");
		} else {
			echo "<script>alert('Gagal Login')</script>";
			session_destroy();
			?>
				<meta http-equiv="refresh" content="1;url=user.php">
			<?php
		}
	}
?>
