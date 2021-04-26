<?php include 'koneksi.php'; 
$ambil = mysqli_query($koneksi,"SELECT * FROM tb_upload WHERE id = '$_GET[id]'");
$tampil = mysqli_fetch_assoc($ambil);
mysqli_query($koneksi,"DELETE FROM tb_upload WHERE id = '$_GET[id]'");

?>
<script >location='editkegiatan.php?'</script>
