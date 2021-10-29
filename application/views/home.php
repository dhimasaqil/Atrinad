<!DOCTYPE html>
<html>
  <head>
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Produk By Mfikri.com">
    <meta name="author" content="M Fikri Setiadi">
    <!-- Bootstrap -->
    
    <link href="<?php echo base_url().'assets/css/bootstrap.min.css'?>" rel="stylesheet">



  </head>
  <body>
     <?php $this->load->view('menu');?> <!--Include menu-->
<style>

  .container{
    margin: 5%;
  }
  .headline{
  background-image: url(<?php echo base_url(); ?>assets/image/dashboard.jpg);
  background-repeat: no-repeat;
  width: 100%;
  height: 100%;
  background-size: 100%;
  font :white;
  padding-top: 10%;
  padding-bottom: 10%;
  padding-right: 15%;
  padding-left: 15%;
}
.judul{
  color: white;
}

.jumbotron{
  background-color:#C0DEFA ;
}
.deskripsi{
  color: white;
}
</style>

      <center>
      <div class="container-fluid headline">
  <h1 class="judul">Solusi Pemetaan Koban Bencana Alam Untuk Penanganan Medis yang Lebih Baik</h1>
  <br/>
  <p class="lead deskripsi"><strong>Didukung oleh tenaga medis terbaik, ATRINAD membantu melakukan pemetaan korban bencana. Pengelolaan yang baik dalam memanajemen korban. Kami memproses laporan dari anda untuk ditindak lanjuti.</strong></p>
  <hr class="my-4">
  <a class="btn btn-primary btn-lg" href="#" role="button">Jelajahi</a>
</div>

<div class="container">
<div class="row">
  <div class="col-md-4">
<img src="<?php echo base_url(); ?>assets/image/money-bag.png" alt="">
<br/>
<br/>
<p class="lead"><span><strong>EFISIEN</strong></span> 
<br/>
  <br/> Korban diidentifikasi dan ditangani secara terpisah, penanganan korban berdasarkan prioritas dari data yang didapat dari proses triase.</p>
  </div>
  <div class="col-md-4">
<img src="<?php echo base_url(); ?>assets/image/data.png" alt="">
<br/>
<br/>
<p class="lead"><span><strong>INTEGRASI DATA</strong></span> 
  <br/>
  <br/> Akses input data oleh tim medis ke database triase korban, memudahkan dalam prioritas penanganan korban berdasarkan data tim medis.</p>
  </div>
  <div class="col-md-4">
<img src="<?php echo base_url(); ?>assets/image/worldwide.png" alt="">
<br/>
<br/>
<p class="lead"><span><strong>CEPAT & AKURAT</strong></span> 
  <br/>
  <br/> Kami membantu mengintegrasikan data ini untuk menghasilkan informasi lokasi bencana dan akan  ditindak lanjuti dengan segera.</p>
  </div>
</div>
</div>

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <img src="<?php echo base_url(); ?>assets/image/disaster.png" alt="" width="250" height="250">
      </div>
      <div class="col-md-8">
    <h1 class="display-4">Pemetaan Korban Bencana</h1>
    <p class="lead">Situasi Tanggap Bencana membutuhkan kolaborasi yang intens antara tim medis, pemerintah dan lembaga penegak hukum, agar dapat mendistribusikan Tim Medis secara efektif ke lokasi bencana untuk mengidentifikasi korban. ATRINAD menyediakan aplikasi dan platform yang canggih namun mudah digunakan, serta memfasilitasi proses pelaporan yang lebih baik. Pendekatan praktis ini menghemat waktu untuk memetakan korban.</p>
  </div>
  </div>
<br/>
  <div class="row">
      <div class="col-md-8">
    <h1 class="display-4">Keamanan dan Keselamatan</h1>
    <p class="lead">ATRINAD bekerja dengan lembaga penegak hukum dan bisnis dengan mengoptimalkan manajemen keamanan dan keselamatan. Solusi kami menyediakan Tim Medis untuk membantu mengidentifikasi triase korban dan memberikan tanggapan segera dengan mengirim tim secara efektif. </p>
  </div>
  <div class="col-md-4">
        <img src="<?php echo base_url(); ?>assets/image/defence.png" alt="" width="230" height="280">
      </div>
  </div>
</div>
</div>
<div id="container">
    <div id="footer">
        Dikembangkan oleh Transformers Corp untuk Departemen Kesehatan<br/>©2018 Transformers Corp All Rights Reserved
    </div>
<style>
html,body{
    height:100%;
}
    {margin:0px auto;}
#container{
    position:relative;
}
 
#header{
    background:#0cf;
    padding:10px;
}

#footer{
    height:100px;
    line-height:50px;
    background-color: #2267F9;
    color:#fff;
 
    position:absolute;
    bottom:0px;
 
    width:100%; /*biar memenuhi layar*/
}
</style>
</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{asset('/js/jquery.min.js')}}"></script>
    <script src="{{asset('/js/propper.min.js')}}"></script>
    <script src="{{asset('/js/bootstrap.min.js')}}"></script>
  </body>
</html>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   <script src="<?php echo base_url().'assets/js/jquery.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/propper.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>

  </body>
</html>
