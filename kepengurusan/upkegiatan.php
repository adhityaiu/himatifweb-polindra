<?php include 'headerdash.php'; ?>

    <div class="col-md-10 p-3 pt-2"><hr>
      <h3><i class="fas fa-chart-line mr-2"></i></i> Edit Data Kegiatan</h3><hr>         

      <div class="row">

        <div class="col-lg-6 col-lg-offset-3">

          <?php  include'koneksi.php' ;
          $id = $_GET['id'];
          $data = mysqli_query($koneksi,"SELECT * from tb_upload where id = '$id'");
          while($pecah = mysqli_fetch_array($data)){
            ?>

            <form action="" method="POST" class="ml-3 mr-5" erctype="multipart/form-data">
              <input type="hidden" name="id">
              <div class="form-group">
                <b><label for="judul">Judul Kegiatan</label></b>
                <input class="form-control mr-3" type="text" name="judul" id="judul" required value="<?php echo $pecah['judul'] ?>">
              </div>    
              <div class="form-group">
                <b><label for="Tanggal">Tanggal</label></b>
                <input class="form-control mr-3" type="date" name="Tanggal" id="Tanggal" required value="<?php echo $pecah['Tanggal'] ?>">
              </div>
              <div class="form-group">
                <b><label for="keterangan">Keterangan</label></b>
                <input class="form-control mr-3" type="text" name="keterangan" id="keterangan" rows="5" required value="<?php echo $pecah['keterangan'] ?> ">
              </div>  
                <div class="form-group">
                <b><label for="gambar">Masukkan Gambar</label></b>
                <input class="form-control mr-3" type="file" name="gambar" id="gambar" required value="<?php echo $pecah['gambar'] ?>">
              </div>


            <?php 
            if (isset($_POST['simpan'])) {
              $judul = $_POST ['judul'];
              $Tanggal = $_POST ['Tanggal'];
              $keterangan = $_POST ['keterangan'];
              $gambar = $_POST ['gambar'];
              $folder = '../assets/img/kegiatan/';

              mysqli_query($koneksi,"UPDATE tb_upload SET id = '$id',judul = '$judul',Tanggal = '$Tanggal',keterangan = '$keterangan',gambar = '$gambar' WHERE id = '$_GET[id]'");
              echo "<meta http-equiv='refresh' content='1;url=datakegiatan.php?'>";
              echo "<div class='alert alert-success text-center'> Data Berhasil Diupdate </div>";
            } ?>
          <?php   } ?>
          <div class="text-right">
            <button name="simpan" class="btn btn-primary btn-xs"> <i class="fas fa-user-plus mr-2"></i> Simpan</button>
            <a href="datakegiatan.php" class="btn btn-warning btn-xs  "><i class="fas fa-reply mr-2" aria-hidden="true"></i> Kembali</a>
          </div>
        </form>

      </div>
    </div>       
  </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
  -->
  <script type="text/javascript" src="admin.js"></script>
</body>
</html>