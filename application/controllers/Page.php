<?php
class Page extends CI_Controller{
  function __construct(){
    parent::__construct();
    //validasi jika user belum login
    if($this->session->userdata('masuk') != TRUE){
			$url=base_url();
			redirect($url);
		}
  }


  function index(){
    $this->load->view('v_dashboard');
  }

  function laporan(){
    // function ini hanya boleh diakses oleh admin dan dosen
    if($this->session->userdata('akses')=='1'){
      $this->load->view('laporan_masuk');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }

  }

  function triase(){
    // function ini hanya boleh diakses oleh admin dan dosen
    if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='2'){
      $this->load->view('triase');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }

  function kmedis(){
    // function ini hanya boleh diakses oleh admin dan mahasiswa
    if($this->session->userdata('akses')=='1'){
      $this->load->view('kirim_medis');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }

  function identifikasi(){
    // function ini hanya boleh diakses oleh admin dan mahasiswa
    if($this->session->userdata('akses')=='2'){
      $this->load->view('identifikasi');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }

  function berita(){
      $this->load->view('berita');
  }

  function tentang(){
      $this->load->view('tentang');
  }

  function blaporan(){
    // function ini hanya boleh diakses oleh admin dan mahasiswa
    if($this->session->userdata('akses')=='2' || $this->session->userdata('akses')=='3'){
      $this->load->view('buat_laporan');
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
    }
  }
}
