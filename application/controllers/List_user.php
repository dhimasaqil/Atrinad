<?php 


class List_user extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_list_user');
		$this->load->helper('url');

	}

	function index(){
	$data['user'] = $this->m_list_user->tampil_data()->result();
	if($this->session->userdata('akses')=='1'){
      $this->load->view('list_user',$data);
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
  		}
	}
}