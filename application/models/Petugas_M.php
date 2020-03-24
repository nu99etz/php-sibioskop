<?php 

class Petugas_M extends CI_Model{

	public function viewPetugas(){
		$data = $this->db->get('petugas')->result_array();
		return $data;
	}

	private function uploadGambar(){
	    $config['upload_path']          = './assets/img/petugas/';
	    $config['allowed_types']        = 'gif|jpg|png|jpeg';
	    $config['file_name']            = $this->nip;
	    $config['overwrite']			= true;
	    $config['max_size']             = 5000;
	    $this->load->library('upload', $config);
	    	if ($this->upload->do_upload('foto')) {
	        	return $this->upload->data("file_name");
	    }
	    	return "user.png";
	}

	public function aksiPetugast(){
		$post = $this->input->post();
		$this->nip = $post['nip'];
		$this->nama_petugas = $post['nama'];
		$this->password = $post['password'];
		$this->alamat_petugas = $post['alamat'];
		$this->no_telp_petugas = $post['No_Telp'];
		$this->jk = $post['jk'];
		$this->foto = $this->uploadGambar();
		$this->db->insert('petugas',$this);
	}

	private function hapusGambar($id){
   	 	$cus =  $this->db->get_where('petugas',['nip'=>$id])->row();
	   	 	if ($cus->foto != "user.png") {
		    $filename = explode(".", $cus->foto)[0];
			return array_map('unlink', glob(FCPATH."assets/img/petugas/$filename.*"));
    	}
	}

	public function hapus($id){
		$this->hapusGambar($id);
		$this->db->delete('petugas',['nip'=>$id]);
	}

	public function ubah($id){
		$data = $this->db->get_where('petugas',['nip'=>$id])->result_array();
		return $data;
	}

	public function aksiPetugasu(){
		$post = $this->input->post();
		$this->nip = $post['nip'];
		$this->nama_petugas = $post['nama'];
		$this->password = $post['password'];
		$this->alamat_petugas = $post['alamat'];
		$this->no_telp_petugas = $post['No_Telp'];
		$this->jk = $post['jk'];
		if(empty($_FILES['foto']['name'])){
			$this->foto = $post['foto-lama'];
		}
		else{
			$this->hapusGambar($this->nip);
			$this->foto = $this->uploadGambar();
		}
		$this->db->update('petugas',$this,array('nip'=>$post['nip']));
	}
}