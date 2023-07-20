<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/login.css') ?>">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>Login Bimbingan</title>

     <!-- icon -->
    <link rel="icon" href="<?php echo base_url("gambar/logopoltek.png") ?>" type="image/ico">
</head>

<body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
      $('#username').keydown(function(event) {
        checkEnter(event);
      });

      $('#password').keydown(function(event) {
        checkEnter(event);
      });
    });

    function checkEnter(event) {
      if (event.keyCode === 13) {
        proseslogin();
      }
    }

    function proseslogin() {
      var username = $('#username').val();
      if (username == "") {
        alert("username masih kosong");
        $('#username').focus();
        return false;
      }

      var password = $('#password').val();
      if (password == "") {
        alert("password masih kosong");
        $('#password').focus();
        return false;
      }
      $('#formlogin').submit();
    }
  </script>
    <div class="container-fluid">
        <div class="row no-gutter">
            <!-- The image half -->
            <div class="col-md-7 d-none d-md-flex bg-image d-flex justify-content-center">
                <div class="judul col-md-6 text-center text-md-left mt-xl-5 mb-5">
                    <h1 class="bimbingan h1-responsive font-weight-bold mt-sm-5 ">Bimbingan Akademik </h1>
                    <div class="kotak-text text-white">
                        Hallo Selamat Datang Dihalaman Login Bimbingan Akademik Politeknik Negeri Bali
                    </div>
                </div>
            </div>
            <!-- The content half -->
            <div class="col-md-5 bg-light">
                <div class="login d-flex align-items-center py-5">
                    <!-- Demo content-->
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10 col-xl-7 mx-auto">
                                <div class="text-center mb-xl-5">
                                    <img class="mx-auto d-block" src="<?php echo base_url('gambar/logopoltek.png') ?>" width="140px">
                                </div>
                                <div class="judul text-center text-md-left mt-xl-5 mb-5">
                                    <h1 class=" title h1-responsive font-weight-bold ">LOGIN </h1>
                                    <?php
                                    $pesan = $this->session->flashdata('pesan');
                                    if ($pesan == "") {
                                        echo "";
                                    } else {
                                    ?>
                                        <div class="alert alert-danger alert-dismissible">
                                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                                            <strong><?php echo $pesan; ?></strong>
                                        </div>

                                    <?php
                                    }
                                    ?>
                                </div>
                                <form id="formlogin" name="formlogin" method="post" action="<?php echo base_url('Clogin/proseslogin'); ?>">
                                    <div class="form-group mb-3">
                                        <input id="username" type="text" placeholder="Username" name="username" class="form-control border-0 shadow-sm px-4">
                                    </div>
                                    <div class="form-group mb-3">
                                        <input id="password" type="password" placeholder="Password" name="password" class="form-control border-0 shadow-sm px-4">
                                    </div>
                                    <div class="custom-control custom-checkbox mb-3">
                                        <input id="customCheck1" type="checkbox" checked class="custom-control-input">
                                        <label for="customCheck1" class="custom-control-label">Remember password</label>
                                    </div>
                                    <button type="button" class="button btn btn-primary form-control" onkeydown="checkEnter(event)" onclick="proseslogin();">Sign In</button>


                                </form>
                            </div>
                        </div>
                    </div><!-- End -->
                </div>
            </div><!-- End -->

        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</body>

</html>