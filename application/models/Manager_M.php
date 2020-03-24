<?php

class Manager_M extends CI_Model{

	public function viewManagerM(){
		$data = $this->db->get('manager')->result_array();
		return $data;
	}

	private function uploadGambar(){
	    $config['upload_path']          = './assets/img/manager/';
	    $config['allowed_types']        = 'gif|jpg|png|jpeg';
	    $config['file_name']            = $this->id_manager;
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
		$this->id_manager = $post['nim'];
		$this->nama_manager = $post['nama_manager'];
		$this->no_telp_manager = $post['No_Telp'];
		$this->jenis_kelamin = $post['jk'];
		$this->alamat = $post['alamat'];
		$this->foto = $this->uploadGambar();
		$this->db->insert('manager',$this);
	}

	public function lihat_manager_id($id){
		$lihat = $this->db->get_where('manager',['id_manager'=>$id])->result_array();
		return $lihat;
	}
}