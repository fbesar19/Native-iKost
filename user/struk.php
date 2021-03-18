<?php
  session_start();
  $id = $_SESSION['kodenya'];
  $noin = $_GET['noinduk'];
  $alamat = $_GET['alamat'];
  $jangka = $_GET['jangkawaktu'];
  $konek = mysqli_connect('localhost', 'root', '', 'ikost2');
  $query = mysqli_query($konek, "SELECT *FROM kost where kode_kost = '$id'");
  while ($tampil = mysqli_fetch_array($query)) {
?>
<center>
  <table>
    <tr>
  		<td colspan="2" align=center>
  			<b>iKost</b><br>
  			Datang, Cari, Kunjungi<br>
  		</td>
  	</tr>
  	<tr>
  		<td colspan="2">=======================================</td>
  	</tr>
    <tr>
      <td>No.Induk</td>
      <td>: <?php echo $noin?></td>
    </tr>
    <tr>
      <td>Nama Kost</td>
      <td>: <?php echo $tampil['nama_kost']?></td>
    </tr>
    <tr>
      <td>Harga Kost</td>
      <td>: Rp. <?php echo $tampil['tarif_kost']?>.000,-</td>
    </tr>
    <tr>
      <td>Jangka Waktu</td>
      <td>: <?php echo $jangka?></td>
    </tr>
  	<tr>
  		<td colspan="2">=======================================</td>
  	</tr>
  </table>
  <br>
  Transfer Ke <b>000501001641300</b> (BRI)
  <br>
  <table>
  	<tr>
  		<td colspan="2" align=center>**Permintaan Anda Akan Segera Diproses**<br>
  		Kritik & Saran Hubungi Kami<br>
  		Telp. 082216805580<br>
  		www.ikost.com<br>
  		<br><br>
  		</td>
  	</tr>
  </table>
</center>
<?php }
echo "<script language=javascript>
function printWindow() {
bV = parseInt(navigator.appVersion);
if (bV >= 4) window.print();}
printWindow();
</script>";
?>
