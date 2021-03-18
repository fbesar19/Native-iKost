<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="img/png" href="Icon/gambarlogo.png" width="100%">
	<title>iKost - Cari Kunjungi Tempati</title>
	<link rel="stylesheet" href="ikost.css">
	<script>
		// Get the modal
		var modal = document.getElementById('id01');
		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
		    if (event.target == modal) {
		        modal.style.display = "none";
		    }
		}
	</script>
</head>
<body>
	<div id="id01" class="modal">
	  <form class="modal-content animate" action="/action_page.php">
	    <div class="imgcontainer">
	      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
	      <!--<img src="img_avatar2.png" alt="Avatar" class="avatar">-->
	      <center><h1> Login </h1></center>
	    </div>
	    <div class="container">
	      <label><b>Username</b></label>
	      <input class="loginput"type="text" placeholder="Enter Username" name="uname" required>
	      <label><b>Password</b></label>
	      <input class="loginput "type="password" placeholder="Enter Password" name="psw" required>
	      <button class="logbutton" name="login" type="submit">Login</button>
	    </div>
	    <div class="container" style="background-color:#f1f1f1; border-radius: 5px;">
	      <button class="regis" type="button" onclick="window.location.href='register.html'">Register</button>
	      <!-- <span class="psw">Forgot <a href="#">password?</a></span> -->
	    </div>
	  </form>
	</div>
	<nav>
		<ul> <a href="user.html">
		<img src="Icon/logo.png" class="glogo"> </a>
			<!-- <li><a href="#"> Bantuan </a></li> -->
		</ul>
		<a href="#" style="float: right; margin-right: 10%;">
			<input type="submit" value="Login" class="sign"onclick="document.getElementById('id01').style.display='block'" style="width:auto;"></input>
		</a>
	</nav>
	<!-- pilihan -->
	<div class="caricontent">
		<div class="bagi2" style="background: url(Background/maps.jpg);">

		</div>
		<div class="bagi2">
			<div class="gridmenu">
				<img class="barang" src="Background/2.jpg">
				<div class="nama"> Kost Shell River Tomang<div class="typenya"> Campur </div><br></div>
				<div class="overlay">
					<div class="box1"> Ada 1 Kamar </div>
					<div class="box2"> 750rb/bln </div>
				</div>
				<div class="hub"><a href="halaman3.html">Lihat Lebih Lanjut</a></div>
			</div>
			<div class="gridmenu">
				<img class="barang" src="Background/3.jpg">
				<div class="nama"> Kost Tentram Palmerah <div class="typenya"> Cewek </div> <br> </div>
				<div class="overlay">
					<div class="box1"> Ada 8 Kamar </div>
					<div class="box2"> 550rb/bln </div>
				</div>
				<div class="hub"><a href="#">Lihat Lebih Lanjut</a></div>
			</div>
			<div class="gridmenu">
				<img class="barang" src="Background/4.jpg">
				<div class="nama"> Kost Tentrem Laksana Residence<div class="typenya"> Campur </div><br></div>
				<div class="overlay">
					<div class="box1"> Ada 2 Kamar </div>
					<div class="box2"> 450rb/bln </div>
				</div>
				<div class="hub"><a href="#">Lihat Lebih Lanjut</a></div>
			</div>
			<div class="gridmenu">
				<img class="barang" src="Background/1.jpg">
				<div class="nama"> Kost Chintia <div class="typenya"> Cowok </div><br> </div>
				<div class="overlay">
					<div class="box1"> Kostan Penuh </div>
					<div class="box2"> 450rb/bln </div>
				</div>
				<div class="hub"><a href="#">Lihat Lebih Lanjut</a></div>
			</div>
			<div class="gridmenu">
				<img class="barang" src="Background/2.jpg">
				<div class="nama"> Kost Shell River Tomang<div class="typenya"> Campur </div><br></div>
				<div class="overlay">
					<div class="box1"> Ada 1 Kamar </div>
					<div class="box2"> 750rb/bln </div>
				</div>
				<div class="hub"><a href="halaman3.html">Lihat Lebih Lanjut</a></div>
			</div>
			<div class="gridmenu">
				<img class="barang" src="Background/3.jpg">
				<div class="nama"> Kost Tentram Palmerah <div class="typenya"> Cewek </div> <br> </div>
				<div class="overlay">
					<div class="box1"> Ada 8 Kamar </div>
					<div class="box2"> 550rb/bln </div>
				</div>
				<div class="hub"><a href="#">Lihat Lebih Lanjut</a></div>
			</div>
			<div class="gridmenu">
				<img class="barang" src="Background/4.jpg">
				<div class="nama"> Kost Tentrem Laksana Residence<div class="typenya"> Campur </div><br></div>
				<div class="overlay">
					<div class="box1"> Ada 2 Kamar </div>
					<div class="box2"> 450rb/bln </div>
				</div>
				<div class="hub"><a href="#">Lihat Lebih Lanjut</a></div>
			</div>
			<div class="gridmenu">
				<img class="barang" src="Background/1.jpg">
				<div class="nama"> Kost Chintia <div class="typenya"> Cowok </div><br> </div>
				<div class="overlay">
					<div class="box1"> Kostan Penuh </div>
					<div class="box2"> 450rb/bln </div>
				</div>
				<div class="hub"><a href="#">Lihat Lebih Lanjut</a></div>
			</div>
		</div>

<!--<footer>
	<div class="row">
		<div class="column">
	<b>LAYANAN</b>
	<hr><br>
		<a href="#" class="layanan" style="color:grey;">Bantuan</a><br>
		<a href="#" class="layanan" style="color:grey;">Panduan Ukuran</a><br>
		<a href="#" class="layanan" style="color:grey;">Cara Pengembalian</a><br>
		<a href="#" class="layanan" style="color:grey;">Product Index</a><br>
		<a href="#" class="layanan" style="color:grey;">Promo Partner Kami</a><br>
		<a href="#" class="layanan" style="color:grey;">Konfirmasi Transfer</a><br>
		<a href="#" class="layanan" style="color:grey;">Hubungi Kami</a><br>
		<a href="#" class="layanan" style="color:grey;">Cara Berjualan</a><br>
		<a href="#" class="layanan" style="color:grey;">Pengembalian Ongkir</a><br>
	</div>
	<div class="row">
		<div class="column">
	<b>TENTANG KAMI</b>
	<hr><br>
		<a href="AboutUS.html" class="layanan" style="color:grey;">About Us<a/><br>
		<a href="#" class="layanan" style="color:grey;">Pers/Media</a><br>
		<a href="#" class="layanan" style="color:grey;">Karir</a><br>
		<a href="#" class="layanan" style="color:grey;">Persyaratan & Ketentuan</a><br>
		<a href="#" class="layanan" style="color:grey;">Kebijakan Privasi</a><br>
		<a href="#" class="layanan" style="color:grey;">Affiliate Marketing</a><br>
	</div>
	<div class="row">
		<div class="column">
	<b>CARI KAMI DI</b>
	<hr><br>
	<img class="ikon1" src="Sosmed/twitter.png">
	<img class="ikon1" src="Sosmed/fb.png">
	<img class="ikon1" src="Sosmed/ig.png">
	</div>
	<div class="row">
		<div class="column">
	<b>PEMBAYARAN</b>
	<hr><br>
	<img src="Pembayaran/visa.jpg" width="50px" height="30px" style="margin-left:10px;">
	<img src="Pembayaran/mega.jpg" width="50px" height="30px" style="margin-left:0px;">
	<img src="Pembayaran/mandiri.png" width="50px" height="30px" style="margin-left:0px;">
	<img src="Pembayaran/sinarmas.png" width="50px" height="30px" style="margin-left:10px; margin-top:10px;">
	<img src="Pembayaran/btn.png" width="50px" height="30px" style="margin-left:0px; margin-top:10px;">
	<img src="Pembayaran/bri.png" width="50px" height="30px" style="margin-left:0px; margin-top:10px;">
	</div>
	<div class="row">
		<div class="column">
	<b>JASA PENGIRIMAN</b>
	<hr><br>
	<img src="pengiriman/jne.png" width="50px" height="30px" style="margin-left:10px;">
	<img src="pengiriman/jnt.jpg" width="50px" height="30px" style="margin-left:10px;">
	<img src="pengiriman/pos.png" width="50px" height="30px" style="margin-left:10px;">
	</div>
	<div class="row">
		<div class="column">
	<b>BRAND PALING TOP</b>
	<hr><br>
	<a href="#" class="layanan1" style="color:black;">adidas</a><br>
		<a href="#" class="layanan1" style="color:black;">Alexandre Christie</a><br>
		<a href="#" class="layanan1" style="color:black;">bhatara batik</a><br>
		<a href="#" class="layanan1" style="color:black;">Billabong</a><br>
		<a href="#" class="layanan1" style="color:black;">Casio</a><br>
		<a href="#" class="layanan1" style="color:black;">Converse</a><br>
		<a href="#" class="layanan1" style="color:black;">Cotton On</a><br>
		<a href="#" class="layanan1" style="color:black;">Daniel Wellington</a><br>
		<a href="#" class="layanan1" style="color:black;">DC</a><br>
		<a href="#" class="layanan1" style="color:black;">Everbest</a><br>
	</div>
	</footer>
-->
</body>
</html>
