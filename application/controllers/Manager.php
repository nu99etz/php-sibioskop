<?php

class Manager extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model("Manager_M");
	}

	public function viewManager(){
		if(!$this->session->userdata('admin')&&!$this->session->userdata('manager')){
			$this->session->set_flashdata('warning', 'Silahkan Masuk Dulu');
			redirect("Auth/");
		}
		else{
			$mng['manager'] = $this->Manager_M->viewManagerM();
			$data['judul'] = "List Manager";
			$this->load->view('assets/header',$data);
			$this->load->view('manager/main',$mng);
			$this->load->view('assets/footer');
		}
	}

	public function addManagerAction(){
		if($this->session->userdata("admin")||$this->session->userdata('manager')){
			$this->Manager_M->addAction();
			$this->session->set_flashdata('success', 'Data Berhasil disimpan');	
			redirect('Admin/viewManager');
		}
		else{
			redirect("Auth/");
		}
	}

	public function profile($id){
		if($this->session->userdata("admin")||$this->session->userdata('manager')){
			$flm['film'] = $this->Manager_M->lihat_manager_id($id);
			$data['judul'] = "Ubah Manager";
			$this->load->view('assets/header',$data);
			$this->load->view('manager/detail',$flm);
			$this->load->view('assets/footer');
		}
		else{
			$this->session->set_flashdata('warning', 'Silahkan Masuk Dulu');
			redirect("Auth/");
		}
	}
}

