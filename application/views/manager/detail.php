
<?php if ($this->session->flashdata('success')){ ?> 
  
  <div class="alert success">
    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
      <?php echo $this->session->flashdata('success'); ?>
  </div>

<?php } ?>

<?php
  foreach ($film as $flm){ ?>

    <div class="main">
      <div class="grid-container">
        <div class="item1">
          </div>
            <div class="item2"><center><img src="<?php echo base_url()?>assets/img/manager/<?php echo $flm['foto'];?>"></center></div>
            <div class="item3"><p><?php echo $flm['nama_manager'];?><br/>
            <button class="btn btn1 default" style="margin-top: 3px;"><?php echo $flm['no_telp_manager'];?></button><br/>
            <button class="btn btn1 default" style="margin-top: 3px;"><?php echo $flm['jenis_kelamin'];?></button><br/>

              <?php if($this->session->userdata("admin")||$this->session->userdata('manager')){ ?>
                  <a href="<?php echo base_url('Manager/editprofile/'.$flm['id_manager']);?>"><button class="btn custom" style="margin-top: 3px;"><i class="fa fa-edit"></i></button><br/></a>

                  <?php if($this->session->userdata("admin")){ ?> 
                  <a href="<?php echo base_url('Manager/pecatmanager/'.$flm['id_manager']);?>"><button class="btn custom" style="margin-top: 3px;"><i class="fa fa-trash"></i></button></a><br/> <?php } ?>
              <?php } ?>

            <br/><div class="fr"><?php echo $flm['alamat'];?><br/></div>
            </div> 
            <div class="item4"></div>
            <div class="item5"></div>
      </div>
    </div>

<?php } ?>