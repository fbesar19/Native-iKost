<?php
	error_reporting(0);
?>
<?php
	include 'koneksi.php';

	$id = $_GET['kode'];
  $noin = $_GET['noinduk'];
  $alamat = $_GET['alamat'];
  $jangka = $_GET['jangkawaktu'];
?>
<title>Alfredo</title>
<font face="Courier New" size="3">
<pre>
<?php
	session_start();
	$id = $_SESSION['username'];
?>
<table border=0 width="280" cellpadding=1 cellspacing=1 class="tbg">
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
		<?php
			$sql = mysqli_query($connect,"SELECT *FROM kost WHERE kode_kost = '$id'");
			$baris = mysqli_fetch_assoc($sql);
		?>
		<td colspan="2">No. <?php echo $baris['kode_transaksi'] ?></td>
	</tr>
	<tr>
		<td colspan="2">=======================================</td>
	</tr>
	<tr>
		<td width=210 align=left>Desc</td>
		<td width=70 align=right>Total</td>
	</tr>
	<tr>
		<td colspan="2">---------------------------------------</td>
	</tr>
	<?php
		$tot = 0;
		$q = 0;
		$query = mysqli_query($connect,"SELECT * FROM transaksi JOIN buku USING (kode_buku) JOIN penulis USING (kode_penulis) JOIN penerbit USING (kode_penerbit) WHERE kode_pembeli = '$id'");
		while($row = mysqli_fetch_assoc($query)){
		$kode = $row['kode_buku'];
		$total = ($row['harga_jual']-$row['harga_jual']*$row['diskon']/100)*$row['qty'];
		$tot = $tot+$total;
		$q = $q+$row['qty'];
		?>
	<tr>
		<td align="left"><?php echo $row['judul'] ?> x <?php echo $row['qty'] ?></td>
		<td align="right"><?php echo $total; ?></td>
	</tr>
	<tr>
		<td align="left">Disc. <?php echo $row['diskon'] ?>%</td>
	</tr>
	<tr>
		<td colspan="2">---------------------------------------</td>
	</tr>
	<?php
		}
	?>
	<tr>
		<td><b>Total Belanja </b></td>
		<td align=right><b><?php echo $tot ?></b></td>
	</tr>
	<tr>
		<td><b>Tunai </b></td>
		<td align=right><b><?php echo $bayar ?></b></td>
	</tr>
	<tr>
		<td><b>Kembalian </b></td>
		<td align=right><b><?php echo $kembali ?></b></td>
	</tr>
	<tr>
		<td colspan="2">=======================================</td>
	</tr>
	<tr>
		<td colspan="2" align="center">Tgl. <?php echo date('d/m/Y H:i:s') ?></td>
	</tr>
	<tr>
		<td colspan="2">+-------------------------------------+</td>
	</tr>
	<tr>
		<td colspan="2" align=center>**Terima kasih atas kunjungan anda**<br>
		Kritik & Saran Hubungi Kami<br>
		Telp. 082216805580<br>
		www.alfredo.com<br>
		<br><br>
		</td>
	</tr>
</table>
<p align=center>
<?php
$query = mysqli_query($connect, "DELETE FROM notif where kode_pembeli='$id'");
$query2 = mysqli_query($connect, "UPDATE transaksi SET status='Lunas' WHERE kode_pembeli='$id'");
echo "<script language=javascript>
function printWindow() {
bV = parseInt(navigator.appVersion);
if (bV >= 4) window.print();}
printWindow();
</script>";
?>
