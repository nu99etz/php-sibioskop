<?php

class Admin extends CI_Controller{

	public function __construct(){
		parent::__construct();
		$models = array(
			'Bioskop_M'=>'bioskop',
			'Customer_M'=>'customer',
			'Manager_M'=>'manager',
			'Petugas_M'=>'petugas');
		foreach($models as $model => $nama){
			$this->load->model($model,$nama);	
		}	
	}

	public function index(){
		$this->viewFilm();
	}

	public function laporan(){
		if($this->session->userdata('admin')||$this->session->userdata('manager')||$this->session->userdata('petugas')){
			$laporan['lpk'] = $this->db->query("SELECT*FROM film a INNER JOIN harga h 
			ON a.quality=h.kualitas INNER JOIN pesanan p ON a.id_film=p.id_film INNER JOIN 
			customer k ON p.id_customer=k.id_customer")->result_array();
			$data['judul'] = "Bioskop 24 Laporan";
			$this->load->view('admin/header',$data);
			$this->load->view('admin/sidebar');
			$this->load->view('admin/laporan',$laporan);
			$this->load->view('admin/footer');
		}
		else{
			redirect('Bioskop/');
		}
	}

	public function viewFilm(){
		if($this->session->userdata('admin')||$this->session->userdata('manager')||$this->session->userdata('petugas')){
			$flm['film'] = $this->bioskop->lihat_film();
			$flm['judul'] = "List Film";
			$this->load->view('admin/header',$flm);
			$this->load->view('admin/sidebar');
			$this->load->view('admin/film',$flm);
			$this->load->view('admin/footer');
		}
		else{
			redirect('Bioskop/');
		}
	}

	public function addFilm(){
		if($this->session->userdata('admin')||$this->session->userdata('manager')||$this->session->userdata('petugas')){
			$flm['judul'] = "Tambah Film";
			$flm['kat'] = $this->bioskop->listKategori();
			$flm['dtl'] = $this->bioskop->listDetail();
			$this->load->view('admin/header',$flm);
			$this->load->view('admin/sidebar');
			$this->load->view('admin/tambah_f',$flm);
			$this->load->view('admin/footer');
		}
		else{
			redirect('Bioskop/');
		}
	}

	public function addactionfilm(){
		if($this->session->userdata("admin")||$this->session->userdata("manager")){
			$this->bioskop->tambah_film_aksi();
			$this->session->set_flashdata('success', 'Data Berhasil disimpan');	
			redirect('Admin/');
		}
		else{
			$this->session->set_flashdata('warning', 'Silahkan Masuk Dulu');
			redirect("Auth/");
		}
	}

	public function ubahFilm($id){
		if($this->session->userdata('admin')||$this->session->userdata('manager')||$this->session->userdata('petugas')){
			$data['judul'] = "Bioskop 24 Ubah Film";
			$flm['film'] = $this->bioskop->lihat_film_id($id);
			$flm['kat'] = $this->bioskop->listKategori();
			$flm['dtl'] = $this->bioskop->listDetail();
			$this->load->view('admin/header',$data);
			$this->load->view('admin/sidebar');
			$this->load->view('admin/ubah_f',$flm);
			$this->load->view('admin/footer');
		}
		else{
			redirect('Bioskop/');
		}
	}

	public function editActionfilm(){
		if($this->session->userdata("admin")||$this->session->userdata("manager")){
			$this->bioskop->ubah_film_aksi();
			$this->session->set_flashdata('success', 'Data Berhasil diubah');	
			redirect('Admin/');
		}
		else{
			$this->session->set_flashdata('warning', 'Silahkan Masuk Dulu');
			redirect("Auth/");
		}
	}

	public function hapusfilm($id){
		if($this->session->userdata("admin")||$this->session->userdata("manager")){
			$this->bioskop->hapus_film($id);
			$this->session->set_flashdata('success', 'Data Berhasil dihapus');
			redirect('Admin/');
		}
		else{
			$this->session->set_flashdata('warning', 'Silahkan Masuk Dulu');
			redirect("Auth/");
		}
	}

	public function viewCustomer(){
		if($this->session->userdata('admin')||$this->session->userdata('manager')||$this->session->userdata('petugas')){
			$flm['film'] = $this->customer->viewCustomer();
			$flm['judul'] = "List Customer";
			$this->load->view('admin/header',$flm);
			$this->load->view('admin/sidebar');
			$this->load->view('admin/customer',$flm);
			$this->load->view('admin/footer');
		}
		else{
			redirect('Bioskop/');
		}
	}

	public function addCustomer(){
		if($this->session->userdata('admin')||$this->session->userdata('manager')||$this->session->userdata('petugas')){
			$data['judul'] = "Bioskop 24 Tambah Customer";
			$this->load->view('admin/header',$data);
			$this->load->view('admin/sidebar');
			$this->load->view('admin/tambah_c');
			$this->load->view('admin/footer');
		}
		else{
			redirect('Bioskop/');
		}
	}

	public function ubahCustomer($id){
		if($this->session->userdata('admin')||$this->session->userdata('manager')||$this->session->userdata('petugas')){
			$data['judul'] = "Ubah Customer";
			$flm['film'] = $this->customer->profile($id);
			$this->load->view('admin/header',$data);
			$this->load->view('admin/sidebar');
			$this->load->view('admin/ubah_c',$flm);
			$this->load->view('admin/footer');
		}
		else{
			redirect('Bioskop/');
		}
	}

	public function addActioncus(){
		$this->customer->addAction();
		$this->session->set_flashdata('success', 'Data Berhasil disimpan');	
		if($this->session->userdata("admin")||$this->session->userdata('manager')){	
			redirect('Admin/viewCustomer');
		}
		else{
			redirect('Auth/');
		}
	}

	public function hapusCustomer($id){
		if($this->session->userdata("admin")||$this->session->userdata("manager")){
			$this->customer->hapus($id);
			$this->session->set_flashdata('success', 'Data Berhasil dihapus');
			redirect('Admin/viewCustomer');
		}
		else{
			$this->session->set_flashdata('warning', 'Silahkan Masuk Dulu');
			redirect("Auth/");
		}
	}

	public function editActioncus(){
		if($this->session->userdata("admin")||$this->session->userdata("manager")){
			$this->customer->edit();
			$this->session->set_flashdata('success', 'Data Berhasil diubah');	
			redirect('Admin/viewCustomer');
		}
		else{
			$this->session->set_flashdata('warning', 'Silahkan Masuk Dulu');
			redirect("Auth/");
		}
	}

	public function viewPetugas(){
		if($this->session->userdata('admin')||$this->session->userdata('manager')){
			$flm['film'] = $this->petugas->viewPetugas();
			$flm['judul'] = "List Petugas";
			$this->load->view('admin/header',$flm);
			$this->load->view('admin/sidebar');
			$this->load->view('admin/petugas',$flm);
			$this->load->view('admin/footer');
		}
		else{
			redirect('Bioskop/');
		}
	}

	public function addPetugas(){
		if($this->session->userdata('admin')||$this->session->userdata('manager')){
			$flm['judul'] = "Tambah Petugas";
			$this->load->view('admin/header',$flm);
			$this->load->view('admin/sidebar');
			$this->load->view('admin/tambah_p',$flm);
			$this->load->view('admin/footer');
		}
		else{
			redirect('Bioskop/');
		}
	}

	public function addPetugasAction(){
		$this->petugas->aksiPetugast();
		$this->session->set_flashdata('success', 'Data Berhasil disimpan');	
		if($this->session->userdata("admin")||$this->session->userdata('manager')){	
			redirect('Admin/viewPetugas');
		}
		else{
			redirect('Auth/');
		}
	}

	public function hapusPetugas($id){
		if($this->session->userdata("admin")||$this->session->userdata('manager')){
			$this->petugas->hapus($id);	
			$this->session->set_flashdata('success', 'Data Berhasil dihapus');
			redirect('Admin/viewPetugas');
		}
		else{
			redirect('Auth/');
		}
	}

	public function ubahPetugas($id){
		if($this->session->userdata('admin')||$this->session->userdata('manager')){
			$data['judul'] = "Ubah Petugas";
			$data['film'] = $this->petugas->ubah($id);
			$this->load->view('admin/header',$data);
			$this->load->view('admin/sidebar');
			$this->load->view('admin/ubah_p',$data);
			$this->load->view('admin/footer');
		}
		else{
			redirect('Bioskop/');
		}
	}

	public function ubahPetugasAction(){
		$this->petugas->aksiPetugasu();
		$this->session->set_flashdata('success', 'Data Berhasil diubah');	
		if($this->session->userdata("admin")||$this->session->userdata('manager')){	
			redirect('Admin/viewPetugas');
		}
		else{
			redirect('Auth/');
		}
	}

/*	public function viewManager(){
		if(!$this->session->userdata('admin')&&!$this->session->userdata('manager')){
			$this->session->set_flashdata('warning', 'Silahkan Masuk Dulu');
			redirect("Auth/");
		}
		else{
			$mng['manager'] = $this->manager->viewManagerM();
			$mng['judul'] = "List Manager";
			$this->load->view('admin/header',$mng);
			$this->load->view('admin/sidebar');
			$this->load->view('admin/manager',$mng);
			$this->load->view('admin/footer');
		}
	}

	public function addManager(){
		if(!$this->session->userdata('admin')&&!$this->session->userdata('manager')){
			$this->session->set_flashdata('warning', 'Silahkan Masuk Dulu');
			redirect("Auth/");
		}
		else{
			$data['judul'] = "Tambah Manager";
			$this->load->view('admin/header',$data);
			$this->load->view('admin/sidebar',$data);
			$this->load->view('admin/tambah_m');
			$this->load->view('admin/footer');
		}
	}

	public function editprofile($id){
		if($this->session->userdata("admin")||$this->session->userdata('manager')){
			$flm['manager'] = $this->Manager->lihat_manager_id($id);
			$flm['judul'] = "Ubah Manager";
			$this->load->view('admin/header',$flm);
			$this->load->view('admin/sidebar');
			$this->load->view('admin/ubah_m',$flm);
			$this->load->view('admin/footer');
		}
		else{
			$this->session->set_flashdata('warning', 'Silahkan Masuk Dulu');
			redirect("Auth/");
		}
	}*/
}