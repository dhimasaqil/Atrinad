<!DOCTYPE html>
<html>
<head>
  <title>Sign In</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Produk By Mfikri.com">
  <meta name="author" content="M Fikri Setiadi">
  <!-- Bootstrap -->
  <link href="<?php echo base_url().'assets/css/bootstrap.min.css'?>" rel="stylesheet">
</head>
<body>
  <?php $this->load->view('menu');?> <!--Include menu-->
  <div class="container-fluid cfluid">
    <div class="row">
      <div class="col-md-8 kiri">
        <div class="container keterangan">
          <h5>Layanan Login ATRINAD</h5>
          <p align="justify">Layanan Login ATRINAD merupakan aplikasi yang memungkinkan masyarakat, tim medis dan admin untuk mengakses fitur yang ada pada aplikasi.</p>

          <h5>Daftar Akun</h5>
          <p align="justify">Bagi masyarakat yang ingin menggunakan Login ATRINAD, anda harus daftar terlebih dahulu pada menu Sign Up.</p>

          <h5>Masyarakat</h5>
          <p align="justify">Masyarakat yang sudah melakukan pendaftaran bisa sign in untuk melakukan pelaporan bencana.</p>
          <h5>Tim Medis</h5>
          <p align="justify">Tim medis dapat menginputkan data identifikasi korban dan melihat triase korban.</p>
          <h5>Peringatan Kemanan</h5>
          <p align="justify">Demi keamanan, mohon selalu logout dari ATRINAD dan mematikan browser jika telah selesai mengakses layanan ATRINAD.</p>
        </div>

      </div>
      <div class="col-md-4 kiri">
        <div class="container">
          <form class="form-signin" action="<?php echo base_url().'index.php/signup/signup'?>" method="post">
            <?php echo $this->session->flashdata('msg');?>
            <br/>
            <input type="text" name="nama" class="form-control" placeholder="Nama Lengkap" required autofocus>
            <br/>
            <input type="tex" name="nik" class="form-control" placeholder="NIK" required>
            <br/>
            
            <input type="text" name="email" class="form-control" placeholder="Email" required>
            <br/>
            
            <input type="text" name="noHp" class="form-control" placeholder="Nomor Handphone" required>
            <br/>
            
            <input type="password" name="pass" class="form-control" placeholder="Password" required>
            <br/>
            
            <input type="password" name="" class="form-control" placeholder="Masukan Ulang Password" required>
            <br/>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign Up</button>
            <br/>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid footer"><center>
    <p>Dikembangkan oleh Transformers Corp untuk Departemen Kesehatan<br/>©2018 Transformers Corp All Rights Reserved</p></center>
</div> <center><?php $this->load->view('footer');?></center>
<style>
.footer{
    background-color: #blue;
}
</style>

<style>
.keterangan{
  padding: 8%;
}
.form-signin{
  background:rgba(0,0,0,0.3);
  box-shadow: 0px 0px 20px 6px;
  padding-top:1%;
  padding-bottom:1%;
  padding-left: 5%;
  padding-right: 5%;
  margin: 12%;
  background-color: #E2F5F8;
}
.cfluid{
  background-color: #B1CAF8;
}
</style>

</body>





<!-- /container -->


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo base_url().'assets/js/jquery.js'?>"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>


</html>
