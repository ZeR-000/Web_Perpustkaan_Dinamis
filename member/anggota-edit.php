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
<p>Jadwal Buka : Senin - Kamis (08.00 - 16.00) &Jum'at -
Sabtu (08.00 - 13.00)</p>
</div>
<div class="samping">
<ul>
<br><br><br>
<a href="../admin.php">HOME</a>
<br><br><br>
<a href="anggota.php">KEMBALI</a>
</ul>
</div>
<?php 
include '../koneksi.php';
$id = $_GET['id'];
if (!isset($_GET['id'])) {
echo "
<script>
alert('Tidak ada ID yang Terdeteksi');
window.location = 'anggota.php';
</script>
";
}
$sql = "SELECT * FROM tb_anggota WHERE id_member = '$id'";
$result = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_assoc($result);
?>
<div class="isi">
<center>
<h3>Edit Data Anggota</h3>
<form action="anggota-proses.php" method="POST">
<table>
<tr>
<td>ID Member</td>
<td>:</td>
<td><input type="text" name="id" 
value="<?php echo $id ?>" readonly></td>
</tr>
<tr>
<td>Nama</td>
<td>:</td>
<td><input type="text" name="nama" 
value="<?php echo $data['nama'] ?>"></td>
</tr>
<tr>
<td>Alamat</td>
<td>:</td>
<td><input type="text" name="alamat" 
value="<?php echo $data['alamat'] ?>"></td>
</tr>
<tr>
<td>No. Kontak</td>
<td>:</td>
<td><input type="number" name="kontak" 
value="<?php echo $data['kontak'] ?>"></td>
</tr>
<tr>
<td></td><td></td>
<td><input type="submit" name="edit" 
value="UBAH"></td>
</tr>
</table>
</form>
</center>
</div>
<div class="footer">
<h4>&copy; Lab. Pemrograman & Rekayasa Perangkat Lunak 
2021</h4>
</div>
</body>
</html>