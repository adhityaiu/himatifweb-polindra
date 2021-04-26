<?php include 'koneksi.php'; 
$ambil = mysqli_query($koneksi,"SELECT * FROM tb_aspirasi WHERE id = '$_GET[id]'");
$tampil = mysqli_fetch_assoc($ambil);
mysqli_query($koneksi,"DELETE FROM tb_aspirasi WHERE id = '$_GET[id]'");

?>
<script >location='aspirasi.php?'</script>
