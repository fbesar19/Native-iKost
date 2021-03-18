<?php
include '../koneksi.php';

	if (isset($_POST['register'])) {
		$nim = $_POST['nim'];
		$username = $_POST['username'];
		$namalengkap = $_POST['namalengkap'];
		$password1 = $_POST['pass1'];
		$password2 = $_POST['pass2'];
		$email = $_POST['email'];

		$query = "insert into mahasiswa values('$nim','$namalengkap', '$username', '$password1', '$email')";
		$hasil = mysqli_query($Koneksi, $query);

		if ($hasil) {
			echo "<script>alert('Berhasil Dimasukkan')</script>";
			session_start();
			$_SESSION['username'] = "$username";
			header('location:user.php');
		} else {
			echo "<script>alert('Gagal Masuk')</script>";
		}
	}
?>
