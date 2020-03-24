
<?php if ($this->session->flashdata('success')){ ?>	
  
  <div class="alert success">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
      <?php echo $this->session->flashdata('success'); ?>
  </div>

<?php } ?>

<div class="main">
  <form method="post" action="<?php echo base_url("Bioskop/search");?>">
    <div class="row">
        <div class="col-75">
          <input type="text" id="fname" name="Keyword" placeholder="Cari Film">
        </div>
         <div class="col-25">
            <input type="submit" id="fname" name="cari" value="Cari">
          </div>
        </div>
        <br/>
  <div class="grid">
    
<?php
  foreach ($film as $flm) { ?>

    <div class="grid_movie">
      <a href="<?php echo base_url('Bioskop/detail_film/'.$flm['id_film']);?>"><img src="<?php echo base_url()?>assets/img/<?php echo $flm['foto'];?>"></a>
      <div class="title"><?php echo $flm['nama_film'];?></div>
      <div class="rating"><button class="btn default"><?php echo $flm['umur'];?></button> <button class="btn default"><?php echo $flm['quality'];?></button></div>
    </div>

<?php  }  ?>  

  </div>
</div>