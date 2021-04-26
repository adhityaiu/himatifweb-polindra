<?php include 'headerdash.php'; ?>

  <div class="col-md-10 p-5 pt-2">
    <h3><i class="fas fa-user-astronaut mr-2"></i>DAFTAR PENGURUS</h3> <hr>
    <?php 

    if ($_SESSION ['sebagai'] == '1') {?>
     <a href="addpengurus.php" class="btn btn-primary mb-3"><i class="fas fa-user-plus mr-2"></i>TAMBAH PENGURUS</a>            <?php } else {
     }?>

     <table class="table table-striped text-center table-bordered">
      <thead class="thead-dark">
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nim</th>
          <th scope="col">Nama</th>
          <th scope="col">Jabatan</th>
          <th scope="col">Kelas</th>
          <th scope="col">Status</th>
          <?php

          if(!isset($_SESSION['sebagai'])){
            echo "<script>alert('Silahkan Login Terlebih Dahulu');</script>";
            echo "<script >location='homelogin.php'</script>";
          }
          ?>
          <?php 

          if ($_SESSION ['sebagai'] == '1') {?>
            <th colspan="3" scope="col">Aksi</th>
          <?php } else {
          }?>

        </tr>
      </thead>
      <tbody>
        <?php $no=1; ?>
        <?php $ambil = mysqli_query($koneksi,"SELECT * FROM tb_pengurus") ?>
        <?php while ($tampil = mysqli_fetch_assoc($ambil)) {
         ?>
         <tr>
          <td><?php echo $no++ ; ?></td>
          <td><?php echo $tampil['nim'] ?></td> 
          <td><?php echo $tampil['nama'] ?></td> 
          <td><?php echo $tampil['jabatan'] ?></td>
          <td><?php echo $tampil['kelas'] ?></td>
          <td><?php echo $tampil['status']?></td>

          <?php 

          if(!isset($_SESSION)) 
          { 
            session_start(); 
          } 

          if(($_SESSION['sebagai']=='1')){ ?>
            <td> <a href="editpengurus.php?id=<?php echo $tampil ['id_pengurus'] ?>"> <i class="fas fa-edit bg-success p-2 text-white rounded mr-2" data-toggle="tooltip" title="Edit" ></i></a>
             <a href="hapuspengurus.php?&id=<?php echo $tampil ['id_pengurus'] ?>" class="fas fa-trash bg-danger p-2 text-white rounded" data-toggle="tooltip" title="Hapus" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?')" class="btn btn-danger"> </a>

           </td>
         <?php  }else{?>

         <?php } ?>

       <?php } ?>  
     </tr>
   </tbody>
 </table>

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