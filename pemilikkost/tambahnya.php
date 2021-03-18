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
