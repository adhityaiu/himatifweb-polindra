<!DOCTYPE HTML>
<?php session_start(); ?>
<?php include'koneksi.php'?>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="../assets/img/logohimatif.png" rel="icon">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="admin.css">
  <link rel="stylesheet" type="text/css" href="../fontawesome-free/css/all.min.css">

  <title>HALAMAN PENGURUS</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-warning fixed-top">
    <a class="navbar-brand" href="../index.php">Selamat Datang <b> <?php echo $_SESSION['username'] ?></b> | <B>HIMATIF WEB</B></a>
    <div class="icon ml-auto">
      <h5><a href="../index.php"><i class="fas fa-home mr-2 color-black" data-toggle="tooltip" title="BERANDA"></i></a><a href="datakegiatan.php"><i class="fas fa-chart-line mr-2 color-black" data-toggle="tooltip" title="ADMIN"></i></a><a href="../logout.php"><i class="fas fa-sign-out-alt mr-3" data-toggle="tooltip" title="LOGOUT"></i></a>
      </h5>
    </div>
  </nav>
  <div class="row no-gutters mt-5">
    <div class="col-md-2 bg-dark mt-2 pr-3 pt-4">
     <ul class="nav flex-column ml-3 mb-5">
      <li class="nav-item">
        <a class="nav-link active text-white" href="dashboard.php"><i class="fas fa-tachometer-alt mr-2"></i>Dashboard</a><hr class="bg-secondary">
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="pengurus.php"><i class="fas fa-user-astronaut mr-2"></i>Data Pengurus</a><hr class="bg-secondary">
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="databarang.php"><i class="fas fa-archive mr-2"></i>Data Sekre</a><hr class="bg-secondary">
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="aspirasi.php"><i class="fas fa-box-open mr-2"></i>Kotak Aspirasi</a><hr class="bg-secondary">
      </li>
    </ul> 
  </div>