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
          <h5>Identifikasi</h5>
          <p align="justify">Tim medis melakukan identifikasi dan pemeriksaan kepada korban untuk mengetahui kondisi dari korban.</p>

          <h5>Menandai Korban</h5>
          <p align="justify">Tim medis menandai korban yang sudah diidentifikasi dengan warna : Merah (Kasus Berat), Kuning (Kasus Sedang), Hijau (Kasus Ringan), Hitam (Meninggal Dunia).</p>

          <h5>Menginput Data</h5>
          <p align="justify">Setelah selesai melakukan identifikasi kepada korban bencana, tim medis diharuskan menginput data yang didapat melalui form yang ada disamping.</p>
          <h5>Triase</h5>
          <p align="justify">Tim medis juga dapat melihat triase korban yang sudah diidentifikasi dan diinputkan ke database melaui navbar "Triase".</p>
          <br/>
          <br/>
        </div>

      </div>
      <div class="col-md-4">
        <div class="container">
          <br/>
          <br/>
          <br/>
          
          <br/>
          <h5>Identifikasi Korbaan</h5>
         <form action="<?php echo base_url(). 'identifikasi/identifikasi'; ?>" method="post">
    <div class="form-group">
    <input type="text" class="form-control" name="nama" value=""placeholder="Nama Korban" required autofocus>
  </div>
  <div class="form-group">
    <input type="text" class="form-control" name="id" value="" placeholder="ID Korban" required autofocus>
  </div>
  
  <div>

  <fieldset>
   <legend class="text-center">Jenis Kasus</legend>

   <div class="container">
   <div class="row">

    <div class="col-md-3">
      <label>
        <input type="radio" name="status" value="Merah (Berat)"/>Merah
       </label>
    </div>

    <div class="col-md-3">
      <label>
        <input type="radio" name="status" value="Kuning (Sedang)"/>Kuning
      </label>
    </div>

    <div class="col-md-3">
     <label>
       <input type="radio" name="status" value="Hijau (Ringan)"/>Hijau
     </label>
    </div>
    
    <div class="col-md-3">
     <label>   
       <input type="radio" name="status" value="Hitam (Meninggal)"/>Hitam
     </label>
 </div>

</div>
</div>
  
  <div class="form-group">
    <input type="text" class="form-control" name="lokasi" value="" placeholder="Lokasi" required autofocus>
  </div>

  <div class="container">
   <div class="row">

    <div class="col-md-6">
      <label>
        <input type="text" name="pemeriksa" hidden value="<?php echo $this->session->userdata('ses_nama');?>">
       </label>
    </div>

    <div class="col-md-6">
      <label>
        <input type="text" name="idPemeriksa" hidden="" value="<?php echo $this->session->userdata('ses_id');?>">
      </label>
    </div>
  </div>
</div>
   <div class="form-group">
    <input type="text" class="form-control" hidden name="tindakan" value="Belum Ditangani" >
  </div>
  

            <center><button class="btn btn-lg btn-primary btn-block" type="submit">Identifikasi</button></center>
            </div>
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
  padding-top:20%%;
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
