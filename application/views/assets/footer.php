<div class="footer">
	<?php if($this->session->userdata('admin')||$this->session->userdata('petugas')||$this->session->userdata('manager')){ ?> <a href = "<?php echo base_url("Admin/");?>">Halaman Admin</a> <?php } ?>
	<p>Created By Nugraha</p>
</div>
<script src="<?php echo base_url()?>assets/modal.js"></script>
<script src="<?php echo base_url()?>assets/preview.js"></script>
