<link rel="stylesheet" type="text/css" href="../ikost.css">

<nav style="box-shadow: 1px 1px 2px 2px grey">
  <ul>
    <img src="../Icon/logo3.png" class="glogo">
    <li><a href="pemilikkost.php"> Lihat Kost </a></li>
    <li><a href="tambahkost.php"> Tambah Kost   </a></li>
    <li class="icon">
        <a href="javascript:void(0);" onclick="myFunction()">☰</a>
    </li>
  </ul>
  <a href="logoutpemilik.php" class="sign" style="float: right; margin-right: 10%; text-decoration: none;">
    Keluar
  </a>
</nav>
<div class="badan_pemilik" style="width: 70%; box-shadow: 1px 1px 1px 1px grey;">
  <form method="post" enctype="multipart/form-data">
    <b>Nama Kost</b>
    <input class="loginput" type="text" placeholder="Masukan Nama Kost" name="namakost" required>
    <b>Tarif</b>
    <input class="loginput" type="text" placeholder="Masukan Tarif" name="tarif" required>
    <b>Stok Kamar</b>
    <input class="loginput" type="number" value="<?php echo $edit['jumlah_kamar'] ?>" name="stok" required>
    <b>Alamat</b>
    <input class="loginput" type="text" placeholder="Masukan Tarif" name="alamat" required>
    <b>Status Kamar</b><br>
    <div  style="margin-top: 15px;">
      <select name="statuskamar" style="padding: 8px; margin-bottom: 10px; width: 200px;">
        <option value="Cowok"> Cowok </option>
        <option value="Cewek"> Cewek </option>
        <option value="Campur"> Campur </option>
      </select>
    </div>
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
    <textarea class="textdeskripsi" name="deskripsi"  placeholder="Masukan Deskripsi" rows="7" cols="50" style="font-family: arial;"></textarea>
    <input style="width: 30%; margin-top: 10px; height: 40px; margin-bottom: 20px;" type="file" name="fileToUpload" id="fileToUpload">
    <input class="logbutton" name="submit" type="submit" value="Simpan Data">
  </form>
</div>
<?php
include '../koneksi.php';
session_start();

if(isset($_POST["submit"])) {
  $target_dir = "../Kost/";
  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  $namagambar = $_FILES["fileToUpload"]["name"];
  $filter = $_POST['fasilitas'];
  $fasilitas = implode(" ", $filter);
  $namakost = $_POST['namakost'];
  $tarif = $_POST['tarif'];
  $jumlahkamar = $_POST['stok'];
  $deskripsi = $_POST['deskripsi'];
  $get = mysqli_query($Koneksi, "SELECT kode_kost FROM kost ORDER BY kode_kost DESC");
  $row = mysqli_fetch_array($get);
  $split = explode('-', $row['kode_kost']);
  $number = str_pad($split[1]+1,3,0, STR_PAD_LEFT);
  $code = "K-".$number;
  $kodepemilik = $_SESSION['kodepemilik'];
  $status = $_POST['statuskamar'];
  $alamat = $_POST['alamat'];

  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
      echo "<script> alert('Berhasil Menambah Kost') </script>";
      $uploadOk = 1;
      $query = mysqli_query($Koneksi, "INSERT INTO kost
        VALUES ('$code', '$namakost', '$jumlahkamar', '$status', '$fasilitas', '$tarif', '$alamat', 'deskripsi', '$namagambar', '$kodepemilik')");
  } else {
      echo "<script> alert('File is not an image.') </script>'";
      $uploadOk = 0;
  }
  if (file_exists($target_file)) {
      echo "<script> alert('Sorry, file already exists.') </script>";
      $uploadOk = 0;
  }
  if ($_FILES["fileToUpload"]["size"] > 500000) {
      echo "<script> alert('Sorry, your file is too large.') </script>";
      $uploadOk = 0;
  }
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "gif" ) {
      echo "<script> alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.') </script>";
      $uploadOk = 0;
  }
  if ($uploadOk == 0) {
      echo "<script> alert('Sorry, your file was not uploaded.') </script>";
  } else {
      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
          echo "<script> alert('The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.') </script>";
      } else {
          echo "<script> alert('Sorry, there was an error uploading your file.') </script>";
      }
  }
}
?>
