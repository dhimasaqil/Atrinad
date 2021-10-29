<!-- Collect the nav links, forms, and other content for toggling -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
  <!--Akses Menu Untuk Admin-->
  <?php if($this->session->userdata('akses')=='1'):?>
      <li class="nav-item"><a class="nav-link" href="<?php echo base_url().'page'?>">Home </span></a></li>
      <li class="nav-item"><a class="nav-link" href="<?php echo base_url().'crud/lihatlaporan'?>">Laporan </span></a></li>
      <li class="nav-item"><a class="nav-link" href="<?php echo base_url().'identifikasi/triase'?>">Triase </span></a></li>
      <li class="nav-item"><a class="nav-link" href="<?php echo base_url().'page/kmedis'?>">Kirim Medis </span></a></li>
      </span></a></li>
      <li class="nav-item"><a class="nav-link" href="<?php echo base_url().'List_user'?>">List User</span></a></li>
      </span></a></li>
      <li class="nav-item"><a class="nav-link" href="<?php echo base_url().'List_tim'?>">List Tim</span></a></li>
  <!--Akses Menu Untuk Dosen-->
  <?php elseif($this->session->userdata('akses')=='2'):?>
     <li class="nav-item"><a class="nav-link" href="<?php echo base_url().'page'?>">Home </span></a></li>
      <li class="nav-item"><a class="nav-link" href="<?php echo base_url().'page/identifikasi'?>">Identifikasi </span></a></li>
      <li class="nav-item"><a class="nav-link" href="<?php echo base_url().'identifikasi/triase'?>">Triase </span></a></li>
  <!--Akses Menu Untuk User-->
  <?php elseif($this->session->userdata('akses')=='3'):?>

      <li class="nav-item"><a class="nav-link" href="<?php echo base_url().'page'?>">Home </span></a></li>
      <li class="nav-item"><a class="nav-link" href="<?php echo base_url().'page/berita'?>">Berita </span></a></li>
      <li class="nav-item"><a class="nav-link" href="<?php echo base_url().'page/tentang'?>">Tentang </span></a></li>
      <li class="nav-item"><a class="nav-link" href="<?php echo base_url().'crud'?>">Laporan </span></a></li>
  <?php else:?>

      <li class="nav-item"><a class="nav-link" href="<?php echo base_url().'welcome'?>">Home </span></a></li>
      <li class="nav-item"><a class="nav-link" href="<?php echo base_url().'welcome/berita'?>">Berita </span></a></li>
      <li class="nav-item"><a class="nav-link" href="<?php echo base_url().'welcome/tentang'?>">Tentang </span></a></li>
      <li class="nav-item"><a class="nav-link" href="<?php echo base_url().'login'?>">Laporan </span></a></li>
  <?php endif;?>
  </ul>
<?php if($this->session->userdata('akses')=='1'||$this->session->userdata('akses')=='2'||$this->session->userdata('akses')=='3'):?>
  <form class="nav-item"><a class="nav-link" href="<?php echo base_url().'profil'?>"><?php echo $this->session->userdata('ses_nama');?> </span></a>
    </form>
    <form class="form-inline my-2 my-lg-0" action="<?php echo base_url().'login/logout'?>">
     <button type="logout" class="btn btn-outline-primary">Sign Out</button>
</form>
<?php else:?>
  <form class="nav-item"><a class="nav-link" href="<?php echo base_url().'login'?>">Sign In</span></a>
  </form>
    <form class="form-inline my-2 my-lg-0" action="<?php echo base_url().'signup'?>">
     <button type="logout" class="btn btn-outline-primary">Sign Up</button>
    </form>
  <?php endif;?>
  </div>
</nav>
