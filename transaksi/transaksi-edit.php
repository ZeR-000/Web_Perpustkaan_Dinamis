<!DOCTYPE html>
<html>
<head>
	<title<!DOCTYPE html>
<html>
<head>
	<title>Pratikum Web 2021</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<style type="text/css">
		input
		{
			width: 100%;
		}
	</style>
</head>
<body>
	<div class="header">
		<h2>PERPUSTAKAAN MALANG JAWA TIMUR</h2>
	</div>

	<div class="nav">
		<p>Jadwal Buka : Senin - Kamis (08.00 - 16.00) &Jum'at - Sabtu (08.00 - 13.00)</p>
	</div>

	<div class="samping">
		<ul>
			<br><br><br>
			<a href="../admin.php">HOME</a>
			<br><br><br>
			<a href="transaksi.php">KEMBALI</a>
		</ul>
	</div>

	<?php 
	include '../koneksi.php';
	$id = $_GET['id'];
	if (!isset($_GET['id'])) {
		echo "
		<script>
			alert('Tidak ada ID yang Terdeteksi');
			window.location = 'transaksi.php';
		</script>
		";
	}
	$sql = "SELECT * FROM tb_transaksi WHERE id_transaksi = '$id'";
	$result = mysqli_query($koneksi, $sql);
	$data = mysqli_fetch_assoc($result);
	$stts1 = "";
	$stts2 = "";
	$stts3 = "";

	if ($data['status']=="Dipijam") {
		$stts1 = "selected";
	}
	elseif ($data['status']=="Sudah Dikembalikan") {
		$stts2 = "selected";
	}
	elseif ($data['status']=="Terlambat Dikembalikan") {
		$stts3 = "selected";
	}
	?>

	<div class="isi">
		<center>
			<h3>Edit Data Transaksi</h3>
			<form action="transaksi-proses.php" method="POST">
			<table>
				<tr>
					<td>ID Transaksi</td>
					<td>:</td>
					<td><input type="text" name="id" value="<?php echo $id ?>" readonly></td>
				</tr>
				<tr>
					<td>Nama Peminjam</td>
					<td>:</td>
					<td><input type="text" name="nama" value="<?php echo $data['peminjam'] ?>"></td>
				</tr>
				<tr>
					<td>Buku Yang Dipinjam</td>
					<td>:</td>
					<td><input type="text" name="buku" value="<?php echo $data['buku'] ?>"></td>
				</tr>
				<tr>
					<td>Tanggal Pinjam</td>
					<td>:</td>
					<td><input type="text" name="tgl_pinjam" value="<?php echo $data['tgl_pinjam'] ?>"></td>
				</tr>
				<tr>
					<td>Tanggal Kembali</td>
					<td>:</td>
					<td><input type="text" name="tgl_kembali" value="<?php echo $data['tgl_kembali'] ?>"></td>
				</tr>
				<tr>
					<td>Status</td>
					<td>:</td>
					<td>
						<select name="status">
							<option value="Dipinjam" <?php echo $stts1 ?>>Dipinjam</option>
							<option value="Sudah Dikembalikan" <?php echo $stts2 ?>>Sudah Dikembalikan</option>
							<option value="Terlambat Dikembalikan" <?php echo $stts3 ?>>Terlambat Dikembalikan</option>
						</select>
					</td>
				</tr>
				<tr>
					<td></td><td></td>
					<td><input type="submit" name="edit" value="UBAH"></td>
				</tr>
			</table>
			</form>
		</center>
	</div>

	<div class="footer">
		<h4>&copy; Lab. Pemrograman & Rekayasa Perangkat Lunak 2021</h4>
	</div>
	
</body>
</html>
