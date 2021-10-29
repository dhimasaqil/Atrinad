<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link href="<?php echo base_url().'assets/css/bootstrap.min.css'?>" rel="stylesheet">

  <title>List User, Accuracy Triage Natural Disaster</title>
</head>
<body>
  <?php $this->load->view('menu');?> <!--Include menu-->

  <div class="container-fluid">
  <center><h1>List User Terdaftar</h1></center>
  
    <div class="table-responsive">
      <table class="table" style="margin:20px auto;">
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>NIK</th>
          <th>Email</th>
          <th>No Hp</th>
          <th>Actions</th>
        </tr>
        <?php 
        $no = 1;
        foreach($user as $u){ 
          ?>
          <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $u->nama ?></td>
            <td><?php echo $u->nik ?></td>
            <td><?php echo $u->email ?></td>
            <td><?php echo $u->noHp ?></td>
            <td>
              <?php echo anchor('crud/edit/'.$u->nik,'Edit'); ?>
              <?php echo anchor('crud/hapus/'.$u->nik,'Hapus'); ?>   
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