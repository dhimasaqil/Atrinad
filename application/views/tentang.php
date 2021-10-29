<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
     <link href="<?php echo base_url().'assets/css/bootstrap.min.css'?>" rel="stylesheet">

    <title>Lapor, Accuracy Triage Natural Disaster</title>
  </head>
  <body>
    <?php $this->load->view('menu');?> <!--Include menu-->
  <style>
  .headline{
  background-image: url(<?php echo base_url(); ?>assets/image/xijian_Beacons.jpg);
  background-repeat: no-repeat;
  width: 100%;
  height: 100%;
  background-size: 100%;
  font :white;
  padding: 10%
}
.judul{
  color: white;
}
</style>

      <center>
      <div class="container-fluid headline">
  <h1 class="judul">Perubahan Positif Melalui Sinergi dan Eksekusi</h1>
</div>
<br/>
<?php $this->load->view('footer');?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo base_url().'assets/js/jquery.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/propper.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>
  </body>
</html>