<center><h3>Silahkan Menambahkan Customer</h3><br/>
<form method="post" action="<?php echo base_url("Admin/addActioncus");?>" enctype="multipart/form-data">
    <div class="col-sm-7">
        <div class="form-group">
            <input type="text" class="form-control" name="nama_customer" placeholder="Nama Customer">
        </div>
        <div class="form-group">
            <input type="date" class="form-control" name="lahir">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="email" placeholder="Email">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password">
        </div>
        <div class="form-group">
            <input type="number" class="form-control" name="telp" placeholder="No Telepon">
        </div>
        <div class="form-group">
            <input type="radio" name="jk" value="L">Laki-laki
            <input type="radio" name="jk" value="P">Perempuan
        </div>
        <div class="form-group">
            <textarea class="form-control" name="alamat" placeholder="Alamat Customer"></textarea>
        </div>
        <div class="form-group">
            <input type="file" class="form-control" name="foto" onchange="preview(this,'gambar')">
        </div>
         <div class="form-group">
            <img id="gambar" width="360px"/>
        </div>
        <input type="hidden" id="fname" name="tgl_i" value="<?php echo date("Ymd");?>">
        <input type="submit" class="btn btn-success" name="tambah" value="Tambah">
        <input type="reset" class="btn btn-warning" name="reset" value="Reset">
      </div>
      </center>
</form>