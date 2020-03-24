
<?php if($this->session->flashdata('success')){
	?> <div class="alert alert-success" role="alert">
  <?php echo $this->session->userdata('success');?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button> </div> <?php } ?>

<h2><strong><p align="center"><?php echo $judul;?></strong></h2>	
 <table class ="table table-responsive-sm">
  <thead>
<tr>
<th scope="col">No</th>	
<th scope="col">Foto</th>
<th scope="col">NIP</th>
<th scope="col">Nama Petugas</th>
<th scope="col">No Telp</th>
<th scope="col">Jenis Kelamin</th>
<th scope="col">Alamat</th>
<th scope="col"><a href="<?php echo base_url("Admin/addPetugas");?>">Tambah</a>
</tr>
<?php
$no = 1;
foreach($film as $flm){  ?>
	<tr>
		<td><?php echo $no++;?></td>
		<td><img width =100 height= 150 src="<?php echo base_url();?>assets/img/petugas/<?php echo $flm['foto'];?>"></td>
		<td><?php echo $flm['nip'];?></td>
		<td><?php echo $flm['nama_petugas'];?></td>
		<td><?php echo $flm['no_telp_petugas'];?></td>
		<td><?php if($flm['jk']=="L"){
			echo "Laki-Laki";
		}else{
			echo "Perempuan"; } ?></td>
		<td><?php echo $flm['alamat_petugas'];?></td>	
		<td><a href="<?php echo base_url("Admin/ubahPetugas/".$flm['nip']);?>" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i></a>
		<a href="<?php echo base_url("Admin/hapusPetugas/".$flm['nip']);?>"onclick="return confirm('Hapus Data ??')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a></td>
	</tr>
<?php } ?>