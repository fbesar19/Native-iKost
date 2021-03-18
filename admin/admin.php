
<head>
  <link rel="stylesheet" href="../ikost.css">
  <?php include '../koneksi.php'; ?>
</head>
<body style="background: #f7f7f7">

  <nav style="box-shadow: 1px 1px 2px 2px grey">
    <ul>
      <a href="logout.php">
      <img src="../Icon/logo3.png" class="glogo">
      </a>
      <li><a href="admin.php"> Data Pemilik Kost </a></li>
      <li><a href="datakost.php"> Data Kost </a></li>
      <li class="icon">
          <a href="javascript:void(0);" onclick="myFunction()">☰</a>
      </li>
    </ul>
    <a href="logout.php" class="sign" style="float: right; margin-right: 10%; text-decoration: none;">
			Keluar
		</a>
  </nav>

  <div style="margin-top: 1%;">
    <center>
      <table width="80%" bgcolor="white">
        <tr>
          <th>Kode Pemilik Kost</th>
          <th>Username</th>
          <th>Email</th>
          <th>Nama Pemilik Kost</th>
          <th></th>
        </tr>
        <?php
          $query = mysqli_query($Koneksi, "SELECT *FROM pemilik_kost");
          while ($tampil = mysqli_fetch_array($query)) {
        ?>
        <tr style="text-align: center; border-bottom: 1px solid grey;">
          <td><?php echo $tampil['kode_pemilik_kost'] ?></td>
          <td><?php echo $tampil['username_pemilik'] ?></td>
          <td><?php echo $tampil['email_pemilik'] ?></td>
          <td><?php echo $tampil['nm_pemilik_kost'] ?></td>
          <td><a href="hapuspemilik.php?get=<?php echo $tampil['kode_pemilik_kost']?>" style="text-decoration: none; color: red;"> Hapus </a></td>
        </tr>
      <?php
      }
    ?>
  </table>
    </center>
  </div>
</body>
