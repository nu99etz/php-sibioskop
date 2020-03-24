<html>
<head>
	<title><?php echo $judul;?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/mystle.css" media="all">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/font-awesome-4.7.0/css/font-awesome.min.css">
	<script src="<?php echo base_url()?>assets/responsive.js"></script>
</head>
<body>
  <div class="header">
    <h1>Bioskop 24</h1>
    <p>Sebuah Sistem Informasi Pembayaran Tiket Bioskop</p>
  </div>

    <div class="topnav" id="myTopnav">
      <a href="<?php echo base_url('Bioskop');?>"><i class="fa fa-fw fa-home"></i> Home</a> 
        <div class="dropdown">

          <?php if($this->session->userdata('admin')||$this->session->userdata('manager')||$this->session->userdata('customer')||$this->session->userdata('petugas')){ ?> 
            <button class="dropbtn"><i class="fa fa-fw fa-user"></i> <?php echo $this->session->userdata('username');?>
          <?php } else{ ?>
            <button class="dropbtn"><i class="fa fa-fw fa-user"></i> Akun
        <?php  } ?> 
            <i class="fa fa-caret-down"></i>
          </button>
            <div class="dropdown-content">
              <?php if(!$this->session->userdata("admin")&&!$this->session->userdata("manager")&&!$this->session->userdata('customer')&&!$this->session->userdata('petugas')){
                 ?>
                  <a href="<?php echo base_url('Bioskop/login');?>">Masuk</a>
                  <a href="<?php echo base_url('Auth/daftar');?>">Daftar</a>
              <?php }
              if($this->session->userdata("admin")||$this->session->userdata("manager")||$this->session->userdata('customer')||$this->session->userdata('petugas')){
                    if($this->session->userdata('customer')){
                      ?>
                      <a href="<?php echo base_url('Customer/editProfile/'.$this->session->userdata('id'));?>">Edit Profile</a>
                      <a href="<?php echo base_url('Bioskop/lihatTiket/'.$this->session->userdata('id'));?>">Pesanan Tiket Anda</a>
                  <?php  }
                 ?>
                 <a href="<?php echo base_url('Bioskop/logout');?>">Keluar</a>
              <?php } ?>

            </div>
          </div>

      <a href="javascript:void(0);" class="icon" style="float: left;" onclick="myFunction()">&#9776;</a>
    </div>
<br/>