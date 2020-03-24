<?php if($this->session->flashdata('success')){
  ?> <div class="alert alert-success" role="alert">
  <?php echo $this->session->userdata('success');?>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button> </div> <?php } ?>

<h2><strong><p align="center">Laporan</strong></h2> 
 <table class ="table table-responsive-sm">
  <thead>
<tr>
<th scope="col">No</th> 
<th scope="col">Kode Transaksi</th>
<th scope="col">Nama Customer</th>
<th scope="col">Judul Film</th>
<th scope="col">Jumlah Tiket</th>
<th scope="col">Harga</th>
<th scope="col">Tanggal Lihat</th>
<th scope="col">Theater</th>
<th scope="col">Tanggal Pemesanan</th>
<th scope="col"><a href="<?php echo base_url("Admin/addFilm");?>">Tambah</a>
</tr>
<?php
$no = 1;
foreach($lpk as $flm){  ?>
  <tr>
    <td><?php echo $no++;?></td>
    <td><?php echo $flm['id_transaksi'];?></td>
    <td><?php echo $flm['nama_customer'];?></td>
    <td><?php echo $flm['nama_film'];?></td>
    <td><?php echo $flm['jumlah'];?></td>
    <td><?php echo $flm['harga'];?></td>
    <td><?php echo $flm['tanggal_lihat']." ".$flm['waktu_lihat'];?></td>
    <td><?php echo $flm['theater'];?></td>
    <td><?php echo $flm['tanggal_booking'];?></td>
  </tr>
<?php } ?>