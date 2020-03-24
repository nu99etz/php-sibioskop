
<?php if ($this->session->flashdata('success')){ ?> 
  
  <div class="alert success">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
      <?php echo $this->session->flashdata('success'); ?>
  </div>

<?php } ?>


<div class="main">

  <?php foreach ($film as $flm){ ?>

    <div class="container">
      <form action="#" method="post" enctype="multipart/form-data">

        <div class="row">
          <div class="col-25">
            <label for="fname">Id Transaksi</label>
          </div>
          <div class="col-75">
            <input type="text" id="fname" name="id_tiket" value="<?php echo $flm['id_transaksi'];?>" disabled>
          </div>
        </div>

        <div class="row">
          <div class="col-25">
            <label for="fname">Id Tiket</label>
          </div>
          <div class="col-75">
            <input type="text" id="fname" name="id_tiket" value="<?php echo $flm['id_tiket'];?>" disabled>
          </div>
        </div>

        <div class="row">
          <div class="col-25">
            <label for="lname">Nama Film</label>
          </div>
          <div class="col-75">
            <input type="text" id="lname" name="nama_film" value="<?php echo $flm['nama_film'];?>" disabled>
          </div>
        </div>

        <div class="row">
          <div class="col-25">
            <label for="fname">Tanggal Lihat</label>
          </div>
          <div class="col-75">
            <input type="text" id="fname" name="kualitas" value="<?php echo $flm['tanggal_lihat']." ".$flm['waktu_lihat'];?>" disabled>
          </div>
        </div>

        <div class="row">
          <div class="col-25">
            <label for="fname">Tempat Duduk dan Theater</label>
          </div>
          <div class="col-75">
            <input type="text" id="fname" name="kualitas" value="<?php echo $flm['tempat_duduk']." ".$flm['theater'];?>" disabled>
          </div>
        </div>

        </form>
      
    </div>

    <?php } ;?>
  
  </div>
</div>
</div>