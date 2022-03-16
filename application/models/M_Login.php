<?php
class M_Login extends CI_Model{
	function cek_login_user($username, $password){
		$query = $this->db->query("select * from user where username = '$username' and password = '$password'");
		return $query;
	}
 
	function cek_login_siswa($username, $password){
		$query = $this->db->query("select * from admin where nis = '$username' and password = '$password'");
		return $query;
	}
}
