
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
<th scope="col">Nama Customer</th>
<th scope="col">Email</th>
<th scope="col">Tanggal Lahir</th>
<th scope="col">No Telp</th>
<th scope="col">Jenis Kelamin</th>
<th scope="col"><a href="<?php echo base_url("Admin/addCustomer");?>">Tambah</a>
</tr>
<?php
$no = 1;
foreach($film as $flm){  ?>
	<tr>
		<td><?php echo $no++;?></td>
		<td><img width =100 height= 150 src="<?php echo base_url();?>assets/img/customer/<?php echo $flm['foto'];?>"></td>
		<td><?php echo $flm['nama_customer'];?></td>
		<td><?php echo $flm['email'];?></td>
		<td><?php echo $flm['tgl_lahir'];?></td>
		<td><?php echo $flm['no_telp'];?></td>
		<td><?php if($flm['jk']=="L"){
			echo "Laki-Laki";
		}else{
			echo "Perempuan"; } ?></td>
		<td><a href="<?php echo base_url("Admin/ubahCustomer/".$flm['id_customer']);?>" class="btn btn-warning btn-xs"><i class="fa fa-pencil"></i></a>
		<a href="<?php echo base_url("Admin/hapusCustomer/".$flm['id_customer']);?>"onclick="return confirm('Hapus Data ??')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a></td>
	</tr>
<?php } ?>