<?php
include '../koneksi.php';
if (isset($_POST['tambah'])) {
    $peminjam = $_POST['peminjam'];
    $buku = $_POST['buku'];
    $tgl_pinjam = $_POST['tgl_pinjam'];
    $tgl_kembali = $_POST['tgl_kembali'];
    $status = $_POST['status']; 

    $sql = "INSERT INTO tb_transaksi VALUES (
                '$peminjam',
                '$buku',
                '$tgl_pinjam',
                '$tgl_kembali',
                '$status'
            )";
    if (empty($peminjam) || empty($buku) || empty($tgl_pinjam) || empty($tgl_kembali)) {
        echo "
            <script>
                alert('Pastikan anda mengisi semua data');
                window.location = 'transaksi-entry.html';
            </script>
        ";
    }
    elseif (mysqli_query($koneksi, $sql)){
        echo "
            <script>
                alert('Data berhasil ditambahkan');
                window.location = 'transaksi.php';
            </script>
        ";
    }
    else{
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'transaksi-entry.html';
            </script>
        ";
    }
}

elseif (isset($_POST['edit'])){
    $id = $_POST['id'];
    $peminjam = $_POST['nama'];
    $buku = $_POST['buku'];
    $tgl_pinjam = $_POST['tgl_pinjam'];
    $tgl_kembali = $_POST['tgl_kembali'];
    $status = $_POST['status']; 

    $sql = "UPDATE tb_transaksi SET 
                peminjam = '$peminjam' , 
                buku = '$buku' , 
                tgl_pinjam = '$tgl_pinjam' ,
                tgl_kembali = '$tgl_kembali',
                status = '$status'
                WHERE id_transaksi = '$id'
            ";

    if (mysqli_query($koneksi, $sql)){
        echo "
            <script>
                alert('Data berhasil diubah');
                window.location = 'transaksi.php';
            </script>
        ";
    }
    else{
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'transaksi-edit.php?id=$id';
            </script>
        ";
    }

}
elseif (isset($_POST['delete'])){
    $id = $_POST['id'];

    $sql = "DELETE FROM tb_transaksi WHERE id_transaksi = '$id'";
    if (mysqli_query($koneksi, $sql)){
        echo "
            <script>
                alert('Data berhasil dihapus');
                window.location = 'transaksi.php';
            </script>
        ";
    }
    else{
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'transaksi.php';
            </script>
        ";
    }
}
else{
    header('location: transaksi.php');
}
?>
