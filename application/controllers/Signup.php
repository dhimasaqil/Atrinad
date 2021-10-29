<?php 


class Signup extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_signup');
		$this->load->helper('url');

	}

	function index(){
	$data['user'] = $this->m_signup->tampil_data()->result();
      $this->load->view('signup',$data);
	}
	
	function signup(){
		$nama = $this->input->post('nama');
		$nik = $this->input->post('nik');
		$email = $this->input->post('email');
		$noHp = $this->input->post('noHp');
		$pass = $this->input->post('pass');

		$data = array(
			'nama' => $nama,
			'nik' => $nik,
			'email' => $email,
			'noHp' => $noHp,
			'pass' => md5($pass)

			);
		$this->m_signup->input_data($data,'user');
		redirect('page');
	}

}