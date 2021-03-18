<title> iKost-Cara Mudah Cari Kost </title>
<link rel="icon" type="img/png" href="../Icon/koala2.png" width="100%">
<link rel="stylesheet" type="text/css" href="../ikost.css">
<!-- booking -->
<nav>
  <ul>
    <a href="logout.php">
    <img src="../Icon/logo3.png" class="glogo"> </a>
    <li><a href="user.php"> Home </a></li>
    <li><a href="halaman1.php"> List Kost </a></li>
    <li class="icon">
        <a href="javascript:void(0);" onclick="myFunction()">☰</a>
    </li>
    <!-- <li><a href="#"> Bantuan </a></li> -->
  </ul>
  <a href="#" style="float: right; margin-right: 10%;">
    <?php
    session_start();
    include '../koneksi.php';

      if (isset($_SESSION['username'])) {
        $username = $_SESSION['username'];
        echo "<a href='logout.php' class='sign' style='margin-right:10px;text-decoration:none;'> $username</a>";
      } else {?>
        <input type="submit" name="log" value="Login" class="sign" onclick="document.getElementById('id01').style.display='block'" style="width:auto;"></input>
      <?php
      }
    ?>
  </a>
</nav>

	<?php
		$id = $_GET['get'];
		$query = mysqli_query($Koneksi, "SELECT *FROM kost NATURAL JOIN pemilik_kost where kode_kost = '$id'");
		while ($tampil = mysqli_fetch_array($query)) {
      $_SESSION['kodenya'] = "$id";
	?>

<div class="containerdetail">

  <div class="detail fotonya">
    <img src="../Kost/<?php echo $tampil['foto'] ?>">
  </div>
  <div class="detail deskripsinya">
    <div class="fontdetail"><?php echo $tampil['nama_kost'];?></div>
    <hr color="#ccc9c9">
    <div class="fontharga">Rp.<?php echo $tampil['tarif_kost'];?>.000,-</div><br>
    <div>kamar terbatas! tersedia <?php echo $tampil['jumlah_kamar'];?> kamar</div><br>
    <div class="listrik"> Sudah termasuk listrik</div>
    <div style="background: #800080; width: 100%; text-align: center; border-radius:4px;"><input class="pesan" type="submit" onclick="document.getElementById('id02').style.display = 'block'" style="width:auto;" value=" Pesan Kamar"></div>
  </div>
  <div class="detail pemiliknya">
    PEMILIK <br><br>
    <b><?php echo $tampil['nm_pemilik_kost'];?></b>

  </div>
</div>

<div class="containerdetail" style="background: white; height: auto ;">
  <nav style="z-index: 0; ">
    <ul>
      <li class="dot" onclick="currentSlide(1)"> Detail Kost </li>
      <li class="dot" onclick="currentSlide(2)"> Ulasan </li>
      <li class="dot" onclick="currentSlide(3)"> Feedback </li>
    </ul>
  </nav>
  <div class="slideshow-container">
    <div class="mySlides">
      <b>Fasilitas :</b>
      <p><?php echo $tampil['fasilitas_kost'];?>
      <hr color="#ccc9c9">
      <b>Deskripsi :</b>
      <p> <?php echo $tampil['deskripsi_kost'];?>
      <hr color="#ccc9c9">
    </div>
  <?php } ?>

    <div class="mySlides">
      <q>Sedang dalam tahap pengerjaan</q>
      <p class="author">- Admin iKost</p>
    </div>

    <div class="mySlides">
      <q>Sedang dalam tahap pengerjaan</q>
      <p class="author">- Admin iKost</p>
    </div>
  </div>

</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);
function currentSlide(n) {

  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
</script>

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
</footer>
<div id="id02" class="modal2">

  <form class="modal-content2 animate" action="struk.php" method="get" target="_blank">
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
      <input style="display:none" value="echo $id?>" name="kode">
      <label><b>Jangka Waktu</b></label><br>
      <select class="loginput" name="jangkawaktu">
            <option>Bulanan</option>
            <option>Tahunan</option>
        </select>
      <button class="logbutton" type="submit">Booking</button>
    </div>
      <!-- <span class="psw">Forgot <a href="#">password?</a></span> -->
    </div>
  </form>
</div>

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
