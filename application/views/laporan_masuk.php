<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link href="<?php echo base_url().'assets/css/bootstrap.min.css'?>" rel="stylesheet">

  <title>Laporan Masuk, Accuracy Triage Natural Disaster</title>
</head>
<body>
  <?php $this->load->view('menu');?> <!--Include menu-->

  <div class="container-fluid">
  <center><h1>Daftar Laporan Masuk</h1></center>
  
    <div class="table-responsive">
      <table class="table" style="margin:20px auto;">
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>NIK</th>
          <th>Email</th>
          <th>No Hp</th>
          <th>Alamat</th>
          <th>Kota</th>
          <th>Kode Pos</th>
          <th>Jenis Bencana</th>
          <th>Status</th>
          <th>Actions</th>
        </tr>
        <?php 
        $no = 1;
        foreach($laporan as $lap){ 
          ?>
          <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $lap->nama ?></td>
            <td><?php echo $lap->nik ?></td>
            <td><?php echo $lap->email ?></td>
            <td><?php echo $lap->noHp ?></td>
            <td><?php echo $lap->alamat ?></td>
            <td><?php echo $lap->kota ?></td>
            <td><?php echo $lap->kodePos ?></td>
            <td><?php echo $lap->deskripsi ?></td>
            <td><?php echo $lap->validasi ?></td>
            <td>
              <?php echo anchor('crud/edit/'.$lap->nik,'Edit'); ?>
              <?php echo anchor('crud/hapus/'.$lap->nik,'Hapus'); ?>   
            </td>
          </tr>
        <?php } ?>
      </table>
    </body>
    </html>
  </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="<?php echo base_url().'assets/js/jquery.min.js'?>"></script>
<script src="<?php echo base_url().'assets/js/propper.min.js'?>"></script>
<script src="<?php echo base_url().'assets/js/bootstrap.min.js'?>"></script>
</body>
</html>