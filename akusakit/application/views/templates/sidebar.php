<style>
  .a {list-style-type: none;
</style>
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url('dashboard') ?>" class="brand-link">
      <img src="<?php echo base_url()?>assets/dist/img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AKUSAKIT</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?php echo base_url()?>assets/dist/img/login.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <?php if($this->session->userdata('username')) { ?>
            <li class="a"><b><?php echo $this->session->userdata('username'); ?></b></li>
          <?php } else { ?>
            <li class="a"><?php echo anchor('dokter/auth', 'Login'); ?></li>
          <?php } ?>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="<?php echo base_url('dashboard') ?>" class="nav-link active">
               <i class="nav-icon fas fa-clinic-medical"></i>
              <p>
                Home
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="<?php echo base_url('penyakit') ?>" class="nav-link active">
              <i class="nav-icon fas fa-file-medical-alt"></i>
              <p>
                Data Penyakit
              </p>
            </a>
          </li>
          
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  