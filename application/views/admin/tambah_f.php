<center><h3>Silahkan <?php echo $judul;?></h3><br/>
<form method="post" action="<?php echo base_url("Admin/addActionfilm");?>" enctype="multipart/form-data">
    <div class="col-sm-7">
        <div class="form-group">
            <input type="text" class="form-control" name="id_film" placeholder="ID Film">
        </div>
        <div class="form-group">
            <input type="text" class="form-control"  name="nama_film" placeholder="Nama Film">
        </div>
        <div class="form-group">
            <input type="date" class="form-control"  name="rilis">
        </div>
        <div class="form-group">
            <select class="form-control" name="kategori">
                <option>Silahkan Pilih Kategori</option>
                <?php foreach($kat as $dr){
                	?>
                	<option value="<?php echo $dr['nama_kategori'];?>"><?php echo $dr['nama_kategori'];?></option>
                <?php } ?>
            </select>    
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="kualitas" placeholder="Kualitas">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="umur" placeholder="Tontonan Umur">
        </div>
        <div class="form-group">
            <select class="form-control" name="detail">
                <?php foreach($dtl as $dr){
                	?>
                	<option value="<?php echo $dr['nama_detail'];?>"><?php echo $dr['nama_detail'];?></option>
                <?php } ?>
            </select>    
        </div>
         <div class="form-group">
            <input type="number" class="form-control" name="durasi" placeholder="Durasi">
        </div>
         <div class="form-group">
            <textarea class="form-control" name="sipnosis" placeholder="Tulis Sipnosis"></textarea>
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