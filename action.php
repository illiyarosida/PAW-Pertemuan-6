<?php
include  "koneksi.php";

$id_mhs = $_POST['id_mhs'];
$id_prodi = $_POST['id_prodi'];
$nama_mhs = $_POST['nama_mhs'];
$alamat_mhs= $_POST['alamat_mhs'];

$sql = "INSERT INTO tbl_mhs VALUES('$id_mhs','$id_prodi','$nama_mhs','$alamat_mhs')";
$hasil =mysqli_query($koneksi, $sql);

if (!$hasil){
    echo "eksekusi tambah data mahasiswa gagal";
}
    echo "<br><a href= 'data_mhs.php'>show data</a>";


?>