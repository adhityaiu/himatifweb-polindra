<?php include 'koneksi.php'; 
$ambil = mysqli_query($koneksi,"SELECT * FROM tb_barang WHERE id = '$_GET[id]'");
$tampil = mysqli_fetch_assoc($ambil);
mysqli_query($koneksi,"DELETE FROM tb_barang WHERE id = '$_GET[id]'");

?>
<script >location='databarang.php?'</script>
