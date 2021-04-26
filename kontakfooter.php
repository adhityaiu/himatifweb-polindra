<!-- ======= Contact Section ======= -->
<section id="contact" class="contact contact-bg">
  <div class="container" data-aos="fade-up">

    <div class="section-title">
      <h2>KONTAK</h2>
    </div>

    <div class="row">
      <div class="col-lg-6">
        <div class="info-box mb-4">
          <i class="bx bx-map"></i>
          <h3>ALAMAT</h3>
          <p>Jl. Lohbener Lama No.08, Lohbener, Legok, Indramayu, Kabupaten Indramayu, Jawa Barat</p>
        </div>
      </div>

      <div class="col-lg-3 col-md-6">
        <a href="mailto:himatif@polindra.ac.id"><div class="info-box  mb-4">
          <i class="bx bx-envelope"></i>
          <h3>EMAIL</h3>
          <p>himatif@polindra.ac.id</p>
        </div></a>
      </div>

      <div class="col-lg-3 col-md-6">
        <div class="info-box  mb-4">
          <i class="bx bx-phone-call"></i>
          <h3>Whatsapp</h3>
          <p>+62 819 0389 9045</p>
        </div>
      </div>

    </div>

    <div class="row">

      <div class="col-lg-6 ">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.888728372307!2d108.27929851449501!3d-6.408332664456582!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6eb87d1fcaf97d%3A0x4fc15b3c8407ada4!2sPoliteknik%20Negeri%20Indramayu!5e0!3m2!1sid!2sid!4v1604865892730!5m2!1sid!2sid" width="550" height="415" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>

      <div id="kolom" class="col-lg-6">
        <form action="" method="POST" class="ml-3 mr-5" erctype="multipart/form-data">
          <div class="btn btn-primary p-2 mb-2"> KOLOM ASPIRASI </div>
          <div class="form-row">
            <div class="col-md-6 form-group">
              <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama" data-msg="Please enter at least 4 chars" required>
              <div class="validate"></div>
            </div>
            <div class="col-md-6 form-group">
              <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-msg="Please enter a valid email" required>
              <div class="validate"></div>
            </div>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" name="subjek" id="subjek" placeholder="Subjek"  data-msg="Please enter at least 8 chars of subject" required>
            <div class="validate"></div>
          </div>
          <div class="form-group">
            <textarea class="form-control" name="isi" id="isi" rows="5" data-msg="Please write something for us" placeholder="Aspirasi, saran, atau kritikan..." required></textarea>
            <div class="validate"></div>
          </div>
          <div class="text-center"><button  name="simpan" class="btn btn-primary btn-xs">Kirim</button></div>
        </form>
        <?php 
        if (isset($_POST['simpan'])) {
          $nama = $_POST ['nama'];
          $email = $_POST ['email'];
          $subjek = $_POST ['subjek'];
          $isi = $_POST ['isi'];
          mysqli_query($koneksi,"INSERT INTO tb_aspirasi (nama, email, subjek, isi) VALUES('$nama','$email','$subjek','$isi')");
          echo "<meta http-equiv='refresh' content='1;url=index.php?'>";
          echo "<div class='alert alert-success text-center'> Aspirasi Berhasil Dikirim</div>";
        } ?>
      </div>

    </div>

  </div>
</section><!-- End Contact Section -->
</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">

  <div class="footer-top">
    <div class="container">
      <div class="row">
        <div class="footer-contact">
          <h3>HIMATIF POLINDRA</h3>
          <hr>
          <p>
            Jl. Lohbener Lama No.08, Lohbener, Legok, Indramayu, Kabupaten Indramayu, Jawa Barat<br>
            Indonesia <br><br>
            <strong>Whatsapp:</strong> +62 819 0389 9045<br>
            <a href="mailto:himatif@polindra.ac.id"><strong>Email:</strong> himatif@polindra.ac.id<br></a>
          </p>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="copyright-wrap d-md-flex py-4">
      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          <H3>HIMATIF SATU TEKAD KITA JAYA!</H3> 
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="https://youtube.com/himatifpolindra" class="youtube"><i class="bx bxl-youtube"></i></a>
        <a href="https://twitter.com/himatifpolindra" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="https://facebook.com/himatifpolindra" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://instagram.com/himatif_polindra" class="instagram"><i class="bx bxl-instagram"></i></a>
      </div>
    </div>

  </div>
</footer><!-- End Footer -->
<a href="#" class="back-to-top"><i class="icofont-simple-up bg-warning"></i></a>
<div id="preloader"></div>