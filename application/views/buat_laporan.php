<!DOCTYPE html>
<html>
<head>
  <title>Buat Laporan</title>
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
      <div class="col-md-7 kiri">
        <div class="container keterangan">
          <h5>Menyampaikan Laporan</h5>
          <p align="justify">Silahkan mengisi form disamping untuk menyampaikan laporan, dengan mengisikan alamat terjadinya bencana dan jenis bencana.</p>

          <h5>Validasi</h5>
          <p align="justify">Setelah Anda melakukan laporan, tim kami akan memvalidasi laporan yang Anda sampaikan.</p>

          <h5>Pengiriman Tim</h5>
          <p align="justify">Jika laporan valid, maka tim medis akan dikirimkan ke lokasi bencana dengan sesegera dan secepat mungkin.</p>
          <h5>Identifikasi</h5>
          <p align="justify">Tim medis akan melakukan identifikasi terhadap korban yang berada di zona bencana.</p>
          <h5>Triase</h5>
          <p align="justify">Tim medis memetakan prioritas penanganan korban berdasarkan data yang didapat dari proses identifikasi.</p>
        </div>

      </div>
      <div class="col-md-5 kiri">
        <div class="container">
         <form action="<?php echo base_url(). 'crud/buatlaporan'; ?>" method="post">
          
          <br/><br/>
    <legend><center>Membuat Laporan</center></legend>
    <br/>
    <div class="form-group">
    <input type="text" class="form-control" name="nama" readonly value="<?php echo $this->session->userdata('ses_nama');?>" placeholder="Nama Lengkap" required autofocus>

  </div>
  <div>
    <input type="text" class="form-control" name="nik" readonly value="<?php echo $this->session->userdata('ses_id');?>"placeholder="NIK" required autofocus>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <br/>
    <input type="text" class="form-control" name="email" readonly value="<?php echo $this->session->userdata('ses_email');?>" placeholder="Email" required autofocus>
  </div>

  <div class="form-group col-md-6">
    <br>
    <input type="text" class="form-control" name="noHp" readonly value="<?php echo $this->session->userdata('ses_noHp');?>" placeholder="Nomor Hp" required autofocus>
  </div>

  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
    <input type="text" class="form-control" name="alamat" placeholder="Alamat Bencana" required autofocus>
  </div>
    <div class="form-group col-md-3">
      <input type="text" class="form-control" name="kota" value="" placeholder="Kota" required autofocus>
    </div>
    
    <div class="form-group col-md-3">
      <input type="text" class="form-control" name="kodePos" value="" placeholder="Kode Pos" required autofocus>    
    </div>
  </div>  
  
  <div class="form-group">
    <input type="text" class="form-control" name="deskripsi" placeholder="Jenis Bencana" required autofocus>
  </div>

  <label><input type="hidden" name="validasi" value="Belum Validasi"></label>

  <center><button class="btn btn-lg btn-primary btn-block" type="submit">Laporkan</button></center>
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
