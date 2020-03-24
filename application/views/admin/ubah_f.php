<?php foreach ($film as $flm) { ?>
<center><h3>Silahkan Ubah Film <?php echo $flm['nama_film'];?></h3><br/>
<form method="post" action="<?php echo base_url("Admin/editActionfilm");?>" enctype="multipart/form-data">
    <div class="col-sm-7">
        <div class="form-group">
            <input type="hidden" class="form-control" name="id_film" value="<?php echo $flm['id_film'];?>">
        </div>
        <div class="form-group">
            <input type="text" class="form-control"  name="nama_film" value="<?php echo $flm['nama_film'];?>">
        </div>
        <div class="form-group">
            <input type="date" class="form-control"  name="rilis" value="<?php echo $flm['tahun_film'];?>">
        </div>
        <div class="form-group">
            <select class="form-control" name="kategori">
                <option>Silahkan Pilih Kategori</option>
                <?php foreach($kat as $dr){ ?>
                <option <?php if($flm['id_kategori'] == $dr['nama_kategori']) echo 'selected' ;?> value="<?php echo $dr['nama_kategori'];?>"><?php echo $dr['nama_kategori'];?></option>
                <?php } ?>
            </select>    
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="kualitas" value="<?php echo $flm['quality'];?>">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="umur" value="<?php echo $flm['umur'];?>">
        </div>
        <div class="form-group">
            <select class="form-control" name="detail">
                <?php foreach($dtl as $dr){ ?>
                <option <?php if($flm['detail'] == $dr['nama_detail']) echo 'selected' ;?> value="<?php echo $dr['nama_detail'];?>"><?php echo $dr['nama_detail'];?></option>
                <?php } ?>
            </select>    
        </div>
         <div class="form-group">
            <input type="number" class="form-control" name="durasi" value="<?php echo $flm['durasi'];?>">
        </div>
         <div class="form-group">
            <textarea class="form-control" name="sipnosis" placeholder="Tulis Sipnosis"><?php echo $flm['sipnosis'];?></textarea>
        </div>
        <div class="form-group">
            <input type="file" class="form-control" name="foto" onchange="preview(this,'gambar')">
        </div>
         <div class="form-group">
            <img id="gambar" src="<?php echo base_url()?>assets/img/<?php echo $flm['foto'];?>" alt="" width="360px"/>
            <input type="hidden" name="fotolama" value="<?php echo $flm['foto'];?>">
        </div>
        <input type="hidden" id="fname" name="tgl" value="<?php echo date("Ymd");?>">
        <input type="submit" class="btn btn-success" name="tambah" value="ubah">
        <input type="reset" class="btn btn-warning" name="reset" value="Reset">
	</center>
      </div>
  </form>
<?php } ?>  