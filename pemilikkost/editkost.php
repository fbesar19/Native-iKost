<head>
  <link rel="stylesheet" href="../ikost.css">
</head>
<body style="background: #f7f7f7">
  <?php
    include '../koneksi.php';

		$id = $_GET['get'];
    $query = mysqli_query($Koneksi, "SELECT *FROM kost WHERE kode_kost = '$id'");
    while ($edit = mysqli_fetch_array($query)){
  ?>
  <nav style="box-shadow: 1px 1px 2px 2px grey">
    <ul>
      <img src="../Icon/logo3.png" class="glogo">
      <li><a href="pemilikkost.php"> Lihat Kost </a></li>
      <li><a href="tambahkost.php"> Tambah Kost </a></li>
      <li class="icon">
          <a href="javascript:void(0);" onclick="myFunction()">☰</a>
      </li>
    </ul>
    <a href="hapuskost.php?get=<?php echo $id;?>" class="sign" style="float: right; margin-right: 10%; text-decoration: none;">
			Hapus Kost
		</a>
  </nav>

  <div class="containerdetail" style="box-shadow">

    <div class="detail fotonya" style="height:650px;">
      <img src="../Kost/<?php echo $edit['foto'] ?>">
    </div>
    <div class="detail deskripsinya" style="height:650px;">
      <form method="post">
        <div class="fontdetail">
          <input class="input" type="text" name="namakost" value="<?php echo $edit['nama_kost'];?>">
        </div>
        <hr color="#ccc9c9">
        <br>
        <b>Tarif</b>
        <input class="loginput" type="text" value="<?php echo $edit['tarif_kost'] ?>" name="tarif" required>
        <b>Stok Kamar</b>
        <input class="loginput" type="number" value="<?php echo $edit['jumlah_kamar'] ?>" name="stok" required>
        <b>Fasilitas</b><br>
        <div  style="columns: 50px 2; margin-top: 15px;">
          <input type='checkbox' name='fasilitas[]' value='AC' /> AC
          <p><input type='checkbox' name='fasilitas[]' value='TV' /> TV </p>
          <p><input type='checkbox' name='fasilitas[]' value='Internet' /> Internet</p>
          <p><input type='checkbox' name='fasilitas[]' value='Kamar Md Dalam' /> Kamar Md Dalam </p>
          <p><input type='checkbox' name='fasilitas[]' value='Lemari' /> Lemari</p>
          <p><input type='checkbox' name='fasilitas[]' value='Meja Kursi' /> Meja Kursi </p>
          <p><input type='checkbox' name='fasilitas[]' value='Parkir Mobil' /> Parkir Mobil </p>
        </div>
        <b>Deskripsi Kost</b><br>
        <textarea class="textdeskripsi" name="deskripsi" rows="7" cols="50"><?php echo $edit['deskripsi_kost'] ?></textarea>
        <input class="logbutton" name="edit" type="submit" value="Simpan Data">
      </form>
    </div>
  </div>
<?php }
  if (isset($_POST['edit'])) {
    $filter = $_POST['fasilitas'];
		$fasilitas = implode(" ", $filter);
    $namakost = $_POST['namakost'];
    $tarif = $_POST['tarif'];
    $jumlahkamar = $_POST['stok'];
    $deskripsi = $_POST['deskripsi'];
    $query3 = mysqli_query($Koneksi, "UPDATE kost SET nama_kost='$namakost', fasilitas_kost='$fasilitas', tarif_kost='$tarif', jumlah_kamar='$jumlahkamar', deskripsi_kost='$deskripsi' WHERE kode_kost='$id'");
    if ($query3) {
      echo "<script> alert('Data berhasil di Ubah')</script>";
      header('location: pemilikkost.php');
    } else {
      echo "<script> alert('Data gagal di Ubah')</script>";
    }
  }
?>
