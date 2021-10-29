<?php
class Login extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('login_model');
	}

	function index(){
		$this->load->view('v_login');
	}

	function auth(){
        $username=htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
        $password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);

        $cek_tim=$this->login_model->auth_tim($username,$password);

        if($cek_tim->num_rows() > 0){ //jika login sebagai tim
						$data=$cek_tim->row_array();
        		$this->session->set_userdata('masuk',TRUE);
		         if($data['level']=='1'){ //Akses admin
		            $this->session->set_userdata('akses','1');
		            $this->session->set_userdata('ses_id',$data['nik']);
		            $this->session->set_userdata('ses_nama',$data['nama']);
		            redirect('page');

		         }else{ //akses tim
		            $this->session->set_userdata('akses','2');
					$this->session->set_userdata('ses_id',$data['nik']);
		            $this->session->set_userdata('ses_nama',$data['nama']);
		            redirect('page');
		         }

        }else{ //jika login sebagai user
					$cek_user=$this->login_model->auth_user($username,$password);
					if($cek_user->num_rows() > 0){
							$data=$cek_user->row_array();
        			$this->session->set_userdata('masuk',TRUE);
							$this->session->set_userdata('akses','3');
							$this->session->set_userdata('ses_id',$data['nik']);
							$this->session->set_userdata('ses_nama',$data['nama']);
							$this->session->set_userdata('ses_email',$data['email']);
							$this->session->set_userdata('ses_noHp',$data['noHp']);
							redirect('page');
					}else{  // jika username dan password tidak ditemukan atau salah
						$this->load->view('v_login');
					}
        }

    }

    function logout(){
        $this->session->sess_destroy();
        $url=base_url('');
        redirect($url);
    }

}
