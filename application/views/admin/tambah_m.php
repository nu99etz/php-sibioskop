<center><h3>Silahkan <?php echo $judul;?></h3><br/>
<form method="post" action="<?php echo base_url("Manager/addManagerAction");?>" enctype="multipart/form-data">
    <div class="col-sm-7">
        <div class="form-group">
            <input type="text" class="form-control" name="nim" placeholder="NIM">
        </div>
        <div class="form-group">
            <input type="text" class="form-control"  name="nama_manager" placeholder="Nama Manager">
        </div>
        <div class="form-group">
            <input type="number" class="form-control" name="No_Telp" placeholder="No Telepon">
        </div>
         <div class="form-group">
            <input type="radio" name="jk" value="L">Laki-laki
            <input type="radio" name="jk" value="P">Perempuan
        </div>
         <div class="form-group">
            <textarea class="form-control" name="alamat" placeholder="Alamat"></textarea>
        </div>
        <div class="form-group">
            <input type="file" class="form-control" name="foto" onchange="preview(this,'gambar')">
        </div>
         <div class="form-group">
            <img id="gambar" src="" alt="" width="360px"/>
        </div>
        <input type="hidden" id="fname" name="tgl" value="<?php echo date("Ymd");?>">
        <input type="submit" class="btn btn-success" name="tambah" value="Tambah">
        <input type="reset" class="btn btn-warning" name="reset" value="Reset">
	</center>
      </div>
  </form>