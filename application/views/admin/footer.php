<?php
?>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url();?>assets/admin/bar/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/admin/bar/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url()?>assets/preview.js"></script>
    <script src="<?php echo base_url()?>assets/belajar_ajax.js"></script>
    <script src="<?php echo base_url()?>assets/jquery-3.4.1.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>