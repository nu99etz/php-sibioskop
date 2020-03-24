<?php

class Auth_M extends CI_Model{

	public function authProcess($user){
		$data = $this->db->get_where('bypass',['username'=>$user])->row();
		return $data;
	}

	public function authProcess2($user){
		$data = $this->db->get_where('manager',['id_manager'=>$user])->row();
		return $data;
	}

	public function authProcess3($user){
		$data = $this->db->get_where('customer',['email'=>$user])->row();
		return $data;
	}

	public function authProcess4($user){
		$data = $this->db->get_where('petugas',['nip'=>$user])->row();
		return $data;
	}
}