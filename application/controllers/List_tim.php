<?php 


class List_tim extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_list_tim');
		$this->load->helper('url');

	}

	function index(){
	$data['tim'] = $this->m_list_tim->tampil_data()->result();
	if($this->session->userdata('akses')=='1'){
      $this->load->view('list_tim',$data);
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
  		}
	}
}