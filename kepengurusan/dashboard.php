<?php include 'headerdash.php'; ?>

  <div class="col-md-10 p-5 pt-2">
    <h3><b><i class="fas fa-tachometer-alt mr-2"></i> DASHBOARD</h3></b><hr>
    <div class="row text-white">
      <div class="card bg-info ml-3" style="width: 20rem;">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fas fa-user-astronaut mr-2 mt-5"></i>
          </div>
          <?php  include'koneksi.php' ;

          $data = mysqli_query($koneksi,"SELECT count(*) as total from tb_pengurus");
          while($pecah = mysqli_fetch_array($data)){
            ?>
            <b><h4 class="text-center card-title">Jumlah Pengurus </b></h4>
            <div class="text-center display-4 mb-3 mr-3"><?php echo $pecah['total'] ?></div>
          <?php } ?>
          <a href="pengurus.php" class="btn btn-primary"> Lihat Detail <i class="fas fa-arrow-alt-circle-right"></i> </a>
        </div>
      </div>
      <div class="card bg-info ml-3" style="width: 20rem;">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fas fa-archive mr-2 mt-5 "></i>
          </div>
          <?php  include'koneksi.php' ;

          $data = mysqli_query($koneksi,"SELECT count(*) as total from tb_barang");
          while($pecah = mysqli_fetch_array($data)){
            ?>
            <b><h4 class="text-center card-title">Data Barang</b></h4>
            <div class="text-center display-4 mb-3 mr-3"><?php echo $pecah['total'] ?></div>
          <?php } ?>
          <a href="databarang.php" class="btn btn-primary"> Lihat Detail <i class="fas fa-arrow-alt-circle-right"></i> </a>
        </div>
      </div>
      <div class="card bg-info ml-3 " style="width: 20rem;">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fas fa-box-open mr-2 mt-5"></i>
          </div>
          <?php  include'koneksi.php' ;

          $data = mysqli_query($koneksi,"SELECT count(*) as total from tb_aspirasi");
          while($pecah = mysqli_fetch_array($data)){
            ?>
            <b><h4 class="text-center card-title">Kotak Aspirasi </b></h4>
            <div class="text-center display-4 mb-3 mr-3"><?php echo $pecah['total'] ?></div>
          <?php } ?>
          <a href="aspirasi.php" class="btn btn-primary"> Lihat Detail <i class="fas fa-arrow-alt-circle-right"></i> </a>
        </div>
      </div>
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
  <script type="text/javascript" src="kepengurusan/admin.js"></script>
</body>
</html>

