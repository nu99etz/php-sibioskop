<?php

class Auth extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model("Auth_M");
	}

	public function index(){
		$this->login();
	}

	public function login(){
		if($this->session->userdata('admin')||$this->session->userdata("manager")||$this->session->userdata("customer")){
			redirect("Bioskop/");
		}
		else{
			$data['judul'] = "Bioskop 24 Masuk";
			$this->load->view('assets/header.php',$data);
			$this->load->view('masuk');
			$this->load->view('assets/footer.php');
		}
	}

	public function daftar(){
		if($this->session->userdata('customer')){
			redirect("Bioskop/");
		}
		else{
			redirect('Customer/daftar');
		}
	}

	public function loginaksi(){
		$post = $this->input->post();
		$user = $post['username'];
		$pass = $post['password'];
		$data = $this->Auth_M->authProcess($user);
		$data2 = $this->Auth_M->authProcess2($user);
		$data3 = $this->Auth_M->authProcess3($user);
		$data4 = $this->Auth_M->authProcess4($user);
		if($data){
			if($pass==$data->password){
					$session = array(
					'admin'=>TRUE,
					'username'=>$data->username,
					'pass'=>$data->password);
					$this->session->set_userdata($session);
					redirect('Admin/');
		}
	}
	else if($data2){
		if($pass==$data2->no_telp_manager){
					$session = array(
					'manager'=>TRUE,
					'username'=>$data2->nama_manager,
					'pass'=>$data2->no_telp_manager);
					$this->session->set_userdata($session);
					redirect("Admin/");
		}
	}
	else if($data3){
		if($pass==$data3->password){
					$session = array(
					'customer'=>TRUE,
					'username'=>$data3->nama_customer,
					'id'=>$data3->id_customer);
					$this->session->set_userdata($session);
					redirect("Bioskop/index");
		}
	}
	else if($data4){
		if($pass==$data4->password){
					$session = array(
					'petugas'=>TRUE,
					'username'=>$data4->nama_petugas,
					'id'=>$data4->nip);
					$this->session->set_userdata($session);
					redirect("Admin/");
		}
	}
	else{
		$this->session->set_flashdata('gagal','Akun Tidak Ditemukan');
		redirect('Auth/');
	}
}	

	public function logout(){
		if($this->session->userdata("admin")||$this->session->userdata("manager")||$this->session->userdata("customer")||$this->session->userdata("petugas")){
			$this->session->sess_destroy();
			redirect("Auth/");
		}
		else{
			redirect("Bioskop/");
		}		
	}
}