<!DOCTYPE html>
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
			<a href="buku.php">KEMBALI</a>
		</ul>
	</div>

	<div class="isi">
		<center>
			<h3>Hapus Data Buku</h3>
			<h2>Apakah Anda Yakin ?</h2>
			<form action="buku-proses.php" method="POST">
				<input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
				<table>
					<tr>
						<td><input type="submit" name="delete" value="YA"></td>
						<td><input type="submit" name="no" value="TIDAK"></td>
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
