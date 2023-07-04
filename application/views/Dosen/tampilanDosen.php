<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard Dosen</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Sweet Alerts -->
  <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('assets/plugins/fontawesome-free/css/all.min.css') ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?= base_url('assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') ?>">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?= base_url('plugins/jqvmap/jqvmap.min.css') ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('assets/dist/css/adminlte.min.css') ?>">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?= base_url('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') ?>">
  <!-- css -->
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <!-- Navbar -->
  <nav class="atas main-header navbar navbar-expand navbar-dark sticky-top">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item ">
        <a href="" class="nav-link">Home</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto profile-user ">
      <li class="nav-item dropdown">
          <a class="nav-link" data-toggle="dropdown" href="#">
          <img src="<?php echo base_url( "gambar/" . $this->session->userdata('gambar') )?>" alt="Gambar" class="rounded-circle" alt="User Image" style="width:34px;height:34px">
          <span class="user-image text-white" data-toggle="dropdown" href=""><?= $this->session->userdata('NamaDosen') ?></a>
          </a>
          <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
            <a href="#" class="dropdown-item">
                <h3 class="dropdown-item-title mx-2 mt-1">
                  Ganti Password
                </h3>
            </a>
          </div>
        </li>
    </ul>
  </nav>
  <div class="wrapper">
    <!-- Main Sidebar Container -->
    <aside class="samping main-sidebar sidebar-light-primary elevation-4">
      <!-- Brand Logo -->
      <div class="brand-link">
        <img src="<?= base_url('gambar/logopoltek.png') ?>" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text text-white font-weight-light">Bimbingan Akademik</span>
      </div>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
          <img src="<?php echo base_url( "gambar/" . $this->session->userdata('gambar') )?>" class="rounded-circle elevation-2" alt="User Image" style="width:34px;height:34px">
          
          </div>
          <div class="info">
            <!-- Menampilkan nama yang da pada table mahasiswa -->
            <a href="#" class="d-block text-white"><?= $this->session->userdata('NamaDosen') ?></a>
          </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
            <li class="nav-item ">
              <a href="<?php echo base_url('Cutama/tampilanD') ?>" class="nav-link text-white">
                <i class="nav-icon fas fa-reugler fa-user"></i>
                <p>
                  Data Diri
                </p>
              </a>
            </li>
            <li class="nav-item">
                 <a href="<?php echo base_url('Cbimbingan/bimbingan') ?>" class="nav-link text-white">
                <i class="nav-icon fas fa-graduation-cap"></i>
                <p>
                  Bimbingan
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url('Criwayat/riwayatD') ?>" class="nav-link text-white">
                <i class="nav-icon fas fa-history"></i>
                <p>
                  Riwayat
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url('Cskbimbingan/informasiskdosen') ?>" class="nav-link text-white">
                <i class="nav-icon fas fa-regular fa-book"></i>
                <p>
                  Informasi SK
                  </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?php echo base_url('Cgroup/groupbimbingandosen') ?>" class="nav-link text-white">
                <i class="nav-icon fas fa-users"></i>
                <p>
                  Group Bimbingan
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="javascript:void(0)" onClick="logout();" class="nav-link text-white">
                <i class="nav-icon fas fa-sign-out-alt"></i>
                <p>
                  Log Out
                </p>
              </a>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>
  </div>
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
          <?php
              if (empty($konten)) {
                echo '';
              } else {
                echo $konten;
              }
          ?>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>


  <script language="javascript">
    function logout() {
      Swal.fire({
        title: 'Apakah yakin ingin keluar sistem?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#2F6888',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, Logout!'
      }).then((result) => {
        if (result.isConfirmed) {
          window.open("<?php echo base_url(); ?>clogin/logout", "_self");
        }
      })
    }
  </script>
  <!-- jQuery -->
<script src="<?= base_url('assets/plugins/jquery/jquery.min.js')?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url('assets/plugins/jquery-ui/jquery-ui.min.js')?>"></script>
<!-- Sweet Alerts -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.all.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
<!-- ChartJS -->
<script src="<?= base_url('assets/plugins/chart.js/Chart.min.js') ?>"></script>
<!-- Sparkline -->
<script src="<?= base_url('assets/plugins/sparklines/sparkline.js') ?>"></script>
<!-- JQVMap -->
<script src="<?= base_url('assets/plugins/jqvmap/jquery.vmap.min.js')  ?>"></script>
<script src="<?= base_url('assets/plugins/jqvmap/maps/jquery.vmap.usa.js')  ?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?= base_url('assets/plugins/jquery-knob/jquery.knob.min.js')  ?>"></script>
<!-- daterangepicker -->
<script src="<?= base_url('assets/plugins/moment/moment.min.js')  ?>"></script>
<script src="<?= base_url('assets/plugins/daterangepicker/daterangepicker.js')  ?>"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?= base_url('assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')  ?>"></script>
<!-- Summernote -->
<script src="<?= base_url('assets/plugins/summernote/summernote-bs4.min.js')  ?>"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')  ?>"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/dist/js/adminlte.js')  ?>"></script>
<!-- Page specific script -->
<script>
  $(document).ready(function () {
    $('#example2').DataTable();
});
</script>
<!-- DataTables -->
<script src="<?= base_url('assets/plugins/datatables/jquery.dataTables.js')  ?>"></script>
<script src="<?= base_url('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js')  ?>"></script>
</body>
</html>
