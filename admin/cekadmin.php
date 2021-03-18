<?php
	include '../koneksi.php';
	session_start();

	$username = $_POST['username'];
	$pass = $_POST['pass1'];
	$query = mysqli_query($Koneksi, "SELECT *FROM admin where username_admin = '$username'");
		$_SESSION['username'] = "$username";
		$_SESSION['password'] = "$pass";
?>

<meta http-equiv="refresh" content="1;url=logpemilik.php">
