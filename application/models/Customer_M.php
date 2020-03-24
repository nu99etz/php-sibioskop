<?php

class Customer_M extends CI_Model{

	private function uploadGambar(){
	    $config['upload_path']          = './assets/img/customer/';
	    $config['allowed_types']        = 'gif|jpg|png|jpeg';
	    $config['file_name']            = $this->id_customer;
	    $config['overwrite']			= true;
	    $config['max_size']             = 5000;
	    $this->load->library('upload', $config);
	    	if ($this->upload->do_upload('foto')) {
	        	return $this->upload->data("file_name");
	    }
	    	return "user.png";
	}

	public function addAction(){
		$post = $this->input->post();
		$this->id_customer = rand(1,50)."-".date("Ymd-his");
		$this->nama_customer = $post['nama_customer'];
		$this->no_telp = $post['telp'];
		$this->jk = $post['jk'];
		$this->alamat = $post['alamat'];
		$this->email = $post['email'];
		$this->password = $post['password'];
		$this->tgl_lahir = $post['lahir'];
		$this->alamat = $post['alamat'];
		$this->foto = $this->uploadGambar();
		$this->tanggal_daftar = $post['tgl_i'];
		$this->db->insert('customer',$this);
	}

	public function viewCustomer(){
		$data = $this->db->get('customer')->result_array();
		return $data;
	}

	public function profile($id){
		$data = $this->db->get_where('customer',['id_customer'=>$id])->result_array();
		return $data;
	}

	private function hapusGambar($id){
   	 	$cus =  $this->db->get_where('customer',['id_customer'=>$id])->row();
	   	 	if ($cus->foto != "user.png") {
		    $filename = explode(".", $cus->foto)[0];
			return array_map('unlink', glob(FCPATH."assets/img/customer/$filename.*"));
    	}
	}

	public function hapus($id){
		$this->hapusGambar($id);
		$this->db->delete('customer',['id_customer'=>$id]);
	}

	public function edit(){
		$post = $this->input->post();
		$this->id_customer = $post['id_customer'];
		$this->nama_customer = $post['nama_customer'];
		$this->no_telp = $post['telp'];
		$this->jk = $post['jk'];
		$this->alamat = $post['alamat'];
		$this->email = $post['email'];
		$this->password = $post['password'];
		$this->tgl_lahir = $post['lahir'];
		$this->alamat = $post['alamat'];
		if(empty($_FILES['foto']['name'])){
			$this->foto = $post['foto-lama'];
		}
		else{
			$this->hapusGambar($this->id_customer);
			$this->foto = $this->uploadGambar();
		}
		$this->tanggal_daftar = $post['tgl_i'];
		$this->db->update('customer',$this,array('id_customer'=>$post['id_customer']));
	}
}	