
<?php if ($this->session->flashdata('success')){ ?> 
  
  <div class="alert success">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
      <?php echo $this->session->flashdata('success'); ?>
  </div>

<?php } ?>

<div class="main">

  <?php foreach($manager as $mng){ ?>

    <div class="container">
      <form action="<?php echo base_url('Manager/addManagerAction');?>" method="post" enctype="multipart/form-data">

        <div class="row">
          <div class="col-25">
            <label for="fname">NIM</label>
          </div>
          <div class="col-75">
            <input type="text" id="fname" name="nim" value="<?php echo $mng['id_manager'];?>" readonly>
          </div>
        </div>

        <div class="row">
          <div class="col-25">
            <label for="lname">Nama Manager</label>
          </div>
          <div class="col-75">
            <input type="text" id="lname" name="nama_manager" value="<?php echo $mng['nama_manager'];?>">
          </div>
        </div>

        <div class="row">
          <div class="col-25">
            <label for="lname">No Telp</label>
          </div>
          <div class="col-75">
            <input type="text" id="lname" name="No_Telp" value="<?php echo $mng['no_telp_manager'];?>">
          </div>
        </div>

        <div class="row">
          <div class="col-25">
            <label for="fname">Jenis Kelamin</label>
          </div>
          <?php if($mng['jenis_kelamin']=="L"){ ?> 
            <div class="col-75" style="margin-top: 15px;">
              <input type="radio" name="jk" value="L" checked="checked">Laki-laki
              <input type="radio" name="jk" value="P">Perempuan
            </div>
          <?php } else { ?> 
            <div class="col-75" style="margin-top: 15px;">
              <input type="radio" name="jk" value="L">Laki-laki
              <input type="radio" name="jk" value="P" checked="checked">Perempuan
            </div>
          <?php } ?>
        </div>

        <div class="row">
          <div class="col-25">
            <label for="subject">Alamat</label>
          </div>
          <div class="col-75">
            <textarea id="subject" name="alamat" placeholder="Alamat Anda" style="height:200px"><?php echo $mng['alamat'];?></textarea>
          </div>
        </div>

        <div class="row">
          <div class="col-25">
            <label for="subject">Foto</label>
          </div>
          <div class="col-75">
            <input type="file" name="foto" placeholder="Tulis Sipnosis" onchange="preview(this,'gambar')">
          </div>
        </div>

        <div class="row">
          <div class="col-25">
          </div>
          <div class="col-75">
            <img id="gambar" src="<?php echo base_url()?>assets/img/manager/<?php echo $mng['foto'];?>" alt="" width="360px"/>
          </div>
        </div>

        <div class="row">
          <input type="submit" name="daftar" value="Ubah">
        </div>
        </form>

      <?php } ?>

      </div>
    </div>
  </div>
</div>