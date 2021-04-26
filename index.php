<!DOCTYPE html>
<?php session_start(); ?>
<?php include'koneksi.php' ?>
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
              <li class="active"><a href="#hero"><i class="fas fa-home mr-2"></i>Beranda</a></li>
              <li class="drop-down"><a href="#about"><i class="fas fa-sitemap mr-2"></i>Profil</a>
                <ul>
                  <li> <a href="kepengurusan.php"><i class="fas fa-star mr-2"></i>Visi & Misi</a></li>
                  <li> <a href="kepengurusan.php"><i class="fas fa-th-large mr-2"></i>Divisi HIMATIF</a> </li>                  
                  </ul>
              </li>
              <li class="drop-down"><a href="#about"><i class="fas fa-chart-line mr-2"></i>Aktifitas</a>
                <ul>
                  <li><a href="beritahimatif.php"><i class="fas fa-newspaper mr-2"></i>Berita</a></li> 
                  <li><a href="#services"><i class="fas fa-chart-line mr-2"></i>Kegiatan</a></li> 
                  <li><a href="#portfolio"><i class="fas fa-images mr-2"></i>Galeri</a></li> 
                  <li><a href="kalenderkegiatan.php"><i class="fas fa-list-alt mr-2"></i>Kalender HIMATIF</a></li> 
                </ul>
              </li>
              <li class="drop-down"><a href="#contact"><i class="fas fa-address-card mr-2"></i>Kontak</a>
                <ul>
                  <li><a href="#kolom"><i class="fas fa-edit mr-2"></i>Kolom Aspirasi</a></li> 
                </ul>
              </li>
              <?php
              if(!isset($_SESSION)) 
              {
               session_start();
             }
             if(!isset($_SESSION['sebagai'])){ ?>
             <?php  }else{?>
              <li class="drop-down"><a href=""><i class="fas fa-user-astronaut mr-2  rounded"></i></a>
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

<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center">

  <div class="container-fluid" data-aos="fade-up">
    <div class="row justify-content-center">
      <div class="col-xl-5 col-lg-6 pt-3 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
        <h1>HIMATIF</h1> <h1>POLINDRA</h1>
        <h2 style="text-align: justify;">Himpunan Mahasiswa Teknik Informatika adalah organisasi himpunan mahasiswa program studi bagi seluruh mahasiswa Teknik Informatika Politeknik Negeri Indramayu</h2>
        <div><a href="#about" class="btn-get-started scrollto">Selanjutnya..</a></div>
      </div>
      <div class="col-xl-4 col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="10">
        <img src="assets/img/logohimatif.png" class="img-fluid animated" alt="">
      </div>
    </div>
  </div>

</section><!-- End Hero -->

<main id="main">

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
    <div class="container">

      <div class="row">
        <div class="col-lg-6 order-1 order-lg-2" data-aos="zoom-in" data-aos-delay="150">
          <img src="assets/img/hero-bggg.png" class="img-fluid" alt="">
        </div>
        <div class="col-md-6 pt-lg-1 order-2 order-lg-1 content" data-aos="fade-right">
          <h3>HIMATIF POLINDRA</h3>
          <b class="font-italic">
            Himpunan Mahasiswa Teknik Informatika merupakan organisasi mahasiswa yang berperan untuk menampung dan mengarahkan kegiatan mahasiswa program studi Teknik Informatika 
          </b>

          <ul>
            <li><br><i class="icofont-check-circled"></i>VISI :</li>
            <li>”Menjadikan Himpunan Mahasiswa Teknik Informatika sebagai organsasi yan...<br></li>
            <li><i class="icofont-check-circled"></i>MISI :</li>
            <li>1. Meningkatkan kualitas HIMATIF sebagai sarana penyalur aspirasi Mahasiswa Jurusan Tek...
            </ul>
            <a href="kepengurusan.php" class="btn btn-primary">Selengkapnya</a>
          </div>
        </div>
      </div>
    </section>
    <!-- End About Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services services-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>KEGIATAN</h2>
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

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100" >

            <div class="icon-box iconbox-blue mr-auto" >

              <img src="assets/img/<?=$hasil_data1['gambar'];?>" width="300" height="300" > 
              <h4><?=$hasil_data1['judul'];?></h4>
              <p>[<?=$hasil_data1['Tanggal'];?>]</p>
              <p><?=$hasil_data1['keterangan'];?></p>
            </div>
          </div>                    

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100" >
            <div class="icon-box iconbox-blue mr-auto" >
              <img src="assets/img/<?=$hasil_data2['gambar'];?>" width="300" height="300" > 
              <h4><?=$hasil_data2['judul'];?></h4>
              <p>[<?=$hasil_data2['Tanggal'];?>]</p>
              <p><?=$hasil_data2['keterangan'];?></p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100" >
            <div class="icon-box iconbox-blue mr-auto" >
              <img src="assets/img/<?=$hasil_data3['gambar'];?>" width="300" height="300" > 
              <h4><?=$hasil_data3['judul'];?></h4>
              <p>[<?=$hasil_data3['Tanggal'];?>]</p>
              <p><?=$hasil_data3['keterangan'];?></p>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100" >
            <div class="icon-box iconbox-blue mr-auto" >
              <img src="assets/img/<?=$hasil_data4['gambar'];?>" width="300" height="300" >
              <h4><?=$hasil_data4['judul'];?></h4>
              <p>[<?=$hasil_data4['Tanggal'];?>]</p>
              <p><?=$hasil_data4['keterangan'];?></p>
            </div>
          </div>
          
           <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100" >
            <div class="icon-box iconbox-blue mr-auto" >

              <img src="assets/img/<?=$hasil_data5['gambar'];?>" width="300" height="300" >
              <h4><?=$hasil_data5['judul'];?></h4>
              <p>[<?=$hasil_data5['Tanggal'];?>]</p>
              <p><?=$hasil_data5['keterangan'];?></p>
            </div>
          </div>

           <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100" >
            <div class="icon-box iconbox-blue mr-auto" >

              <img src="assets/img/<?=$hasil_data6['gambar'];?>" width="300" height="300" > 
              <h4><?=$hasil_data6['judul'];?></h4>
              <p>[<?=$hasil_data6['Tanggal'];?>]</p>
              <p><?=$hasil_data6['keterangan'];?></p>
            </div>
          </div>
          <?php } ?>
        </div>
      <a id="kalender" type="button" class="btn btn-warning btn-lg btn-block" href="kalenderkegiatan.php">KALENDER KEGIATAN HIMATIF</a>
      </div>

    </section>

<!-- End Services Section -->



<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>GALERI</h2>
    </div>

    <div class="row">
      <div class="col-lg-12 d-flex justify-content-center">
        <ul id="portfolio-flters">
          <li data-filter="*" class="filter-active">Semua</li>
          <li data-filter=".filter-app">Kegiatan</li>
          <li data-filter=".filter-card">Kaderisasi</li>
          <li data-filter=".filter-web">Kumpulan</li>
        </ul>
      </div>
    </div>

    <div class="row portfolio-container">

      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <div class="portfolio-wrap">
          <img src="assets/img/portfolio/raker.png" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Kegiatan</h4>
            <p>Raker & Rakor</p>
          </div>
          <div class="portfolio-links">
            <a href="assets/img/portfolio/raker.png" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="bx bx-plus"></i></a>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <div class="portfolio-wrap">
          <img src="assets/img/portfolio/WhatsApp Image 2020-11-09 at 12.26.55 (7).jpeg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Kaderisasi</h4>
            <p>LKMM-PD</p>
          </div>
          <div class="portfolio-links">
            <a href="assets/img/portfolio/WhatsApp Image 2020-11-09 at 12.26.55 (7).jpeg" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>
             
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <div class="portfolio-wrap">
          <img src="assets/img/portfolio/rakerr.PNG" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Kegiatan</h4>
            <p>Raker & Rakor</p>
          </div>
          <div class="portfolio-links">
            <a href="assets/img/portfolio/rakerr.PNG" data-gall="portfolioGallery" class="venobox" title="App 2"><i class="bx bx-plus"></i></a>
             
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-card">
        <div class="portfolio-wrap">
          <img src="assets/img/portfolio/WhatsApp Image 2020-11-09 at 12.26.55 (8).jpeg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Kaderisasi</h4>
            <p>LKMM-PD</p>
          </div>
          <div class="portfolio-links">
            <a href="assets/img/portfolio/WhatsApp Image 2020-11-09 at 12.26.55 (8).jpeg" data-gall="portfolioGallery" class="venobox" title="Card 2"><i class="bx bx-plus"></i></a>
             
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <div class="portfolio-wrap">
          <img src="assets/img/portfolio/WhatsApp Image 2020-11-09 at 12.26.55 (9).jpeg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Kumpulan</h4>
            <p>IT Cash</p>
          </div>
          <div class="portfolio-links">
            <a href="assets/img/portfolio/WhatsApp Image 2020-11-09 at 12.26.55 (9).jpeg" data-gall="portfolioGallery" class="venobox" title="Web 2"><i class="bx bx-plus"></i></a>
             
          </div> 
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-app">
        <div class="portfolio-wrap">
          <img src="assets/img/portfolio/Wisuda1.JPG" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Kegiatan</h4>
            <p>Perayaan Wisuda</p>
          </div>
          <div class="portfolio-links">
            <a href="assets/img/portfolio/Wisuda1.JPG" data-gall="portfolioGallery" class="venobox" title="App 3"><i class="bx bx-plus"></i></a>
             
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-card">
        <div class="portfolio-wrap">
          <img src="assets/img/portfolio/WhatsApp Image 2020-11-09 at 12.26.55 (5).jpeg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Kaderisasi</h4>
            <p>PKJTI</p>
          </div>
          <div class="portfolio-links">
            <a href="assets/img/portfolio/WhatsApp Image 2020-11-09 at 12.26.55 (5).jpeg" data-gall="portfolioGallery" class="venobox" title="Card 1"><i class="bx bx-plus"></i></a>
             
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-card">
        <div class="portfolio-wrap">
          <img src="assets/img/portfolio/WhatsApp Image 2020-11-09 at 12.26.55 (11).jpeg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Kaderisasi</h4>
            <p>LKMM-D</p>
          </div>
          <div class="portfolio-links">
            <a href="assets/img/portfolio/WhatsApp Image 2020-11-09 at 12.26.55 (12).jpeg" data-gall="portfolioGallery" class="venobox" title="Card 3"><i class="bx bx-plus"></i></a>
             
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 portfolio-item filter-web">
        <div class="portfolio-wrap">
          <img src="assets/img/portfolio/WhatsApp Image 2020-11-09 at 12.26.55 (14).jpeg" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>Kumpulan</h4>
            <p>Bakaran</p>
          </div>
          <div class="portfolio-links">
            <a href="assets/img/portfolio/WhatsApp Image 2020-11-09 at 12.26.55 (14).jpeg" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="bx bx-plus"></i></a>
             
          </div>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Portfolio Section -->

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