<?php

class Customer extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model("Customer_M");
	}

	public function daftar(){
		if($this->session->userdata('customer')){
			redirect("Bioskop/");
		}
		else{
			$data['judul'] = "Bioskop 24 Daftar";
			$this->load->view('assets/header',$data);
			$this->load->view('customer/register');
			$this->load->view('assets/footer');
		}
	}

	public function addCustomerAction(){
		$this->Customer_M->addAction();
		$this->session->set_flashdata('success', 'Data Berhasil disimpan');	
		if($this->session->userdata("admin")||$this->session->userdata('manager')){	
			redirect('Customer/daftar');
		}
		else{
			redirect('Auth/');
		}
	}

	public function editProfile($id){
		if($this->session->userdata("admin")||$this->session->userdata("manager")||$this->session->userdata("customer")||$this->session->userdata("petugas")){
			$flm['cus'] = $this->Customer_M->profile($id);
			$data['judul'] = "Ubah Profile";
			$this->load->view('assets/header.php',$data);
			$this->load->view('customer/ubah.php',$flm);
			$this->load->view('assets/footer.php');
		}
		else{
			$this->session->set_flashdata('warning', 'Silahkan Masuk Dulu');
			redirect("Auth/");
		}
	}
}	