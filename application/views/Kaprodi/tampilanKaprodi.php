<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Dashboard Kaprodi</title>
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
  <nav class="atas main-header navbar navbar-expand navbar-dark sticky-top ">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-flex">
        <a href="<?php echo base_url('Cutama/tampilanK'); ?>" class="nav-link justify-content-between">Home</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="profile-user navbar-nav ml-auto">
      <li class="nama-user nav-link">
        <img src="<?= base_url('assets/dist/img/avatar.png') ?>" class="profile img-circle mx-2">
        <!-- Menampilkan nama yang da pada table mahasiswa -->
        <a class="user-image text-white" href=""><?= $this->session->userdata('Nama') ?></a>
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
            <img src="<?= base_url('assets/dist/img/avatar.png') ?>" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <!-- Menampilkan nama yang da pada table mahasiswa -->
            <a href="#" class="d-block text-white"><?= $this->session->userdata('Nama') ?></a>
          </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->
            <li class="nav-item ">
              <a href="<?= base_url('Creport/ReportK'); ?>" class="nav-link text-white">
                <i class="nav-icon fas fa-graduation-cap"></i>
                <p>
                  Report Mahasiswa
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('Criwayat/RiwayatK'); ?>" class="nav-link text-white">
                <i class="nav-icon fas fa-history"></i>
                <p>
                  Riwayat
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('Cgroup/GroupBimbingan'); ?>" class="nav-link text-white">
                <i class="nav-icon fas fa-users"></i>
                <p>
                  Group Bimbingan
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="<?= base_url('Cskbimbingan/TampilSK'); ?>" class="nav-link text-white">
                <i class="nav-icon fas fa-regular fa-book"></i>
                <p>
                  Informasi SK
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
        <?php if ($this->uri->segment(2) == 'tampilanK') :  ?>
          <div class="content-body mt-3">
            <div class="row">
              <div class="col-12">
                <div class="card card-primary card-outline shadow">
                  <div class="card-header">
                    <h5 class="card-title"><i class="fas fa-tag"></i> Informasi Bimbingan</h5>
                  </div>
                  <div class="card-body">
                    <div class="container-fluid">
                      <div class="row">
                        <div class="col-lg-3 col-6">
                          <div class="small-box bg-primary">
                            <div class="inner">
                              <h3><?= $countM ?></h3>
                              <p>List Mahasiswa</p>
                            </div>
                            <div class="icon">
                              <i class="fas fa-user-graduate"></i>
                            </div>
                            <div class="small-box-footer"> </div>
                          </div>
                        </div>
                        <div class="col-lg-3 col-6">
                          <div class="small-box bg-success">
                            <div class="inner">
                              <h3><?= $countD ?></h3>
                              <p>List Dosen</p>
                            </div>
                            <div class="icon">
                              <i class="fas fa-user-tie"></i>
                            </div>
                            <div class="small-box-footer"> </div>
                          </div>
                        </div>
                        <div class="col-lg-3 col-6">
                          <div class="small-box bg-info">
                            <div class="inner">
                              <h3><?= $countG ?></h3>
                              <p>Group Bimbingan</p>
                            </div>
                            <div class="icon">
                              <i class="fas fa-user-friends"></i>
                            </div>
                            <div class="small-box-footer"> </div>
                          </div>
                        </div>
                        <div class="col-lg-3 col-6">
                          <div class="small-box bg-danger">
                            <div class="inner">
                              <h3><?= $countSK ?></h3>
                              <p>Informasi SK</p>
                            </div>
                            <div class="icon">
                              <i class="fas fa-info-circle"></i>
                            </div>
                            <div class="small-box-footer"> </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php endif; ?>
        <?php
        if (empty($konten)) {
          echo '';
        } else {
          echo $konten;
        }
        ?>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <!-- AJAX -->
        <div id="script"></div>
        <script src="<?php echo base_url(); ?>/jquery/app.js"></script>
        <script language="javascript">
          var site = "<?php echo base_url() ?>index.php/";
          var loading_image_large = "<?php echo base_url() ?>gambar/loading_large.gif";
        </script>
        <?php
        if (empty($table)) {
          echo '';
        } else {
          echo $table;
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
  <script src="<?= base_url('assets/plugins/jquery/jquery.min.js') ?>"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="<?= base_url('assets/plugins/jquery-ui/jquery-ui.min.js') ?>"></script>
  <!-- Sweet Alerts -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.5/dist/sweetalert2.all.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="<?= base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
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
    $(document).ready(function() {
      $('#example2').DataTable();
    });
  </script>

  <!-- DataTables -->
  <script src="<?= base_url('assets/plugins/datatables/jquery.dataTables.js')  ?>"></script>
  <script src="<?= base_url('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js')  ?>"></script>
</body>

</html>