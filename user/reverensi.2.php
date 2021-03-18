	<link rel="stylesheet" type="text/css" href="ikost.css">
	<!-- booking -->
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
			<a href="index.php">
			<img src="Icon/logo3.png" class="glogo"> </a>
			<li class="halaman1"><a> List Kost </a></li>
			<li class="halaman2"><a> Bantuan </a></li>
			<li class="icon">
    			<a href="javascript:void(0);" onclick="myFunction()">☰</a>
			</li>
			<!-- <li><a href="#"> Bantuan </a></li> -->
		</ul>
		<!--<a href="#" style="float: right; margin-right: 10%;">
			<input type="submit" name="log" value="Login" class="sign"onclick="document.getElementById('id01').style.display='block'" style="width:auto;"></input>
		</a>-->
	</nav>

	<?php
		$id = $_GET['get'];
		$konek = mysqli_connect('localhost', 'root', '', 'ikost2');
		$query = mysqli_query($konek, "SELECT *FROM kost where kode_kost = '$id'");
		while ($tampil = mysqli_fetch_array($query)) {
	?>

	<div class="menu" style="margin-top: 20px; padding-top: 30px; height: 250px;">
		<div class="gamgrid">
			<img src="Kost/<?php echo $tampil['foto'] ?>"/>
		</div>
		<div class="desgrid">
			<div class="rekomen"><?php echo $tampil['nama_kost'];?></div>
			<div class="typenya" style="margin-left: 20px; margin-top: -15px;"> <?php echo $tampil['status_kamar_kost'];?> </div>
			<div class="descrip">
				<br>Fasilitas : <?php echo $tampil['fasilitas_kost'];?><br>
				<br>Deskripsi : <?php echo $tampil['deskripsi_kost'];?><br>
			</div>
		</div>
		<div class="desharga">
			<div class="ketkamar"> Ada <?php echo $tampil['jumlah_kamar'];?> Kamar </div>
			<table width="80%" border="1" style="margin: auto; margin-top: 20px; margin-bottom: 20px; height: 80px; border-collapse: collapse; border-radius: 5px;" >
				<tr>
					<td>Rp. <?php echo $tampil['tarif_kost'];?>.000/bulan</td>
				</tr>
				<tr>
					<td><center> Sudah Termasuk Listrik </center></td>
				</tr>
			</table>
			<button class="regis" type="submit" onclick="document.getElementById('id02').style.display = 'block'" style="width:auto;"> Pesan Kamar </button>
		</div>
	</div>
	<!--
	<div class="menu" style="margin-top: 20px; padding-top: 30px; height: 250px;">

	</div> -->
	<div class="carapake">
		<div class="rekomen" style="margin-bottom: 20px;">
			<center> Gampang Ko Caranya </center>
		</div>
		<div class="gridmenu2" style="margin-left: 15%;">
			<center><img src="Icon/search.png">
				<p>Cari Tempat Kostnya</p><br>
				Cari tempat kost dengan mencarinya di searchbar eb atau memfilter tempat kost sesuai dengan kategori yang diinginkan
			</center>
		</div>
		<div class="gridmenu2">
			<center><img src="Icon/car.png">
				<p> Kunjungi Lokasi </p><br>
				Setelah mendapatkan kost terbaik, lakukan lah survey untuk melihat secara langsung kondisi tempat kost
			</center>
		</div>
		<div class="gridmenu2">
			<center><img src="Icon/Home.png">
				<p>Tempati</p><br>
				Apabila memang cocok tinggal bayar dan tempati tempat kost
			</center>
		</div>
	</div>
	<footer>
		<center> <img src="Icon/logo3.png" style="width:200px; margin-bottom:10px;">
			<p class="contac"> Copyright &copy; 2018. <a href="index.html">iKost</a>. All Rights Reserved.</p> <br>
		</center>
		<div class="bulcontainer">
			<div class="bulet">
				<img src="Icon/line.png">
			</div>
			<div class="bulet">
				<img src="Icon/gm.png">
			</div>
			<div class="bulet">
				<img src="Icon/wa1.png">
			</div>
		</div>
	</footer>
	<div id="id02" class="modal2">
	  <form class="modal-content2 animate" action="struk.php" method="get" target="_blank
			">
	    <div class="imgcontainer">
	      <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
	      <!--<img src="img_avatar2.png" alt="Avatar" class="avatar">-->
	      <center><h1> Booking Kost </h1></center>
	    </div>
	    <div class="container1">
	      <label><b>Nomor Induk Mahasiswa</b></label>
	      <input class="loginput"type="text" placeholder="Masukan NIM" name="noinduk" required>
	      <label><b>Alamat</b></label>
	      <input class="loginput"type="text" placeholder="Enter Alamat" name="alamat" required>
				<input style="display:none" value="<?php echo $tampil['kode_kost'] ?>" name="kode">
	      <label><b>Jangka Waktu</b></label><br>
	      <select class="loginput" name="jangkawaktu">
            	<option>Mingguan</option>
            	<option>Bulanan</option>
            	<option>Tahunan</option>
          </select>
	      <button class="logbutton" type="submit">Booking</button>
	    </div>
	      <!-- <span class="psw">Forgot <a href="#">password?</a></span> -->
	    </div>
	  </form>
	</div>
	<?php } ?>
