<!DOCTYPE html>
<html>
<head>
<title>Pratikum Web 2021</title>
<link rel="stylesheet" type="text/css" href="../css/style.css">
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
<a href="anggota-entry.html">TAMBAH</a>
</ul>
</div>
<div class="isi">
<center>
<h3>Daftar Anggota</h3>
<table border="1">
<tr>
<th width="5%">ID</th>
<th>Nama</th>
<th>Alamat</th>
<th>Kontak</th>
<th width="10%" colspan="2">Action</th>
</tr>
<!-- Awal Record -->
<?php
include '../koneksi.php';
$sql = "SELECT * FROM tb_anggota ORDER BY 
id_member ASC";
$result = mysqli_query($koneksi, $sql);
while ($data = mysqli_fetch_assoc($result)) {
echo "
 <tr>
<td> $data[id_member] </td>
<td> $data[nama] </td>
<td> $data[alamat] </td>
<td> $data[kontak] </td>
<td> <a href=anggota-edit.php?id=$data[id_member]>Edit</a> </td>
<td><a href=anggota-delete.php?id=$data[id_member]>Delete</td>
</tr>
";
}
?>
<!-- Akhir Record -->
</table>
<br>
<form action="cetak_anggota.php">
	<button type="submit">Cetak Data Anggota</button>
</form>
</center>
</div>
<div class="footer">
<h4>&copy; Lab. Pemrograman & Rekayasa Perangkat Lunak 
2021</h4>
</div>
</body>
</html>