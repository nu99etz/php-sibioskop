<div class="main">

  <?php if($this->session->userdata('customer')){
    $er = 'disabled'; $rt = 'readonly';
    $qe = $this->session->userdata('id');
  } else {
    $er = '';
    $qe = '';
  }
    
     foreach ($film as $flm){ ?>
    <form action="<?php echo base_url('Bioskop/actionTiket/'.$flm['id_customer']);?>" method="post" enctype="multipart/form-data">
          <div class="container">

            <?php $tot = $flm['jumlah'];
              for($i=0;$i<$tot;$i++){ ?>

                 <div class="row">
                    <div class="col-25">
                      <label for="fname">Pilih Kursi <?php echo $i+1;?></label>
                    </div>
                    <div class="col-75">
                    <select name="kursi[]">
                      <?php $a = array('A','B','C','D');
                        for($j=0;$j<4;$j++){
                          for($z=1;$z<=25;$z++){ ?>
                            <option value="<?php echo $a[$j]."-".$z;?>"><?php echo $a[$j]."-".$z;?></option>
                      <?php  } } ?>
                  </select>
                  </div>
                  </div>
        
      <?php  } } ;?>

        <div class="row">
          <input type="submit" name="pesan" value="Pesan">
        </div>

        </form>
      
    </div>
  </div>
</div>
</div>