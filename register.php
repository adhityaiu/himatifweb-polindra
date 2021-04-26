         <?php 
         session_start();
         require_once ("koneksi.php");

         if (isset($_POST['register'])) {
           $nim = $_POST ['nim'];
           $nama = $_POST ['name'];
           $username = $_POST ['username'];
           $email = $_POST ['email'];
           $password = md5($_POST ['password']);
           $sebagai = '2';

           $ambil = mysqli_query($koneksi,"SELECT username,nim FROM akun WHERE username = '$username' AND nim = '$nim'");
           $cocok =mysqli_num_rows($ambil);

           $ambil1 = mysqli_query($koneksi,"SELECT username FROM akun WHERE username = '$username'");
           $cocok1 =mysqli_num_rows($ambil1);
           $ambil2 = mysqli_query($koneksi,"SELECT nim FROM akun WHERE nim = '$nim'");
           $cocok2 =mysqli_num_rows($ambil2);

           if ($cocok > 0) {
            echo "<div class='alert alert-success text-center'>Maaf Username dan Nim Sudah Terdaftar</div>";
          } 
          elseif ($cocok1 > 0) {
            echo "<div class='alert alert-success text-center'>Maaf Username Sudah Terdaftar</div>";
          }
          else if ($cocok2 > 0) {
            echo "<div class='alert alert-success text-center'>Maaf  Nim Sudah Terdaftar</div>";
          }
          else {
           mysqli_query($koneksi,"INSERT INTO akun (nim,nama,username,sebagai,password,email) VALUES('$nim','$nama','$username','$sebagai','$password','$email')");
           echo "<meta http-equiv='refresh' content='1;url=homelogin.php?'>";
           echo "<div class='alert alert-success text-center'> Data Berhasil Disimpan</div>";
         } 
       }
       ?>


       <!DOCTYPE html>
       <html>
       <head>
         <title>Register</title>
         <link href="assets/img/logohimatif.png" rel="icon">
         <link rel="stylesheet" type="text/css" href="css/style.css">
         <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
         <script src="https://kit.fontawesome.com/a81368914c.js"></script>
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <style type="text/css">
           .alert{
            background: #e44e4e;
            color: white;
            padding: 10px;
            text-align: center;
            border:1px solid #b32929;
          </style>
        </head>
        <body>

          <img class="wave" src="assets/img/login/wave.png">
          <div class="container">
            <div class="img">
              <img src="assets/img/login/logohimatif.png">
            </div>
            <div class="login-content">
              <form method="post" action="" role="form">
                <img src="assets/img/login/login.svg">
                <h2 class="title">REGISTER AKUN</h2>

                <div class="input-div one">
                  <div class="i">
                    <i class="fas fa-user"></i>
                  </div>  
                  <div class="div">
                    <h5>NIM</h5>
                    <input class="input" type="text" name="nim" id="name" required="">
                  </div>
                </div>

                <div class="input-div one">
                  <div class="i">
                    <i class="fas fa-user"></i>
                  </div> 
                  <div class="div">
                    <h5>Nama Lengkap</h5>
                    <input class="input" type="text" name="name" id="name" required="">
                  </div>
                </div>

                <div class="input-div one">
                  <div class="i">
                    <i class="fas fa-user"></i>
                  </div>  
                  <div class="div">
                    <h5>Username</h5>
                    <input class="input" type="text" name="username" id="username" required="">
                  </div>
                </div>
                <div class="input-div pass">
                  <div class="i">
                    <i class="fas fa-user"></i>
                  </div>
                  <div class="div">
                    <h5>Email</h5>
                    <input type="email" class="input" id="email" required="required" name="email" required="">
                  </div>
                </div>

                <div class="input-div pass">
                  <div class="i">
                    <i class="fas fa-lock"></i>
                  </div>
                  <div class="div">
                    <h5>Password</h5>
                    <input type="password" class="input" id="password" required="required" name="password" required="">
                  </div>
                </div>

                <input type="submit" class="btn" name="register" value="DAFTAR">

              </form>
            </div>
          </div>
          <script type="text/javascript" src="js/main.js"></script>
        </body>
        </html>
       