<?php

class Bioskop_M extends CI_Model{

	public function lihat_film(){
		$lihat = $this->db->get('film')->result_array();
		return $lihat;
	}

	public function lihat_film_id($id){
		$lihat = $this->db->get_where('film',['id_film'=>$id])->result_array();
		return $lihat;
	}

	public function tambah_film($data,$meja){
		$this->db->insert('film');
	}

	private function uploadGambar(){
    $config['upload_path']          = './assets/img/';
    $config['allowed_types']        = 'gif|jpg|png|jpeg';
    $config['file_name']            = $this->id_film;
    $config['overwrite']			= true;
    $config['max_size']             = 5000;
    $this->load->library('upload', $config);
    	if ($this->upload->do_upload('foto')) {
        	return $this->upload->data("file_name");
    	}
    		return "4.jpg";
	}
	
	public function tambah_film_aksi(){
		$post = $this->input->post();
		$this->id_film = $post['id_film'];
		$this->nama_film = $post['nama_film'];
		$this->tahun_film = $post['rilis'];
		$this->id_kategori = $post['kategori'];
		$this->sipnosis = $post['sipnosis'];
		$this->id_film = $post['id_film'];
		$this->foto = $this->uploadGambar();
		$this->quality = $post['kualitas'];
		$this->umur = $post['umur'];
		$this->detail = $post['detail'];
		$this->durasi = $post['durasi'];
		$this->tanggal_input = $post['tgl'];
		$this->db->insert('film',$this);
	}

	private function hapusGambar($id){
   	 	$film =  $this->db->get_where('film',['id_film'=>$id])->row();
	   	 	if ($film->foto != "4.jpg") {
		    $filename = explode(".", $film->foto)[0];
			return array_map('unlink', glob(FCPATH."assets/img/$filename.*"));
    	}
	}

	public function hapus_film($id){
		$this->hapusGambar($id);
		$this->db->delete('film',array('id_film'=>$id));
	}

	public function searchaksi(){
		$post = $this->input->post();
		$cari = $post['Keyword'];
		$this->db->like('nama_film',$cari);
		$cari = $this->db->get('film')->result_array();
		return $cari;
	}

	public function listKategori(){
		$data = $this->db->get('kategori')->result_array();
		return $data;
	}

	public function listJam(){
		$data = $this->db->get('waktu')->result_array();
		return $data;
	}

	public function listHarga($id){
		$data = $this->db->query("SELECT*FROM film a INNER JOIN harga h ON a.quality=h.kualitas WHERE a.id_film='$id'")->result_array();
		return $data;
	}

	public function pesananAksi(){
		$post = $this->input->post();
		$this->id_film = $post['id_film'];
		$this->id_customer = $post['id_customer'];
		$this->jumlah = $post['tiket'];
		$this->harga = $post['harga']*$this->jumlah;
		$this->tanggal_lihat = $post['lihat'];
		$this->tanggal_booking = $post['tgl'];
		$this->waktu_lihat = $post['waktu_lihat'];
		$this->theater = $post['theater'];
		$this->id_transaksi = "T-".$this->id_customer."-".rand(1,100)."-".date('Ymd');
		$this->db->insert('tmp_pesanan',$this);
		$this->db->insert('pesanan',$this);
	}

	public function updateTiket($id){
		$data = $this->db->get_where('tmp_pesanan',array('id_customer'=>$id))->row();
		$cek = $this->db->get('tiket')->row();
		$post = $this->input->post();
		$kursi = $post['kursi'];
		$id_cus = $data->id_customer;
		$id_trans = $data->id_transaksi;
		$data1 = array();
		$index = 0;
		foreach ($kursi as $kuris) {
			$id = $data->id_film."-".$data->theater."-".$kuris;
			array_push($data1, array(
			'id_tiket'=>$id,
			'id_customer'=>$id_cus,
			'tempat_duduk'=>$kuris,
			'id_transaksi'=>$id_trans));
			$index++;
		}
		if($id!=$cek->id_tiket||$kursi!=$cek->tempat_duduk){
			$this->db->insert_batch('tiket',$data1);
			$this->db->delete('tmp_pesanan',array('id_customer'=>$id_cus)); }
	}

	public function detailPesan($id){
		$data = $this->db->query("SELECT*FROM film a INNER JOIN harga h ON a.quality=h.kualitas INNER JOIN tmp_pesanan p ON a.id_film=p.id_film INNER JOIN customer k ON p.id_customer=k.id_customer WHERE p.id_customer='$id'")->result_array();
		return $data;
	}

	public function detailKursi($id){
		$data = $this->db->get_where('tmp_pesanan',['id_customer'=>$id])->result_array();
		return $data;
	}

	public function lihat_Tiket($id){
		$data = $this->db->query("SELECT*FROM tiket t INNER JOIN film f ON LEFT(t.id_tiket, 6)=f.id_film INNER JOIN pesanan p ON t.id_transaksi=p.id_transaksi WHERE t.id_customer = '$id'")->result_array();
		return $data;
	}	

	public function listDetail(){
		$data = $this->db->get('detail')->result_array();
		return $data;
	}

	public function ubah_film_aksi(){
		$post = $this->input->post();
		$this->id_film = $post['id_film'];		
		$this->nama_film = $post['nama_film'];
		$this->tahun_film = $post['rilis'];
		$this->id_kategori = $post['kategori'];
		$this->sipnosis = $post['sipnosis'];
		$this->id_film = $post['id_film'];
		if(empty($_FILES['foto']['name'])){
			$this->foto = $post['fotolama'];
		}
		else{
			$this->hapusGambar($this->id_film);
			$this->foto = $this->uploadGambar();
		}
		$this->quality = $post['kualitas'];
		$this->umur = $post['umur'];
		$this->detail = $post['detail'];
		$this->durasi = $post['durasi'];
		$this->tanggal_input = $post['tgl'];
		$this->db->update('film',$this, array('id_film'=>$post['id_film']));
	}
}