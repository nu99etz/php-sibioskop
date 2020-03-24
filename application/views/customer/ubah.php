
<?php if ($this->session->flashdata('success')){ ?> 
  
  <div class="alert success">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
      <?php echo $this->session->flashdata('success'); ?>
  </div>

<?php } ?>

<div class="main">

  <?php foreach($cus as $data){ ?>

    <div class="container">
      <form action="<?php echo base_url('Customer/editCustomerAction');?>" method="post" enctype="multipart/form-data">

        <div class="row">
          <div class="col-25">
            <label for="fname">Tanggal Mendaftar</label>
          </div>
        <div class="col-75">
          <input type="date" id="fname" name="lahir" value="<?php echo $data['tanggal_daftar'];?>" disabled>
        </div>
        </div>

        <div class="row">
          <div class="col-25">
            <label for="fname">Id Anda</label>
          </div>
          <div class="col-75">
            <input type="text" id="fname" name="nic" value="<?php echo $data['id_customer'];?>" readonly>
          </div>
        </div>

        <div class="row">
          <div class="col-25">
            <label for="lname">Nama Anda</label>
          </div>
          <div class="col-75">
            <input type="text" id="lname" name="nama_customer" value="<?php echo $data['nama_customer'];?>">
          </div>
        </div>

         <div class="row">
          <div class="col-25">
            <label for="fname">Tanggal Lahir</label>
          </div>
        <div class="col-75">
          <input type="date" id="fname" name="lahir" value="<?php echo $data['tgl_lahir'];?>">
        </div>
        </div>

        <div class="row">
          <div class="col-25">
            <label for="lname">Email</label>
          </div>
          <div class="col-75">
            <input type="text" id="lname" name="email" value="<?php echo $data['email'];?>">
          </div>
        </div>

        <div class="row">
          <div class="col-25">
            <label for="lname">Password</label>
          </div>
          <div class="col-75">
            <input type="password" id="lname" name="password" value="<?php echo $data['password'];?>">
          </div>
        </div>

        <div class="row">
          <div class="col-25">
            <label for="lname">No Telp</label>
          </div>
          <div class="col-75">
            <input type="number" id="lname" name="telp" value="<?php echo $data['no_telp'];?>">
          </div>
        </div>

        <div class="row">
          <div class="col-25">
            <label for="fname">Jenis Kelamin</label>
          </div>
          <?php if($data['jk']=="L"){ ?> 
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
            <textarea id="subject" name="alamat" placeholder="Alamat Anda" style="height:200px"><?php echo $data['alamat'];?></textarea>
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
            <img id="gambar" src="<?php echo base_url()?>assets/img/customer/<?php echo $data['foto'];?>" alt="" width="360px"/>
          </div>
        </div>

        <div class="row">
          <div class="col-25">
          </div>
          <div class="col-75">
            <input type="hidden" name="tgl_i" value="<?php echo date("Ymd");?>">
          </div>
        </div>

        <div class="row">
          <input type="submit" name="daftar" value="Daftar">
        </div>
        </form>
      </div>
    </div>
  </div>
</div>
<?php } ?>