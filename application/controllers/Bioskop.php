<?php

class Bioskop extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$this->load->model('Bioskop_M');	
	}

	private function authentikasi(){
		if($this->session->userdata("admin")||$this->session->userdata("manager")){
			redirect("Bioskop/");
		}
		else{
			$this->session->set_flashdata('warning', 'Silahkan Masuk Dulu');
			redirect("Auth/");
		}
	}

	public function index(){
		$this->listfilm();
	}

	public function listfilm(){
		$flm['film'] = $this->Bioskop_M->lihat_film();
		$data['judul'] = "Bioskop 24";
		$this->load->view('assets/header.php',$data);
		$this->load->view('film/main.php',$flm);
		$this->load->view('assets/footer.php');
	}

	public function login(){
		redirect("Auth/index");
	}

	public function logout(){
		redirect("Auth/logout");
	}

	public function detail_film($id){
		$query = $this->Bioskop_M->lihat_film_id($id);
		$flm['film'] = $query;
		foreach ($query as $film) {
			$judul = $film['nama_film'];
		}
		$data['judul'] = $judul;
		$this->load->view('assets/header.php',$data);
		$this->load->view('film/details.php',$flm);
		$this->load->view('assets/footer.php');
	}

	public function register(){
		$data['judul'] = "Daftar";
		$this->load->view('assets/header.php',$data);
		$this->load->view('film/register.php');
		$this->load->view('assets/footer.php');
	}

	public function hapusfilm($id){
		if($this->session->userdata("admin")||$this->session->userdata("manager")){
			$this->Bioskop_M->hapus_film($id);
			redirect('Bioskop/index');
		}
		else{
			$this->session->set_flashdata('warning', 'Silahkan Masuk Dulu');
			redirect("Auth/");
		}
	}

	public function search(){
		$flm['film'] = $this->Bioskop_M->searchaksi();
		$data['judul'] = "Bioskop 24";
		$this->load->view('assets/header.php',$data);
		$this->load->view('film/main.php',$flm);
		$this->load->view('assets/footer.php');

	}

	public function pesan($id){
		if($this->session->userdata('admin')||$this->session->userdata('manager')||$this->session->userdata('customer')||$this->session->userdata('petugas')){
			$flm['film'] = $this->Bioskop_M->lihat_film_id($id);
			$flm['harga'] = $this->Bioskop_M->listHarga($id);
			$flm['waktu'] = $this->Bioskop_M->listJam();
			$data['judul'] = "Pesan";
			$this->load->view('assets/header.php',$data);
			$this->load->view('film/pesan.php',$flm);
			$this->load->view('assets/footer.php');
		}
		else{
			$this->session->set_flashdata('warning', 'Silahkan Masuk Dulu');
			redirect("Auth/");
		}
	}

	public function pilihKursi($id){
		if($this->session->userdata('admin')||$this->session->userdata('manager')||$this->session->userdata('customer')||$this->session->userdata('petugas')){
			$flm['film'] = $this->Bioskop_M->detailKursi($id);
			$data['judul'] = "Pilih Kursi";
			$this->load->view('assets/header',$data);
			$this->load->view('film/kursi',$flm);
			$this->load->view('assets/footer');	
			
		}
	}

	public function lihatTiket($id){
		if($this->session->userdata('admin')||$this->session->userdata('manager')||$this->session->userdata('customer')||$this->session->userdata('petugas')){
			$flm['film'] = $this->Bioskop_M->lihat_Tiket($id);
			$data['judul'] = "Detail Tiket";
			$this->load->view('assets/header',$data);
			$this->load->view('film/tiket',$flm);
			$this->load->view('assets/footer');	
			
		}
	}	

	public function actionPesan(){
		if($this->session->userdata('admin')||$this->session->userdata('manager')||$this->session->userdata('customer')||$this->session->userdata('petugas')){
			$this->Bioskop_M->pesananAksi();
			if($this->session->userdata('customer')){
				$id = $this->session->userdata('id');
			}
			else{
				$id = $this->input->post('id_customer');
			}
			$query = $this->Bioskop_M->detailPesan($id);
				$flm['film'] = $query;
				foreach ($query as $film) {
				$judul = $film['id_customer'];
			}
			redirect('Bioskop/pilihKursi/'.$judul);
		}
	}

	public function actionTiket($id){
		if($this->session->userdata('admin')||$this->session->userdata('manager')||$this->session->userdata('customer')||$this->session->userdata('petugas')){
			$this->Bioskop_M->updateTiket($id);
			$this->session->set_flashdata('success', 'Pesanan Telah Ditambahkan');	
			redirect('Bioskop/lihatTiket/'.$id);
		}
	}
}