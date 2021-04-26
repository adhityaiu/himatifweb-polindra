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

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">

      <div class="container-fluid" data-aos="fade-up">
        <div class="row justify-content-center">
         <div class="col-md-6 pt-lg-1 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="fade-right">
              <h1>HIMATIF POLINDRA</h1>
              <b class="font-italic">Himpunan Mahasiswa Teknik Informatika merupakan organisasi mahasiswa yang berperan untuk menampung dan mengarahkan kegiatan mahasiswa program studi Teknik Informatika<br> </b>
              <br>
              <h2><i class="icofont-check-circled"></i>VISI :<br></h2>
                ”Menjadikan Himpunan Mahasiswa Teknik Informatika sebagai organsasi yang lebih aktif, kreatif, dan solid serta mampu mengembangkan kualitas mahasiswa/i baik softskill maupun hardskill”<br>
              <h2><i class="icofont-check-circled"></i>MISI :<br></h2>
                1. Meningkatkan kualitas HIMATIF sebagai sarana penyalur aspirasi Mahasiswa Jurusan Teknik Informatika.
                  <br>
                  <br>
                  2. Menyusun dan melaksanakan sebuah program kerja yang bertujuan mengembangkan kualitas Mahasiswa Jurusan Teknik Informatika.
                  <br>
                  <br>
                  3. Meningkatkan rasa kekeluargaan antar anggota HIMATIF.
                  <br>
                  <br>
                4. Meningkatkan kesadaran untuk bersama-sama memajukan HIMATIF POLINDRA.</li>
                <br>
            </div>
          <div class="col-xl-4 col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="150">
            <img src="assets/img/logohimatif.png" class="img-fluid animated" alt="">
          </div>
        </div>
      </div>

    </section><!-- End Hero -->

    <main id="main">
      <section id="services" class="services services-bg">
        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <h2>Susunan Kepengurusan</h2>
          </div>
          <div class="col-lg-auto col-md-auto d-flex align-items-stretch ml-auto mr-auto mb-2" style="width: 60rem; height: 40rem" data-aos="zoom-in" data-aos-delay="100">    
                <img src="assets/img/pengurus/STRUKTUR.png" class="card-img-top" alt="...">
          </div>
          <div class="row">
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
              <div class="card" style="width: 30rem; height: 30rem">
                <img src="assets/img/pengurus/NONOP.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text" style="text-align: center;">NOPIYA SARI</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
              <div class="card" style="width: 30rem;">
                <img src="assets/img/pengurus/kahimwakahim.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text" style="text-align: center;">ADHITYA ILHAM UTOYO<br>PUTRI SETYOWATI</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
              <div class="card" style="width: 30rem; height: 30rem">
                <img src="assets/img/pengurus/ARUL.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text" style="text-align: center;">ARUL RACHMAN</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
              <div class="card" style="width: 30rem; height: 30rem">
                <img src="assets/img/pengurus/PSDM.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text" style="text-align: center;">DONI (KADIV), AMEL, ALIF, ARIQ</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
              <div class="card" style="width: 30rem;">
                <img src="assets/img/pengurus/HUMAS.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text" style="text-align: center;">ALYA (KADIV), KIDUT, DEVINA, GENANDRA, KHUSNUL, AYU</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
              <div class="card" style="width: 30rem; height: 30rem">
                <img src="assets/img/pengurus/RISTEK.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text" style="text-align: center;">RAKHMAT (KADIV), HENDA, FALDI, UUN, KENTI, NADWA</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
              <div class="card" style="width: 30rem; height: 30rem">
                <img src="assets/img/pengurus/KADERISASI.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text" style="text-align: center;">SAKTI (KASUBDIV), ISAM, SYARIF, IDANG, DESI, MERRY, YUHANA, INDAH</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
              <div class="card" style="width: 30rem;">
                <img src="assets/img/pengurus/INFOKOM.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text" style="text-align: center;">DELIA (KASUBDIV), NANDA, BUNGA, WINDA, DIPA, IMAM, FIKRI</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
              <div class="card" style="width: 30rem; height: 30rem">
                <img src="assets/img/pengurus/SC.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text" style="text-align: center;">KAMALUDIN (KASUBDIV), HALIMAH, DZULFIKAR, FUAD</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
              <div class="card" style="width: 30rem; height: 30rem">
                <img src="assets/img/pengurus/KEAKRABAN.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text" style="text-align: center;">FAISAL (KASUBDIV), GILANG, MICHAEL, FAISHOL, KARTIKA, SINTIA, YAYAS, LUCKY</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
              <div class="card" style="width: 30rem;">
                <img src="assets/img/pengurus/HUEKS.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text" style="text-align: center;">BABEH (KASUBDIV), ALI, FARKHAN, IQBAL, KORIAH, SRI</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
              <div class="card" style="width: 30rem; height: 30rem">
                <img src="assets/img/pengurus/KOMPETISI.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text" style="text-align: center;">MUNIR (KASUBDIV), AFANDI, AGENG, FATIMAH, VIA, SRI</p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
              <div class="card" style="width: 30rem; height: 30rem">
                <img src="assets/img/pengurus/RT.png" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text" style="text-align: center;">VANDA (KASUBDIV), AFIFAH, RIZQA, SALSA, DESI, RIFKI</p>
                </div>
              </div>
            </div>
          </div>
        </section>
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