<?php
class Login_model extends CI_Model{
	//cek nip dan password dosen
	function auth_tim($username,$password){
		$query=$this->db->query("SELECT * FROM tim WHERE nik='$username' AND pass=MD5('$password') LIMIT 1");
		return $query;
	}

	//cek nim dan password mahasiswa
	function auth_user($username,$password){
		$query=$this->db->query("SELECT * FROM user WHERE nik='$username' AND pass=MD5('$password') LIMIT 1");
		return $query;
	}

}
