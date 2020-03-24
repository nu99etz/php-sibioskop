
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
<th scope="col">Nama Manager</th>
<th scope="col">No Telp</th>
<th scope="col">Jenis Kelamin</th>
<th scope="col">Alamat</th>
<th scope="col"><a href="<?php echo base_url("Admin/addManager");?>">Tambah</a>
</tr>
<?php
$no = 1;
foreach($manager as $flm){  ?>
	<tr>
		<td><?php echo $no++;?></td>
		<td><img width =100 height= 150 src="<?php echo base_url();?>assets/img/manager/<?php echo $flm['foto'];?>"></td>
		<td><?php echo $flm['nama_manager'];?></td>
		<td><?php echo $flm['no_telp_manager'];?></td>
		<td><?php if($flm['jenis_kelamin']=="L"){
			echo "Laki-Laki";
		}else{
			echo "Perempuan"; } ?></td>
		<td><?php echo $flm['alamat'];?></td>	
		<td><a href="<?php echo base_url("Admin/ubahManager/".$flm['id_manager']);?>" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i></a>
		<a href="<?php echo base_url("Admin/hapusManager/".$flm['id_manager']);?>"onclick="return confirm('Hapus Data ??')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a></td>
	</tr>
<?php } ?>