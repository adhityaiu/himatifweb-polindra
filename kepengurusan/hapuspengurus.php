<?php include 'koneksi.php'; 
$ambil = mysqli_query($koneksi,"SELECT * FROM tb_pengurus WHERE id_pengurus = '$_GET[id]'");
$tampil = mysqli_fetch_assoc($ambil);
mysqli_query($koneksi,"DELETE FROM tb_pengurus WHERE id_pengurus = '$_GET[id]'");

?>
<script >location='pengurus.php?'</script>
