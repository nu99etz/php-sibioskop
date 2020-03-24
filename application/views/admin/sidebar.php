<body>

    <div id="wrapper" class="toggled">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="index.php?status=dashboard">
                        SIM Bioskop
                    </a>
                </li>
                <li>
                    <a href="<?php echo base_url('Bioskop/');?>">Bioskop 24</a>
                </li>
                <li>
                    <a href="<?php echo base_url('Admin/viewFilm');?>">Data Bioskop</a>
                </li>
                <li>
                    <a href="<?php echo base_url('Admin/viewCustomer');?>">Data Customer</a>
                </li>
                <?php if($this->session->userdata("admin")||$this->session->userdata("manager")){ ?>
                    <li>
                    <a href="<?php echo base_url('Admin/viewPetugas');?>">Data Petugas</a>
                    </li>
                    <li>
                    <a href="<?php echo base_url('Admin/laporan');?>">Laporan</a>
                    </li><?php } ?>
                <?php if($this->session->userdata('manager')||$this->session->userdata('admin')||$this->session->userdata('petugas')){ ?>
                    <li>
                        <a href="<?php echo base_url('Auth/logout');?>">Log Out</a>
                    </li>
                <?php } ?>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->
        <div id="page-content-wrapper">
            <div class="container-fluid"> 
            <br/>
            <br/>             