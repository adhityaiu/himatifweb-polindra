<?php include 'headerdash.php'; ?>

    <div class="col-md-10 p-3 pt-2"><hr>
      <h3><i class="fas fa-user-plus mr-2"></i>Tambah Data Pengurus</h3><hr>         


      <div class="row">
        <div class="col-lg-6 col-lg-offset-3">
          <form action="" method="POST" class="ml-3 mr-5" erctype="multipart/form-data">

            <div class="form-group">
              <label for="nim">Nim</label>
              <input class="form-control mr-3" type="text" name="nim" id="nim" required>
            </div>
            
            <div class="form-group">
              <label for="nama">Nama</label>
              <input class="form-control mr-3" type="text" name="nama" id="nama" required>
            </div>


            <div class="form-group">
              <label for="jabatan">Jabatan</label>
              <select class="form-control" name="jabatan" id="jabatan" required>
                <option value="Ketua Himpunan">Ketua Himpunan</option>
                <option value="Wakil Ketua Himpunan">Wakil Ketua Himpunan</option>
                <option value="Sekertaris Umum">Sekertaris Umum</option>
                <option value="Bendhara Umum">Bendhara Umum</option>
                <option value="Divisi PSDM">Divisi PSDM</option>
                <option value="Divisi Humas">Divisi Humas</option>
                <option value="Divisi Ristek">Divisi Ristek</option>
                <option value="SubDivisi Kaderisasi">SubDivisi Kaderisasi</option>
                <option value="SubDivisi Keakraban">SubDivisi Keakraban</option>
                <option value="SubDivisi Rumah Tangga">SubDivisi Rumah Tangga</option>
                <option value="SubDivisi Infokom">SubDivisi Infokom</option>
                <option value="SubDivisi Humas Eksternal">SubDivisi Humas Eksternal</option>
                <option value="SubDivisi StudyClub">SubDivisi StudyClub</option>
                <option value="SubDivisi StudyClub">SubDivisi Kompetisi</option>
                <option value="SubDivisi StudyClub">Anggota Aktif</option>
              </select>

              <div class="form-group">
                <label for="kelas">Kelas</label>
                <select class="form-control" name="kelas" id="kelas" required>
                  <option value="D3TI2A">D3TI2A</option>
                  <option value="D3TI2B">D3TI2B</option>
                  <option value="D3TI2B">D3TI2C</option>
                  <option value="D3TI2B">D4RPL2</option>
                </select>

                <div class="form-group">
                  <label for="status">Status</label>
                  <select class="form-control" name="status" id="status" required>
                    <option value="Pengurus">Pengurus</option>
                    <option value="Anggota Aktif">Anggota Aktif</option>
                  </select>
                </div>
                <div class="text-right">
                  <button name="simpan" class="btn btn-primary btn-xs"><i class="fas fa-user-plus mr-2"></i> Tambah Data Pengurus</button>
                  <a href="pengurus.php" class="btn btn-warning btn-xs  "><i class="fas fa-reply mr-2" aria-hidden="true"></i> Kembali</a>
                </div>
              </form>
              <?php 
              if (isset($_POST['simpan'])) {
                $nim = $_POST ['nim'];
                $nama = $_POST ['nama'];
                $kelas = $_POST ['kelas'];
                $jabatan = $_POST ['jabatan'];
                $status = $_POST ['status'];

                mysqli_query($koneksi,"INSERT INTO tb_pengurus (nim,nama,jabatan,status,kelas) VALUES('$nim','$nama','$jabatan','$status','$kelas')");
                echo "<meta http-equiv='refresh' content='1;url=pengurus.php?'>";
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