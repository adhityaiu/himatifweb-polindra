<?php include 'headerdash.php'; ?>

    <div class="col-md-10 p-3 pt-2"><hr>
      <h3><i class="fas fa-user-plus mr-2"></i></i> Edit Data Barang</h3><hr>         

      <div class="row">

        <div class="col-lg-6 col-lg-offset-3">

          <?php  include'koneksi.php' ;
          $id = $_GET['id'];
          $data = mysqli_query($koneksi,"SELECT * from tb_barang where id = '$id'");
          while($pecah = mysqli_fetch_array($data)){
            ?>

            <form action="" method="POST" class="ml-3 mr-5" erctype="multipart/form-data">
              <input type="hidden" name="id">
              <div class="form-group">
                <b><label for="namabarang">Nama Barang</label></b>
                <input class="form-control mr-3" type="text" name="namabarang" id="namabarang" required value="<?php echo $pecah['namabarang'] ?>">
              </div>    
              <div class="form-group">
                <b><label for="jumlah">Jumlah</label></b>
                <input class="form-control mr-3" type="text" name="jumlah" id="jumlah" required value="<?php echo $pecah['jumlah'] ?>">
              </div>  
              <div class="form-group">
                <b><label for="kondisi">Kondisi</label></b>
                <select class="form-control" name="kondisi" id="kondisi" required>
                 <option value="Aman"<?php if ($pecah ['kondisi'] = 'Aman') {
                  echo "selected";
                } ?>>Aman</option>
                <option value="Tidak Aman"<?php if ($pecah ['kondisi'] = 'Tidak Aman') {
                  echo "selected";
                } ?>>Tidak Aman</option>
                <option value="Bersih"<?php if ($pecah ['kondisi'] = 'Bersih') {
                  echo "selected";
                } ?>>Bersih</option>
                <option value="Tidak Bersih"<?php if ($pecah ['kondisi'] = 'Tidak Bersih') {
                  echo "selected";
                } ?>>Tidak Bersih</option>
              </select>
            </div>


            <?php 
            if (isset($_POST['simpan'])) {
              $namabarang = $_POST ['namabarang'];
              $jumlah = $_POST ['jumlah'];
              $kondisi = $_POST ['kondisi'];
              mysqli_query($koneksi,"UPDATE tb_barang SET id = '$id',namabarang = '$namabarang',jumlah = '$jumlah',kondisi = '$kondisi' WHERE id = '$_GET[id]'");
              echo "<meta http-equiv='refresh' content='1;url=databarang.php?'>";
              echo "<div class='alert alert-success text-center'> Data Berhasil Diupdate </div>";


            } ?>
          <?php   } ?>
          <div class="text-right">
            <button name="simpan" class="btn btn-primary btn-xs"> <i class="fas fa-user-plus mr-2"></i> Simpan</button>
            <a href="databarang.php" class="btn btn-warning btn-xs  "><i class="fas fa-reply mr-2" aria-hidden="true"></i> Kembali</a>
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