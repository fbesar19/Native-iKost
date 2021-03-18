
<head>
  <link rel="stylesheet" href="../ikost.css">
</head>
<body style="background: #f7f7f7">

  <nav style="box-shadow: 1px 1px 2px 2px grey">
    <ul>
      <img src="../Icon/logo3.png" class="glogo">
      <li><a href="pemilikkost.php"> Lihat Kost </a></li>
      <li><a href="tambahkost.php"> Tambah Kost </a></li>
      <li class="icon">
          <a href="javascript:void(0);" onclick="myFunction()">☰</a>
      </li>
    </ul>
    <a href="logoutpemilik.php" class="sign" style="float: right; margin-right: 10%; text-decoration: none;">
			Keluar
		</a>
  </nav>

  <div style="margin-top: 1%;">
    <center>
      <?php
        session_start();
        include '../koneksi.php';

        $pmlk = $_SESSION['kodepemilik'];
        $query = mysqli_query($Koneksi, "SELECT *FROM kost WHERE kode_pemilik_kost = '$pmlk'");
        while($row = mysqli_fetch_array($query)){
          ?>
          <a style="text-decoration: none;" href="editkost.php?get=<?php echo $row['kode_kost']; ?>">
            <div class="bd_pemilik" style="font-size: 15px;"><?php echo $row['nama_kost']; ?>
            </div>
          </a>


        <?php } ?>
    </center>
  </div>

</body>
