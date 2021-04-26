<!DOCTYPE html>
<?php session_start(); ?>
<?php include 'koneksi.php' ?>
<html lang="en">
<?php include 'header.php' ?>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container-fluid">

      <div class="row justify-content-center">
        <div class="col-xl-9 d-flex align-items-center">
          <h2 class="logo mr-1 mt-1"><a href="index.php"><img src="assets/img/logohimatif.png" alt="" class="img-fluid"> SIMAK-HIMATIF</a></h2>

          <nav class="nav-menu d-none d-lg-block ml-auto">
            <ul>
              <li class="native"><a href="index.php"><i class="fas fa-home mr-2"></i>Beranda</a></li>
              <li class="active"><a href="#hero"><i class="fas fa-star mr-2"></i>Visi Misi</a></li>
              <li><a href="#services"><i class="fas fa-th-large mr-2"></i>Divisi HIMATIF</a></li>
              <li class="drop-down"><a href="#contact"><i class="fas fa-address-card mr-2"></i>Kontak</a>
                <ul>
                  <li><a href="#kolom"><i class="fas fa-chart-line mr-2"></i>Kolom Aspirasi</a></li> 
                </ul>
              </li>
              <?php
              if(!isset($_SESSION)) 
              {
               session_start();
             }
             if(!isset($_SESSION['sebagai'])){ ?>
             <?php  }else{?>
              <li class="drop-down"><a href=""><i class="fas fa-user-astronaut mr-2"></i>Pengurus</a>
                <ul>
                  <li><a href="kepengurusan/dashboard.php"><i class="fas fa-tachometer-alt mr-2"></i>Dashboard Pengurus</a></li>
                  <li><a href="kepengurusan/pengurus.php"><i class="fas fa-user-astronaut mr-2"></i>Data Pengurus</a></li>
                  <li><a href="kepengurusan/databarang.php"><i class="fas fa-archive mr-2"></i>Data Sekre</a></li>
                  <li><a href="kepengurusan/datakegiatan.php"><i class="fas fa-chart-line mr-2"></i>Data Kegiatan</a></li>
                  <li><a href="kepengurusan/aspirasi.php"><i class="fas fa-box-open mr-2"></i>Kotak Aspirasi</a></li>
                </ul>
              </li>
            <?php } ?>

          </ul>
        </nav><!-- .nav-menu -->
        <?php
        if(!isset($_SESSION)) 
        {
         session_start();
       }
       if(!isset($_SESSION['sebagai'])){ ?>

         <a href="homelogin.php" class="get-started-btn scrollto">LOGIN</a>
       <?php  }else{?>
        <a href="logout.php" class="get-started-btn scrollto">EXIT</a>
      <?php } ?>

    </div>
  </div>

</div>
</header><!-- End Header -->


    <section id="hero" class="d-flex align-items-center">

      <div class="container-fluid" data-aos="fade-up">
        <div class="row justify-content-center">
         <div class="col-md-6 pt-lg-1 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="fade-right">

          </div>
          <!-- ======= Services Section ======= -->
    <section id="services" class="services services-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <br>
          <br>
          <br>
          <br>
          <h1>MEI 2021</h1>
          <br>
              <?php 
              if (isset($_SESSION['sebagai'])) {?>
              <?php if ($_SESSION['sebagai'] == '1') { ?>
              <a href="kepengurusan/datakegiatan.php" class="btn btn-primary mb-3"><i class="fas fa-user-plus mr-2"></i>EDIT</a>    

              <?php   } ?> 

              <?php } else {
              }?>
        </div>

        <div class="row">
          <?php
          {
          $ambil_data1 = mysqli_query($koneksi, "select * from tb_upload where id = '1' ");
          $hasil_data1 = mysqli_fetch_array($ambil_data1);
          $ambil_data2 = mysqli_query($koneksi, "select * from tb_upload where id = '2' ");
          $hasil_data2 = mysqli_fetch_array($ambil_data2);
          $ambil_data3 = mysqli_query($koneksi, "select * from tb_upload where id = '3' ");
          $hasil_data3 = mysqli_fetch_array($ambil_data3);
          $ambil_data4 = mysqli_query($koneksi, "select * from tb_upload where id = '4' ");
          $hasil_data4 = mysqli_fetch_array($ambil_data4);
          $ambil_data5 = mysqli_query($koneksi, "select * from tb_upload where id = '5' ");
          $hasil_data5 = mysqli_fetch_array($ambil_data5);
          $ambil_data6 = mysqli_query($koneksi, "select * from tb_upload where id = '6' ");
          $hasil_data6 = mysqli_fetch_array($ambil_data6);


          ?>

          <div class="col-lg-1 col-md-1 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100" >

            <div class="icon-box iconbox-blue mr-5 bg-warning" >

              <h4><?=$hasil_data1['judul'];?></h4>
              <p>[<?=$hasil_data1['Tanggal'];?>]</p>
          
            </div>

            <div class="icon-box iconbox-blue mr-5 bg-warning" >

              <h4><?=$hasil_data1['judul'];?></h4>
              <p>[<?=$hasil_data1['Tanggal'];?>]</p>
          
            </div>

            <div class="icon-box iconbox-blue mr-5 bg-warning" >

              <h4><?=$hasil_data1['judul'];?></h4>
              <p>[<?=$hasil_data1['Tanggal'];?>]</p>
          
            </div>
          </div>     


          <?php } ?>
        </div>
      
      </div>

    </section>

<!-- End Services Section -->

        </div>
      </div>

    </section><!-- End Hero -->
<?php include 'kontakfooter.php' ?>

<!-- Vendor JS Files -->
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="assets/vendor/counterup/counterup.min.js"></script>
<script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/venobox/venobox.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>