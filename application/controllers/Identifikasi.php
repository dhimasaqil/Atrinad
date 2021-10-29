<?php 


class Identifikasi extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_identifikasi');
		$this->load->helper('url');

	}

	function index(){
	$data['identifikasi'] = $this->m_identifikasi->tampil_data()->result();
	if($this->session->userdata('akses')=='2'){
      $this->load->view('identifikasi',$data);
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
  		}
	}

	function triase(){
	$data['identifikasi'] = $this->m_identifikasi->tampil_data()->result();
	if($this->session->userdata('akses')=='1'||$this->session->userdata('akses')=='2'){
      $this->load->view('triase',$data);
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
  		}
	}

	function identifikasi(){
		$nama = $this->input->post('nama');
		$id = $this->input->post('id');
		$status = $this->input->post('status');
		$lokasi = $this->input->post('lokasi');
		$pemeriksa = $this->input->post('pemeriksa');
		$idPemeriksa = $this->input->post('idPemeriksa');
		$tindakan = $this->input->post('tindakan');

		$data = array(
			'nama' => $nama,
			'id' => $id,
			'status' => $status,
			'lokasi' => $lokasi,
			'pemeriksa' => $pemeriksa,
			'idPemeriksa' => $idPemeriksa,
			'tindakan' => $tindakan

			);
		$this->m_identifikasi->input_data($data,'identifikasi');
		redirect('welcome');
	}

	

	function hapus($id){
		$where = array('id' => $id);
		$this->m_data->hapus_data($where,'identifikasi');
		redirect('welcome');
	}

	function edit($id){
		$where = array('id' => $id);
		$data['identifikasi'] = $this->m_data->edit_data($where,'identifikasi')->result();
		$this->load->view('v_edit',$data);
	}
	function update(){
	$nama = $this->input->post('nama');
	$status = $this->input->post('status');
	$lokasi = $this->input->post('lokasi');
	$pemeriksa = $this->input->post('pemeriksa');
	$idPemeriksa = $this->input->post('idPemeriksa');
	$tindakan = $this->input->post('tindakan');

	$data = array(
		'nama' => $nama,
		'status' => $status,
		'lokasi' => $lokasi,
		'pemeriksa' => $pemeriksa,
		'idPemeriksa' => $idPemeriksa,
		'tindakan' => $tindakan
	);

	$where = array(
		'id' => $id
	);

	$this->m_data->update_data($where,$data,'identifikasi');
	redirect('welcome');
}

}