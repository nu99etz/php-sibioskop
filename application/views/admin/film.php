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
<th scope="col">Cover Foto</th>
<th scope="col">Judul Film</th>
<th scope="col">Kategori</th>
<th scope="col">Kualitas</th>
<th scope="col">Durasi</th>
<th scope="col">Umur</th>
<th scope="col">Detail</th>
<th scope="col"><a href="<?php echo base_url("Admin/addFilm");?>">Tambah</a>
</tr>
<?php
$no = 1;
foreach($film as $flm){  ?>
  <tr>
    <td><?php echo $no++;?></td>
    <td><img width =100 height= 150 src="<?php echo base_url();?>assets/img/<?php echo $flm['foto'];?>"></td>
    <td><?php echo $flm['nama_film'];?></td>
    <td><?php echo $flm['id_kategori'];?></td>
    <td><?php echo $flm['quality'];?></td>
    <td><?php echo $flm['durasi'];?></td>
    <td><?php echo $flm['umur'];?></td>
    <td><?php echo $flm['detail'];?></td>
    <td><a href="<?php echo base_url("Admin/ubahFilm/".$flm['id_film']);?>" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i></a>
    <a href="<?php echo base_url("Admin/hapusfilm/".$flm['id_film']);?>"onclick="return confirm('Hapus Data ??')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a></td>
  </tr>
<?php } ?>