          <?php include 'koneksi.php'; ?>
          <!DOCTYPE html>
          <html>
          <head>
            <title>LOGIN</title>
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

              <?php
              if(isset($_GET['pesan'])){
                if($_GET['pesan']=="gagal"){
                  echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
                }
              }?>

              <img class="wave" src="assets/img/login/wave.png">
              <div class="container">
                <div class="img">
                 <a href="index.php"> <img src="assets/img/login/logohimatif.png"> </a>
               </div>
               <div class="login-content">
                <form method="post" action="" role="form">
                  <img src="assets/img/login/login.svg">
                  <h2 class="title">Welcome</h2>
                  <div class="input-div one">
                    <div class="i">
                      <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                      <h5>Username</h5>
                      <input type="text" class="input" id="username" required="" name="username">
                    </div>
                  </div>
                  <div class="input-div pass">
                    <div class="i">
                      <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                      <h5>Password</h5>
                      <input type="password" class="input" id="password" required="" name="password">
                    </div>
                  </div>
                  <input type="submit" class="btn" name="masuk" value="Login">
                  <button class="btn" ><a href="register.php" class="" style="text-align: center; color: white"  >Register</a></button>
                  <a href="index.php"><i class="fas fa-home mr-2 color-black"></i>Beranda</a>
                  
                </form>
              </div>
              <script type="text/javascript" src="js/main.js"></script>


            </body>
            <?php session_start();
            if(isset($_POST['masuk'])){
              include 'koneksi.php';
              $username = $_POST['username'];
              $password = md5($_POST['password']);
              $ambil = mysqli_query($koneksi,"SELECT * FROM akun WHERE username = '$username' AND password = '$password'");
              $cocok =mysqli_num_rows($ambil);

              if($cocok > 0){
                $data =mysqli_fetch_assoc($ambil);
                if($data['sebagai'] == '1'){
                  $_SESSION ['username'] = $username;
                  $_SESSION["id"]=$data["id"];
                  $_SESSION["sebagai"]='1';
                  $_SESSION["nama"]=$data["nama"];


                  header("Location:index.php");

                }elseif ($data['sebagai'] == '2') {
                 $_SESSION ['username'] = $username;
                 $_SESSION["id"]=$data["id"];
                 $_SESSION["sebagai"]='2';
                 $_SESSION["nama"]=$data["nama"];

                 header("Location:index.php");
               } else{
                echo "Username atau password salah <br><a href='login.php'>Kembali</a>";
              }
            }else{
              header("location:homelogin.php?pesan=gagal");
            }
          }

            // else{
            //   header("location:homelogin.php?pesan=gagal");
            // }


          ?>

          </html>   