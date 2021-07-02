<?php
include '../koneksi.php';
if (isset($_POST['tambah'])) {
    $id         = $_POST['id'];
    $judul      = $_POST['judul'];
    $penulis    = $_POST['penulis'];
    $tahun      = $_POST['tahun'];
    $penerbit = $_POST['penerbit'];

    $sql = "INSERT INTO tb_buku VALUES (
                '$id',
                '$judul',
                '$penulis',
                '$tahun',
                '$penerbit'
            )";
    if (empty($id) || empty($judul) || empty($penulis) || empty($tahun) || empty($penerbit)) {
        echo "
            <script>
                alert('Pastikan anda mengisi semua data');
                window.location = 'buku-entry.html';
            </script>
        ";
    }
    elseif (mysqli_query($koneksi, $sql)){
        echo "
            <script>
                alert('Data berhasil ditambahkan');
                window.location = 'buku.php';
            </script>
        ";
    }
    else{
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'buku-entry.html';
            </script>
        ";
    }
}

elseif (isset($_POST['edit'])){
    $id         = $_POST['id'];
    $judul      = $_POST['judul'];
    $penulis    = $_POST['penulis'];
    $tahun      = $_POST['tahun'];
    $penerbit = $_POST['penerbit'];

    $sql = "UPDATE tb_buku SET 
                judul_buku = '$judul' , 
                penulis = '$penulis' , 
                tahun = '$tahun' ,
                penerbit = '$penerbit'
                WHERE id_buku = '$id'
            ";

    if (mysqli_query($koneksi, $sql)){
        echo "
            <script>
                alert('Data berhasil diubah');
                window.location = 'buku.php';
            </script>
        ";
    }
    else{
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'buku-edit.php?id=$id';
            </script>
        ";
    }

}
elseif (isset($_POST['delete'])){
    $id = $_POST['id'];

    $sql = "DELETE FROM tb_buku WHERE id_buku = '$id'";
    if (mysqli_query($koneksi, $sql)){
        echo "
            <script>
                alert('Data berhasil dihapus');
                window.location = 'buku.php';
            </script>
        ";
    }
    else{
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'buku.php';
            </script>
        ";
    }
}
else{
    header('location: buku.php');
}
?>
