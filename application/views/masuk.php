
<!-- ALert -->
<?php if ($this->session->flashdata('gagal')){
?>  <div class="alert danger">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <?php echo $this->session->flashdata('gagal'); ?>
<?php } else if ($this->session->flashdata('warning')){
  ?>
  <div class="alert warning">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
  <?php echo $this->session->flashdata('warning'); } ?>
</div>

<!-- Main Login -->
<div class="main" style="background-color: #f2f2f2;">
<center>
<form action="<?php echo base_url("Auth/loginaksi");?>" method="post">
  <h2>Silahkan Masuk</h2>
  <div class="input-container">
    <i class="fa fa-user input-icon"></i>
    <input class="input-field" type="text" placeholder="Email" name="username">
  </div>
  <div class="input-container">
    <i class="fa fa-key input-icon"></i>
    <input class="input-field" type="password" placeholder="Password" name="password">
  </div>
  <button type="submit" name="masuk" class="btn-input">Masuk</button>
  <h4>Belum Punya Akun ? Silahkan Daftar <a href="<?php echo base_url('Auth/daftar');?>">Disini</a></h4>
</form>
</center>
</div>
<br/>