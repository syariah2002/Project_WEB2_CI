<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?= base_url()?>assets/dist/img/Profil.jpeg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Syariah_022</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="active">
          <a href="<?= base_url()?>dashboard">
            <i class="fa fa-dashboard"></i><span> Dashboard</span>
          </a>
        </li>

        <li><a href="<?= base_url()?>pegawai"><i class=" fa fa-user"></i> Pegawai</a></li>
        <li><a href="<?= base_url()?>pelanggan"><i class=" fa fa-users"></i> Pelanggan</a></li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-medkit"></i>
            <span>Obat-Obat</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?= base_url()?>jenis_obat"><i class="fa fa-circle-o"></i> Jenis Obat</a></li>
            <li><a href="<?= base_url()?>obat"><i class="fa fa-circle-o"></i> Nama Obat</a></li>
          </ul>

          <li><a href="<?= base_url()?>penjualan"><i class="fa fa-shopping-cart"></i> Penjualan</a></li>
        </li>

        <hr>
        <li><a href="<?= base_url()?>login/logout"><i class=" fa fa-sign-out"></i> Logout</a></li>

    </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
