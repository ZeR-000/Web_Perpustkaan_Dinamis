<!DOCTYPE html>
<html>
<head>
<title>Pratikum Web 2021</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
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
</div><div class="nav">
<p>Jadwal Buka : Senin - Kamis (08.00 - 16.00) &Jum'at -
Sabtu (08.00 - 13.00)</p>
</div>
<div class="samping">
<ul>
<br><br><br>
<a href="index.php">HOME</a>
<br><br><br>
<a href="index.php?file=about">ABOUT</a>
<br><br><br>
<a href="index.php?file=login">LOGIN</a>
</ul>
</div>
<div class="isi">
<center>
<?php 
if(!empty($_GET['file'])) {
include("$_GET[file].php");
}
if(empty($_GET['file'])){
echo '
<p>Selamat Datang di Perpustakaan 
Kami.</p>
<p>Buku adalah jembatan ilmu untuk anda -
anda sekalian calon inventor dunia.</p>
';
}
?> 
</center>
</div>
<div class="footer">
<h4>&copy; Lab. Pemrograman & Rekayasa Perangkat Lunak 
2021</h4>
</div>
</body>
</html>