<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
     <link href="<?php echo base_url().'assets/css/bootstrap.min.css'?>" rel="stylesheet">

    <title>Triase Korban, Accuracy Triage Natural Disaster</title>
  </head>
  <body>
    <?php $this->load->view('menu');?> <!--Include menu-->
      
     
  <center><h1>Triase Korban</h1></center>
  <div class="table-responsive">
  <table class="table" style="margin:20px auto;">
    <tr>
      <th>No</th>
      <th>Nama Korban</th>
      <th>ID Korban</th>
      <th>Status</th>
      <th>Lokasi</th>
      <th>Pemeriksa</th>
      <th>ID Pemeriksa</th>
      <th>Tindakan</th>
      <th>Actions</th>
    </tr>
    <?php 
    $no = 1;
    foreach($identifikasi as $iden){ 
    ?>
    <tr>
      <td><?php echo $no++ ?></td>
      <td><?php echo $iden->nama ?></td>
      <td><?php echo $iden->id ?></td>
      <td><?php echo $iden->status ?></td>
      <td><?php echo $iden->lokasi ?></td>
      <td><?php echo $iden->pemeriksa ?></td>
      <td><?php echo $iden->idPemeriksa ?></td>
      <td><?php echo $iden->tindakan ?></td>
      <td>
        <?php echo anchor('crud/edit/'.$iden->id,'Edit'); ?>
        <?php echo anchor('crud/hapus/'.$iden->id,'Hapus'); ?>   
      </td>
    </tr>
    <?php } ?>
     </table>
</body>
</html>
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo base_url().'assets/js/jquery.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/propper.min.js'?>"></script>
    <script src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>
  </body>
</html>