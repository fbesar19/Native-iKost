<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="img/png" href="../Icon/koala2.png" width="100%">
	<title>iKost - Cari Kunjungi Tempati</title>
	<link rel="stylesheet" href="../ikost.css">
	<script src="script/jquery-3.3.1.min.js"></script>
	<script src="script/ajax.js"></script>
</head>
<body>
	<div id="id01" class="modal">
	  <form class="modal-content animate" action="ceklogin.php" method="post">
	    <div class="imgcontainer">
	      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
	      <!--<img src="img_avatar2.png" alt="Avatar" class="avatar">-->
	      <center><h1> Login </h1></center>
	    </div>
	    <div class="container1">
	      <label><b>Username</b></label>
	      <input class="loginput"type="text" placeholder="Enter Username" name="uname" required>
	      <label><b>Password</b></label>
	      <input class="loginput "type="password" placeholder="Enter Password" name="psw" required>
	      <button class="logbutton" name="login" type="submit">Login</button>
	    </div>
	    <div class="container1" style="background-color:#f1f1f1; border-radius: 5px;">
	      <button class="regis" type="button" onclick="document.getElementById('id01').style.display='none'"> <a>Register</a></button>
	      <!-- <span class="psw">Forgot <a href="#">password?</a></span> -->
	    </div>
	  </form>
	</div>

	<nav>
		<ul>
			<a href="logout.php">
			<img src="../Icon/logo3.png" class="glogo"> </a>
			<li><a href="user.php"> Home </a></li>
			<li><a href="halaman1.php"> List Kost </a></li>
		</ul>
		<a href="#" style="float: right; margin-right: 10%;">
			<?php
			session_start();
			include '../koneksi.php';

				if (isset($_SESSION['username'])) {
					include "koneksi.php";
					$username = $_SESSION['username'];
					echo "<a href='logout.php' class='sign' style='margin-right:10px;text-decoration:none;'> $username</a>";
				} else {?>
					<input type="submit" name="log" value="Login" class="sign" onclick="document.getElementById('id01').style.display='block'" style="width:auto;"></input>
				<?php
				}
			?>
		</a>
	</nav>
	<div class="menu" style="margin-top: 20px;">
		<div class="rekomen">
				<center> Hasil Filter </center>
		</div>
	<?php
	include ('../koneksi.php');

	if (isset($_POST['filter'])) {
		$filter = $_POST['fasilitas'];
		$kalimat = implode(" ", $filter);
		$query = mysqli_query($Koneksi, "SELECT * FROM kost where fasilitas_kost = '$kalimat'");
		while ($tampil = mysqli_fetch_array($query)) {
			?>
			<div class="gridmenu">
				<img src="../Kost/<?php echo $tampil['foto'] ?>"/>
				<div class="nama"> <?php echo $tampil['nama_kost'] ?><div class="typenya"> <?php echo $tampil['status_kamar_kost'] ?> </div><br></div>
				<div class="overlay">
					<div class="box1"> Ada <?php echo $tampil['jumlah_kamar'] ?> Kamar </div>
					<div class="box2"> <?php echo $tampil['tarif_kost'] ?>rb/bln </div>
				</div>
				<div class="hub"><a href="halaman3.php?get=<?php echo $tampil['kode_kost'] ?>">Lihat Lebih Lanjut</a></div>
			</div>
			<?php
		}
	}

?>
</div>
	<div class="carapake">
		<div class="rekomen" style="margin-bottom: 20px;">
			<center> Gampang Ko Caranya </center>
		</div>
		<div class="gridmenu2" style="margin-left: 15%;">
			<center><img src="../Icon/search.png">
				<p>Cari Tempat Kostnya</p><br>
				Cari tempat kost dengan mencarinya di searchbar eb atau memfilter tempat kost sesuai dengan kategori yang diinginkan
			</center>
		</div>
		<div class="gridmenu2">
			<center><img src="../Icon/car.png">
				<p> Kunjungi Lokasi </p><br>
				Setelah mendapatkan kost terbaik, lakukan lah survey untuk melihat secara langsung kondisi tempat kost
			</center>
		</div>
		<div class="gridmenu2">
			<center><img src="../Icon/Home.png">
				<p>Tempati</p><br>
				Apabila memang cocok tinggal bayar dan tempati tempat kost
			</center>
		</div>
	</div>

	<div class="piklan">
		<div style="padding: 5px;">
			<h1 style="margin: 0px"> Anda Mempunyai Kosan? </h1>
			pasangkan iklan sekarang
		</div>
		<button type="submit" name="submit"class="iklankost">
			<a href="#"> Pasang Iklan </a>
		</button>
	</div>

	<footer>
		<center> <img src="../Icon/logo3.png" style="width:200px; margin-bottom:10px;">
			<p class="contac"> Copyright &copy; 2018. <a href="index.html">iKost</a>. All Rights Reserved.</p> <br>
		</center>
		<div class="bulcontainer">
			<div class="bulet">
				<img src="../Icon/line.png">
			</div>
			<div class="bulet">
				<img src="../Icon/gm.png">
			</div>
			<div class="bulet">
				<img src="../Icon/wa1.png">
			</div>
		</div>
</body>
</html>
