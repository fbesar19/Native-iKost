<?php
	include 'koneksi.php';
	session_start();

	$username = $_POST['username'];
	$pass = $_POST['pass1'];
	$query = mysqli_query($Koneksi, "SELECT *FROM pemilik_kost where username_pemilik = '$username'");
	while ($row = mysqli_fetch_array($query)) {
		$kodepemilik = $row['kode_pemilik_kost'];
	}
		$_SESSION['username'] = "$username";
		$_SESSION['password'] = "$pass";
		$_SESSION['kodepemilik'] = "$kodepemilik";
?>

<meta http-equiv="refresh" content="1;url=logpemilik.php">
