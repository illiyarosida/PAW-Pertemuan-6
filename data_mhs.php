<?php
$koneksi = mysqli_connect("localhost", "root", "", "paw");
$sql ="SELECT * FROM tbl_mhs";
$hasil = mysqli_query($koneksi,$sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Data Mahasiswa Teknik</h2>
  <p>Data Ini Dari Mysql:</p>           
  <table class="table table-striped">
    <thead>
      <tr>
        <th>ID_MHS</th>
        <th>ID_PRODI</th>
        <th>NAMA_MHS</th>
        <th>ALAMAT_MHS</th>
      </tr>
    </thead>
    <tbody>
        <?php
          while($baris=mysqli_fetch_assoc($hasil)){
        ?>
      <tr>
        <td><?php echo $baris['id_mhs'];?></td>
        <td><?php echo $baris['id_prodi'];?></td>
        <td><?php echo $baris['nama_mhs'];?></td>
        <td><?php echo $baris['alamat_mhs'];?></td>
        <td>

      </tr>
     <tr>
        <?php }?>
    </tbody>
  </table>
</div>

</body>
</html>
