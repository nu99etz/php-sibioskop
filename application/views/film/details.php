
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
        <div class="item1"><p><?php echo $flm['nama_film'];?><br/>
          <?php echo $flm['id_kategori'];?></p></div>
            <div class="item2"><center><img src="<?php echo base_url()?>assets/img/<?php echo $flm['foto'];?>"></center></div>
            <div class="item3"><p><i class = "fa fa-clock-o"></i> <?php echo $flm['durasi'];?> Menit<br/>
            <button class="btn btn1 default" style="margin-top: 3px;"><?php echo $flm['umur'];?></button><br/>
            <button class="btn btn1 default" style="margin-top: 3px;"><?php echo $flm['quality'];?></button><br/>

              <?php if($this->session->userdata("admin")||$this->session->userdata('manager')){ ?>
                  <a href="<?php echo base_url('Bioskop/editfilm/'.$flm['id_film']);?>"><button class="btn custom" style="margin-top: 3px;"><i class="fa fa-edit"></i></button><br/></a>
                  <a href="<?php echo base_url('Bioskop/hapusfilm/'.$flm['id_film']);?>" onclick="return confirm('Hapus Data ??')"><button class="btn custom" style="margin-top: 3px;"><i class="fa fa-trash"></i></button><br/>
              <?php } ?>
              <?php if($flm['detail'] == "Tersedia"){ ?>
                <a href="<?php echo base_url('Bioskop/pesan/'.$flm['id_film']);?>"><button  id="myBtn" class="btn custom">Pesan</button></p></a>
            <?php  } else { ?>
              <a href="#" onclick="return confirm('Film Tidak Tersedia')"><button  id="myBtn" class="btn custom">Pesan</button></p></a> <?php } ?>
            <br/><div class="fr"><?php echo $flm['sipnosis'];?><br/></div>
            </div> 
            <div class="item4"></div>
            <div class="item5"></div>
      </div>
    </div>

<?php } ?>