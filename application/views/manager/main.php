
<?php if ($this->session->flashdata('success')){ ?>	
  
  <div class="alert success">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
      <?php echo $this->session->flashdata('success'); ?>
  </div>

<?php } ?>

<div class="main">
  <center><h3>LIST MANAGER</h3></center>
  <div class="grid">
<?php
  foreach ($manager as $flm) { ?>

    <div class="grid_movie">
      <a href="<?php echo base_url('Manager/profile/'.$flm['id_manager']);?>">
        <?php if($flm['foto']!="user.png"){
          ?><img src="<?php echo base_url()?>assets/img/manager/<?php echo $flm['foto'];?>"> <?php } else{ ?><img src="<?php echo base_url()?>user.png"> <?php } ?></a>
      <div class="title"><?php echo $flm['nama_manager'];?></div>
      <div class="rating">
        <button class="btn default"><?php echo $flm['no_telp_manager'];?></button> 
          <button class="btn default"><?php echo $flm['jenis_kelamin'];?></button>
        </div>
      </div>

<?php  }  ?>  

  </div>
</div>