<?php
include '../koneksi.php';

	if (isset($_POST['register'])) {
		$username = $_POST['username'];
		$password1 = $_POST['pass1'];
		$password2 = $_POST['pass2'];
		$namalengkap = $_POST['namalengkap'];
		$email = $_POST['email'];
		$get = mysqli_query($Koneksi, "SELECT kode_pemilik_kost FROM pemilik_kost ORDER BY kode_pemilik_kost DESC");
	  $row = mysqli_fetch_array($get);
	  $split = explode('-', $row['kode_pemilik_kost']);
	  $number = str_pad($split[1]+1,3,0, STR_PAD_LEFT);
	  $code = "P-".$number;

		$query = "insert into pemilik_kost values('$code','$username', '$password1', '$email', '$namalengkap')";
		$hasil = mysqli_query($Koneksi, $query);

		if ($hasil) {
			echo "<script>alert('Berhasil Dimasukkan')</script>";
			session_start();

			$query = mysqli_query($Koneksi, "SELECT *FROM pemilik_kost where username_pemilik = '$username'");
			while ($row = mysqli_fetch_array($query)) {
			$kodepemilik = $row['kode_pemilik_kost'];
			$_SESSION['kodepemilik'] = "$kodepemilik";
		}
			header('location:pemilikkost.php');
		} else {
			echo "<script>alert('Gagal Masuk')</script>";
		}
	}
?>
