<?php if ($this->session->flashdata('success')){ ?> 
  
  <div class="alert success">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
      <?php echo $this->session->flashdata('success'); ?>
  </div>

<?php } ?>

<div class="main">
	<div class="container">
      <form action="<?php echo base_url('Bioskop/lihatTiket/');?>" method="post" enctype="multipart/form-data">
        <div class="row">
          <div class="col-25">
            <label for="fname">ID Transaksi</label>
          </div>
          <div class="col-75">
            <input type="text" id="fname" name="id_transaksi" placeholder="ID Transaksi">
          </div>
        </div>
<br/>
         <div class="row">
          <input type="submit" name="lihat" value="Lihat">
        </div>
    </form>
</div>
</div>