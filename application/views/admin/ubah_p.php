<?php foreach($film as $flm){ ?>
<center><h3>Silahkan Ubah <?php echo $flm['nama_petugas'];?></h3><br/>
<form method="post" action="<?php echo base_url("Admin/ubahPetugasAction");?>" enctype="multipart/form-data">
    <div class="col-sm-7">
        <div class="form-group">
            <input type="hidden" class="form-control" name="nip" value="<?php echo $flm['nip'];?>">
        </div>
        <div class="form-group">
            <input type="text" class="form-control"  name="nama" value="<?php echo $flm['nama_petugas'];?>">
        </div>
        <div class="form-group">
            <input type="number" class="form-control" name="No_Telp" value="<?php echo $flm['no_telp_petugas'];?>">
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
            <textarea class="form-control" name="alamat" placeholder="Alamat"><?php echo $flm['alamat_petugas'];?></textarea>
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password" value="<?php echo $flm['password'];?>">
        </div>
        <div class="form-group">
            <input type="file" class="form-control" name="foto" onchange="preview(this,'gambar')">
            <input type="hidden" class="form-control" name="foto-lama" value="<?php echo $flm['foto'];?>">
        </div>
         <div class="form-group">
            <img id="gambar" src="<?php echo base_url();?>assets/img/petugas/<?php echo $flm['foto'];?>" alt="" width="360px"/>
        </div>
        <input type="submit" class="btn btn-success" name="tambah" value="Ubah">
        <input type="reset" class="btn btn-warning" name="reset" value="Reset">
	</center>
      </div>
  </form>
<?php } ?>  