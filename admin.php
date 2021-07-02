<!DOCTYPE html>
<html>

<head>
    <title>Pratikum Web 2021</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
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
            <a href="admin.php">HOME</a>
            <br><br><br>
            <a href="member/anggota.php">ANGGOTA</a>
            <br><br><br>
            <a href="buku/buku.php">BUKU</a>
            <br><br><br>
            <a href="transaksi/transaksi.php">TRANSAKSI</a>
            <br><br><br>
            <a href="logout.php">LOGOUT</a>
        </ul>
    </div>

    <div class="isi">
        <center>
            <h2>Selamat Datang di Halaman Admin <?php
                session_start();
                echo $_SESSION['nama'];
            ?></h2>
            
        </center>
    </div>

    <div class="footer">
        <h4>&copy; Lab. Pemrograman & Rekayasa Perangkat Lunak 2021</h4>
    </div>

</body>

</html>