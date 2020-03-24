
<?php if ($this->session->flashdata('success')){ ?> 
  
  <div class="alert success">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
      <?php echo $this->session->flashdata('success'); ?>
  </div>

<?php } ?>

<div class="main">

  <?php foreach ($film as $flm){ ?>

    <div class="container">
      <form action="<?php echo base_url('Bioskop/editactionfilm/'.$flm['id_film']);?>" method="post" enctype="multipart/form-data">

        <div class="row">
          <div class="col-25">
            <label for="fname">Id Film</label>
          </div>
          <div class="col-75">
            <input type="text" id="fname" name="id_film" value="<?php echo $flm['id_film'];?>" readonly>
          </div>
        </div>

        <div class="row">
          <div class="col-25">
            <label for="lname">Nama Film</label>
          </div>
          <div class="col-75">
            <input type="text" id="lname" name="nama_film" value="<?php echo $flm['nama_film'];?>">
          </div>
        </div>

      	<div class="row">
          <div class="col-25">
            <label for="fname">Tanggal Rilis</label>
          </div>
          <div class="col-75">
            <input type="date" id="fname" name="rilis" value="<?php echo $flm['tahun_film'];?>">
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
              <option <?php if($flm['id_kategori'] == $dr['nama_kategori']) echo 'selected' ;?> value="<?php echo $dr['nama_kategori'];?>"><?php echo $dr['nama_kategori'];?></option>
            <?php } ?>
        </select>
        </div>
        </div>

        <div class="row">
          <div class="col-25">
            <label for="fname">Kualitas</label>
          </div>
          <div class="col-75">
            <input type="text" id="fname" name="kualitas" value="<?php echo $flm['quality'];?>">
          </div>
        </div>

        <div class="row">
          <div class="col-25">
            <label for="lname">Tontonan Umur</label>
          </div>
          <div class="col-75">
            <input type="text" id="lname" name="umur" value="<?php echo $flm['umur'];?>">
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
              <option <?php if($flm['detail'] == $dr['nama_detail']) echo 'selected' ;?> value="<?php echo $dr['nama_detail'];?>"><?php echo $dr['nama_detail'];?></option>
            <?php } ?>
        </select>
        </div>
        </div>

        <div class="row">
          <div class="col-25">
            <label for="lname">Durasi</label>
          </div>
        <div class="col-75">
          <input type="number" id="lname" name="durasi" value="<?php echo $flm['durasi'];?>">
        </div>
        </div>

        <div class="row">
          <div class="col-25">
            <label for="subject">Sipnosis</label>
          </div>
          <div class="col-75">
            <textarea id="subject" name="sipnosis" style="height:200px"><?php echo $flm['sipnosis'];?></textarea>
          </div>
        </div>

        <div class="row">
          <div class="col-25">
            <label for="subject">Cover</label>
          </div>
          <div class="col-75">
            <input type="file" name="foto" value="<?php echo $flm['foto'];?>" onchange="preview(this,'gambar')">
            <input type="hidden" name="fotolama" value="<?php echo $flm['foto'];?>">
          </div>
        </div>

        <div class="row">
          <div class="col-25">
          </div>
          <div class="col-75">
            <img id="gambar" src="<?php echo base_url()?>assets/img/<?php echo $flm['foto'];?>" alt="" width="360px"/>
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
          <input type="submit" name="ubah" value="Ubah">
        </div>

        </form>

      <?php } ;?>
      
    </div>
  </div>
</div>
</div>