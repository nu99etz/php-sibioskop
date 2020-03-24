<div class="main">
    <div class="container">
      <form action="<?php echo base_url('Bioskop/addactionfilm');?>" method="post" enctype="multipart/form-data">

        <div class="row">
          <div class="col-25">
            <label for="fname">Id Film</label>
          </div>
        <div class="col-75">
          <input type="text" id="fname" name="id_film" placeholder="Id Film">
        </div>
        </div>

        <div class="row">
          <div class="col-25">
            <label for="lname">Nama Film</label>
          </div>
        <div class="col-75">
          <input type="text" id="lname" name="nama_film" placeholder="Nama Film">
        </div>
        </div>

  	    <div class="row">
          <div class="col-25">
            <label for="fname">Tanggal Rilis</label>
          </div>
        <div class="col-75">
          <input type="date" id="fname" name="rilis" placeholder="Id Film">
        </div>
        </div>

        <div class="row">
          <div class="col-25">
            <label for="lname">Kategori</label>
          </div>
        <div class="col-75">
          <select name="kategori">
            <?php foreach($kat as $dr){
              ?>
              <option value="<?php echo $dr['nama_kategori'];?>"><?php echo $dr['nama_kategori'];?></option>
            <?php } ?>
        </select>
        </div>
        </div>

        <div class="row">
          <div class="col-25">
            <label for="fname">Kualitas</label>
          </div>
        <div class="col-75">
          <input type="text" id="fname" name="kualitas" placeholder="Quality">
        </div>
        </div>

        <div class="row">
          <div class="col-25">
            <label for="lname">Tontonan Umur</label>
          </div>
        <div class="col-75">
          <input type="text" id="lname" name="umur" placeholder="Umur">
        </div>
        </div>

        <div class="row">
          <div class="col-25">
            <label for="lname">Detail</label>
          </div>
        <div class="col-75">
          <select name="detail">
            <?php foreach($dtl as $dr){
              ?>
              <option value="<?php echo $dr['nama_detail'];?>"><?php echo $dr['nama_detail'];?></option>
            <?php } ?>
        </select>
        </div>
        </div>

        <div class="row">
          <div class="col-25">
            <label for="lname">Durasi</label>
          </div>
        <div class="col-75">
          <input type="number" id="lname" name="durasi" placeholder="Durasi">
        </div>
        </div>

        <div class="row">
          <div class="col-25">
            <label for="subject">Sipnosis</label>
          </div>
        <div class="col-75">
          <textarea id="subject" name="sipnosis" placeholder="Tulis Sipnosis" style="height:200px"></textarea>
        </div>
        </div>

        <div class="row">
          <div class="col-25">
            <label for="subject">Cover</label>
          </div>
        <div class="col-75">
          <input type="file" name="foto" placeholder="Tulis Sipnosis" onchange="preview(this,'gambar')">
        </div>
        </div>

        <div class="row">
          <div class="col-25">
          </div>
          <div class="col-75">
            <img id="gambar" src="<?php echo base_url()?>camera.png" alt="" width="360px"/>
          </div>
        </div>

        <div class="row">
          <div class="col-25">
          </div>
        <div class="col-75">
          <input type="hidden" id="fname" name="tgl" value="<?php echo date("Ymd");?>">
        </div>
        </div>

        <div class="row">
          <input type="submit" name="daftar" value="Tambah">
        </div>
        
        </form>
      </div>
    </div>
  </div>
</div>