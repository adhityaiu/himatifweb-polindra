<?php include 'headerdash.php'; ?>

    <div class="col-md-10 p-3 pt-2"><hr>
      <h3><i class="fas fa-user-plus mr-2"></i>Tambah Data Barang</h3><hr>         


      <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
          <form action="" method="POST" class="ml-3 mr-5" erctype="multipart/form-data">
            <div class="form-group">
              <label for="namabarang">Nama Barang</label>
              <input class="form-control mr-3" type="text" name="namabarang" id="namabarang" required>
            </div>
            <div class="form-group">
              <label for="jumlah">Jumlah</label>
              <input class="form-control mr-3" type="text" name="jumlah" id="jumlah" required>
            </div>


            <div class="form-group">
              <label for="kondisi">Kondisi</label>
              <select class="form-control" name="kondisi" id="kondisi" required>
                <option value="Aman">Aman</option>
                <option value="Tidak Aman">Tidak Aman</option>
                <option value="Bersih">Bersih</option>
                <option value="Tidak Bersih">Tidak Bersih</option>
              </select>
            </div>
            <div class="text-right">
              <button name="simpan" class="btn btn-primary btn-xs"><i class="fas fa-user-plus mr-2"></i> Tambah Data Barang</button>
              <a href="databarang.php" class="btn btn-warning btn-xs  "><i class="fas fa-reply mr-2" aria-hidden="true"></i> Kembali</a>
            </div>
          </form>
          <?php 
          if (isset($_POST['simpan'])) {
            $namabarang = $_POST ['namabarang'];
            $jumlah = $_POST ['jumlah'];
            $kondisi = $_POST ['kondisi'];
            mysqli_query($koneksi,"INSERT INTO tb_barang (namabarang, jumlah, kondisi) VALUES('$namabarang','$jumlah','$kondisi')");
            echo "<meta http-equiv='refresh' content='1;url=databarang.php?'>";
            echo "<div class='alert alert-success text-center'> Data Berhasil Disimpan</div>";

          } ?>

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