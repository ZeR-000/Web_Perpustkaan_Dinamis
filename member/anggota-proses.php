<?php
include '../koneksi.php';
if (isset($_POST['tambah'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $kontak = $_POST['kontak'];
    $sql = "INSERT INTO tb_anggota VALUES (
    '$id',
    '$nama',
    '$alamat','$kontak'
    )";
if (empty($id) || empty($nama) || empty($alamat) || 
empty($kontak)) {
echo "
<script>
alert('Pastikan anda mengisi semua data');
window.location = 'anggota-entry.html';
</script>
 ";
}
elseif (mysqli_query($koneksi, $sql)){
echo "
<script>
alert('Data berhasil ditambahkan');
window.location = 'anggota.php';
</script>
 ";
}
else{
echo "
<script>
alert('Terjadi Kesalahan');
window.location = 'anggota-entry.html';
</script>
 ";
}
}
elseif (isset($_POST['edit'])){
$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$kontak = $_POST['kontak'];
$sql = "UPDATE tb_anggota SET 
nama = '$nama' , 
alamat = '$alamat' , 
kontak = '$kontak' 
WHERE id_member = '$id'
";
if (mysqli_query($koneksi, $sql)){
echo "
<script>
alert('Data berhasil diubah');
window.location = 'anggota.php';
</script>
 ";
}
else{
echo "
<script>
alert('Terjadi Kesalahan');
window.location = 'anggota-edit.php?id=$id';
</script>
 ";}
}
elseif (isset($_POST['delete'])){
$id = $_POST['id'];
$sql = "DELETE FROM tb_anggota WHERE id_member = '$id'";
if (mysqli_query($koneksi, $sql)){
echo "
<script>
alert('Data berhasil dihapus');
window.location = 'anggota.php';
</script>
 ";
}
else{
echo "
<script>
alert('Terjadi Kesalahan');
window.location = 'anggota.php';
</script>
 ";
}
}
else{
header('location: anggota.php');
}
?>