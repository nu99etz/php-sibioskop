<div class="main">

  <?php if($this->session->userdata('customer')){
    $er = 'disabled'; $rt = 'readonly'; $rty="hidden";$name="";
    $qe = $this->session->userdata('id');
  } else {
    $er = '';$qe = '';$rty='text';$name="Id Customer";
  }

    foreach ($film as $flm){ ?>

    <div class="container">
      <form action="<?php echo base_url('Bioskop/actionPesan/');?>" method="post" enctype="multipart/form-data">

        <div class="row">
          <div class="col-25">
            <label for="fname"></label>
          </div>
          <div class="col-75">
            <input type="hidden" id="fname" name="id_film" value="<?php echo $flm['id_film'];?>" readonly>
          </div>
        </div>

        <div class="row">
          <div class="col-25">
            <label for="fname"><?php echo $name;?></label>
          </div>
          <div class="col-75">
            <input type="<?php echo $rty;?>" id="fname" name="id_customer" palceholder = "ID Customer" value="<?php echo $qe;?>">
          </div>
        </div>

        <div class="row">
          <div class="col-25">
            <label for="lname">Nama Film</label>
          </div>
          <div class="col-75">
            <input type="text" id="lname" name="nama_film" value="<?php echo $flm['nama_film'];?>" <?php echo $er;?> >
          </div>
        </div>

        <div class="row">
          <div class="col-25">
            <label for="fname">Kualitas</label>
          </div>
          <div class="col-75">
            <input type="text" id="fname" name="kualitas" value="<?php echo $flm['quality'];?>" <?php echo $er;?>>
          </div>
        </div>

      <?php } ;?>

        <div class="row">
          <div class="col-25">
            <label for="fname">Tanggal Lihat</label>
          </div>
          <div class="col-75">
            <input type="date" id="fname" name="lihat">
          </div>
        </div>

        <div class="row">
          <div class="col-25">
            <label for="lname">Harga</label>
          </div>
        <div class="col-75">
          <select name="harga">
            <?php foreach($harga as $dr){
              ?>
              <option value="<?php echo $dr['harga'];?>">Rp. <?php echo $dr['harga'];?></option>
            <?php } ?>
        </select>
        </div>
        </div>

        <div class="row">
          <div class="col-25">
            <label for="fname">Waktu Lihat</label>
          </div>
          <div class="col-75">
          <select name="waktu_lihat">
            <?php foreach($waktu as $dr){
              ?>
              <option value="<?php echo $dr['waktu'];?>"><?php echo $dr['waktu'];?></option>
            <?php } ?>
        </select>
        </div>
        </div>

        <div class="row">
          <div class="col-25">
            <label for="fname">Theater</label>
          </div>
          <div class="col-75">
          <select name="theater">
            <?php for($i=1;$i<=5;$i++){
              ?>
              <option value="<?php echo $i;?>"><?php echo $i;?></option>
            <?php } ?>
        </select>
        </div>
        </div>

        <div class="row">
          <div class="col-25">
            <label for="fname">Jumlah Tiket</label>
          </div>
          <div class="col-75">
            <input type="number" id="fname" name="tiket">
          </div>
        </div>        

        <div class="row">
          <div class="col-25">
          </div>
        <div class="col-75">
          <input type="hidden" id="fname" name="tgl" value="<?php echo date("Ymd");?>">
        </div>
        </div>

        <br/>

        <div class="row">
          <input type="submit" name="pesan" value="Pesan">
        </div>

        </form>
      
    </div>
  </div>
</div>
</div>