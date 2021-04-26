<?php include 'headerdash.php'; ?>

    <div class="col-md-10 p-3 pt-2"><hr>
      <h3><i class="fas fa-user-plus mr-2"></i></i> Edit Data Pengurus</h3><hr>         
      
      <div class="row">

        <div class="col-lg-6 col-lg-offset-3">

          <?php  include'koneksi.php';
          $id_pengurus = $_GET['id'];
          $data = mysqli_query($koneksi,"SELECT * from tb_pengurus where id_pengurus='$id_pengurus'");
          while($pecah = mysqli_fetch_array($data)){
            ?>

            <form action="" method="POST" class="ml-3 mr-5" erctype="multipart/form-data">
              <input type="hidden" name="id_pengurus">
              <div class="form-group">
                <b><label for="nim">NIM</label></b>
                <input class="form-control mr-3" type="text" name="nim" id="nim" required value="<?php echo $pecah['nim'] ?>">
              </div>    
              <div class="form-group">
                <b><label for="nama">Nama</label></b>
                <input class="form-control mr-3" type="text" name="nama" id="nama" required value="<?php echo $pecah['nama'] ?>">
              </div>  


              <div class="form-group">
                <b><label for="jabatan">Jabatan</label></b>
                <select class="form-control" name="jabatan" id="jabatan" required>
                 <option value="Ketua Himpunan"<?php if ($pecah ['jabatan'] = 'Ketua Himpunan') {
                  echo "selected";
                } ?>>Ketua Himpunan</option>
                <option value="Wakil Ketua Himpunan"<?php if ($pecah ['jabatan'] = 'Wakil Ketua Himpunan') {
                  echo "selected";
                } ?>>Wakil Ketua Himpunan</option>
                <option value="Sekertaris Umum"<?php if ($pecah ['jabatan'] = 'Sekertaris Umum') {
                  echo "selected";
                } ?>>Sekertaris Umum</option>
                <option value="Bendhara Umum"<?php if ($pecah ['jabatan'] = 'Bendhara Umum') {
                  echo "selected";
                } ?>>Bendhara Umum</option>
                <option value="Divisi PSDM"<?php if ($pecah ['jabatan'] = 'Divisi PSDM') {
                  echo "selected";
                } ?>>Divisi PSDM</option>
                <option value="Divisi Humas"<?php if ($pecah ['jabatan'] = 'Divisi Humas') {
                  echo "selected";
                } ?>>Divisi Humas</option>
                <option value="Divisi Ristek"<?php if ($pecah ['jabatan'] = 'Divisi Ristek') {
                  echo "selected";
                } ?>>Divisi Ristek</option>
                <option value="SubDivisi Kaderisasi"<?php if ($pecah ['jabatan'] = 'SubDivisi Kaderisasi') {
                  echo "selected";
                } ?>>SubDivisi Kaderisasi</option>
                <option value="SubDivisi Keakraban"<?php if ($pecah ['jabatan'] = 'SubDivisi Keakraban') {
                  echo "selected";
                } ?>>SubDivisi Keakraban</option>
                <option value="SubDivisi Rumah Tangga"<?php if ($pecah ['jabatan'] = 'SubDivisi Rumah Tangga') {
                  echo "selected";
                } ?>>SubDivisi Rumah Tangga</option>
                <option value="SubDivisi Infokom"<?php if ($pecah ['jabatan'] = 'SubDivisi Infokom') {
                  echo "selected";
                } ?>>SubDivisi Infokom</option>
                <option value="SubDivisi Humas Eksternal"<?php if ($pecah ['jabatan'] = 'SubDivisi Humas Eksternal') {
                  echo "selected";
                } ?>>SubDivisi Humas Eksternal</option>
                <option value="SubDivisi StudyClub"<?php if ($pecah ['jabatan'] = 'SubDivisi StudyClub') {
                  echo "selected";
                } ?>>SubDivisi StudyClub</option>
                <option value="SubDivisi Kompetisi"<?php if ($pecah ['jabatan'] = 'SubDivisi Kompetisi') {
                  echo "selected";
                } ?>>SubDivisi Kompetisi</option>
                <option value="Anggota"<?php if ($pecah ['jabatan'] = 'Anggota') {
                  echo "selected";
                } ?>>Anggota</option>
              </select>
              <div class="form-group col-md-6">
              </div>
            </div>

            <div class="form-group">
             <b> <label for="kelas">Kelas</label> </b>
             <select class="form-control" name="kelas" id="kelas" required>
              <option value="D3TI2A"<?php if ($pecah ['kelas'] = 'D3TI2A') {
                echo "selected";
              } ?>>D3TI2A</option>
              <option value="D3TI2B"<?php if ($pecah ['kelas'] = 'D3TI2B') {
                echo "selected";
              } ?>>D3TI2B</option>
              <option value="D3TI2C"<?php if ($pecah ['kelas'] = 'D3TI2C') {
                echo "selected";
              } ?>>D3TI2C</option>
              <option value="D4RPL2"<?php if ($pecah ['kelas'] = 'D4RPL2') {
                echo "selected";
              } ?>>D4RPL2</option>
            </select>
          </div>

          <div class="form-group">
           <b> <label for="status">Status</label> </b>
           <select class="form-control" name="status" id="status" required>
            <option value="Pengurus"<?php if ($pecah ['status'] = 'Pengurus') {
              echo "selected";
            } ?>>Pengurus</option>
            <option value="Anggota Aktif"<?php if ($pecah ['status'] = 'Anggota Aktif') {
              echo "selected";
            } ?>>Anggota Aktif</option>
          </select>
        </div>

        <?php 
        if (isset($_POST['simpan'])) {
          $nim = $_POST ['nim'];
          $nama = $_POST ['nama'];
          $jabatan = $_POST ['jabatan'];
          $status = $_POST ['status'];
          $kelas = $_POST ['kelas'];

          mysqli_query($koneksi,"UPDATE tb_pengurus SET id_pengurus = '$id_pengurus',nim = '$nim',nama = '$nama',jabatan = '$jabatan',status = '$status',kelas = '$kelas' WHERE id_pengurus = '$_GET[id]'");
          echo "<meta http-equiv='refresh' content='1;url=pengurus.php?'>";
          echo "<div class='alert alert-success text-center'> Data Berhasil Diupdate </div>";


        } ?>
      <?php   } ?>
      <div class="text-right">
        <button name="simpan" class="btn btn-primary btn-xs"> <i class="fas fa-user-plus mr-2"></i> Simpan</button>

        <a href="pengurus.php" class="btn btn-warning btn-xs  "><i class="fas fa-reply mr-2" aria-hidden="true"></i> Kembali</a>
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