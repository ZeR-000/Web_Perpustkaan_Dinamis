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
        <p>Jadwal Buka : Senin - Kamis (08.00 - 16.00) &Jum'at - Sabtu (08.00 - 13.00)</p>
    </div>

    <div class="samping">
        <ul>
            <br><br><br>
            <a href="../admin.php">HOME</a>
            <br><br><br>
            <a href="transaksi-entry.html">TAMBAH</a>
        </ul>
    </div>

    <div class="isi">
        <center>
            <center>
                <h3>DAFTAR PEMINJAMAN & PENGEMBALIAN</h3>
                <table border="1">
                    <tr>
                        <th width="5%">NO</th>
                        <th>PEMINJAM</th>
                        <th>BUKU</th>
                        <th>TANGGAL PINJAM</th>
                        <th>TANGGAL KEMBALI</th>
                        <th>STATUS</th>
                        <th width="10%" colspan="2">Action</th>
                    </tr>
                    <!-- Awal Record -->
                    <?php 
        include '../koneksi.php';
        $sql = "SELECT * FROM tb_transaksi ORDER BY id_transaksi ASC";
        $result = mysqli_query($koneksi, $sql);
        while ($data = mysqli_fetch_assoc($result)) {
          echo "
            <tr>
            <td> $data[id_transaksi] </td>
            <td> $data[peminjam] </td>
            <td> $data[buku] </td>
            <td> $data[tgl_pinjam] </td>
            <td> $data[tgl_kembali] </td>
            <td> $data[status] </td>
            <td> <a href=transaksi-edit.php?id=$data[id_transaksi]>Edit</a> </td>
            <td><a href=transaksi-delete.php?id=$data[id_transaksi]>Delete</td>
          </tr>
          ";
        }
        ?>
                    <!-- Akhir Record -->
                </table>
            </center>
        </center>
    </div>

    <div class="footer">
        <h4>&copy; Lab. Pemrograman & Rekayasa Perangkat Lunak 2021</h4>
    </div>

</body>

</html>