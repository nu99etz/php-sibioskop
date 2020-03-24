<?php foreach($film as $flm){ ?>
  <center><h3>Silahkan Ubah <?php echo $flm['nama_customer'];?></h3><br/>
<form method="post" action="<?php echo base_url("Admin/editActioncus");?>" enctype="multipart/form-data">
        <div class="col-sm-7">
        <div class="form-group">
            <input type="hidden" class="form-control"  name="id_customer" value="<?php echo $flm['id_customer'];?>">
            <input type="text" class="form-control"  name="nama_customer" value="<?php echo $flm['nama_customer'];?>">
        </div>
        <div class="form-group">
            <input type="date" class="form-control"  name="lahir" value="<?php echo $flm['tgl_lahir'];?>">
        </div>
        <div class="form-group">
            <input type="text" class="form-control"  name="email" value="<?php echo $flm['email'];?>">
        </div>
        <div class="form-group">
            <input type="password" class="form-control"  name="password" value="<?php echo $flm['password'];?>">
        </div>
        <div class="form-group">
            <input type="number" class="form-control"  name="telp" value="<?php echo $flm['no_telp'];?>">
        </div>
        <div class="form-group">
          <?php if($flm['jk']=="L"){ ?> 
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
        <div class="form-group">
            <textarea class="form-control" name="alamat"><?php echo $flm['alamat'];?></textarea>
        </div>
        <div class="form-group">
            <input type="file" class="form-control" name="foto" onchange="preview(this,'gambar')">
            <input type="hidden" class="form-control" name="foto-lama" value="<?php echo $flm['foto'];?>">
        </div>
         <div class="form-group">
            <img id="gambar" src="<?php echo base_url();?>assets/img/customer/<?php echo $flm['foto'];?>" alt="" width="360px"/>
        </div>
        <input type="hidden" id="fname" name="tgl_i" value="<?php echo date("Ymd");?>">
        <input type="submit" class="btn btn-success" name="tambah" value="Ubah">
        <input type="reset" class="btn btn-warning" name="reset" value="Reset">
      </center>
      </div>
    </form>
<?php } ?>      