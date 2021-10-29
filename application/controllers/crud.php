<?php 


class Crud extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_laporan');
		$this->load->helper('url');

	}

	function index(){
	$data['laporan'] = $this->m_laporan->tampil_data()->result();
	if($this->session->userdata('akses')=='2' || $this->session->userdata('akses')=='3'){
      $this->load->view('buat_laporan',$data);
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
  		}
	}

	function lihatlaporan(){
	$data['laporan'] = $this->m_laporan->tampil_data()->result();
	if($this->session->userdata('akses')=='1'){
      $this->load->view('laporan_masuk',$data);
    }else{
      echo "Anda tidak berhak mengakses halaman ini";
  		}
	}

	function buatlaporan(){
		$nama = $this->input->post('nama');
		$nik = $this->input->post('nik');
		$email = $this->input->post('email');
		$noHp = $this->input->post('noHp');
		$alamat = $this->input->post('alamat');
		$kota = $this->input->post('kota');
		$kodePos = $this->input->post('kodePos');
		$deskripsi = $this->input->post('deskripsi');
		$validasi = $this->input->post('validasi');

		$data = array(
			'nama' => $nama,
			'nik' => $nik,
			'email' => $email,
			'noHp' => $noHp,
			'alamat' => $alamat,
			'kota' => $kota,
			'kodePos' => $kodePos,
			'deskripsi' => $deskripsi,
			'validasi' => $validasi

			);
		$this->m_laporan->input_data($data,'laporan');
		redirect('welcome');
	}

	function hapus($id){
		$where = array('id' => $id);
		$this->m_data->hapus_data($where,'laporan');
		redirect('welcome');
	}

	function edit($id){
		$where = array('id' => $id);
		$data['laporan'] = $this->m_data->edit_data($where,'laporan')->result();
		$this->load->view('v_edit',$data);
	}
	function update(){
		$nama = $this->input->post('nama');
		$nik = $this->input->post('nik');
		$alamat = $this->input->post('alamat');
		$kota = $this->input->post('kota');
		$kodePos = $this->input->post('kodePos');
		$deskripsi = $this->input->post('deskripsi');
		$validasi = $this->input->post('validasi');

	$data = array(
		'nama' => $nama,
		'nik' => $nik,
		'alamat' => $alamat,
		'kota' => $kota,
		'kodePos' => $kodePos,
		'deskripsi' => $deskripsi,
		'validasi' => $validasi
	);

	$where = array(
		'id' => $id
	);

	$this->m_data->update_data($where,$data,'laporan');
	redirect('welcome');
}

}