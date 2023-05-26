<!-- menampilkan data diri/ identitas mahasiswa tetapi belum terkoneksi database -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2 border-bottom">
            <div class="col-sm-6">
                <h1 class="m-0">Data Diri</h1>
            </div>
        </div>
    </div>
</div>
<div class="card-body">
    <div class="tab-content p-0">
        <form id="formedit" method="post" class="form-horizontal" action="?page=322&amp;language=id&amp;action=editdata" enctype="multipart/form-data">
            <input type="hidden" name="id" size="50" value="1d884ca9-7d5b-3458-eeb3-3038750b88d8">
            <br>
            <img src="<?= base_url('assets/dist/img/avatar.png') ?>" alt="Foto Profil" class="img-circle" style="width:130px;height:150px"><br>
            <br><input type="hidden" name="photo_current" size="50" class="form-control" value="files/mahasiswa/IMG_20210825_154515-1.JPG">
            <button type="button" class="btn btn-warning btn-xs" onclick="" style="margin-bottom:10px" data-loading-text="Memuat..."><i class="fa fa-trash-o"></i> Hapus Foto</button>
            <input id="avatar" name="avatar" type="file">
            <br><button type="submit" name="button" class="btn btn-success"><i class="fa fa-user"></i> Ganti Foto</button>

            <!-- Modal -->
            <button type="button" class="btn btn-primary" onclick="" style="margin-left:10px" data-loading-text="Memuat..." data-toggle="modal" data-target="#editProfile"><i class="fa fa-edit"></i> Edit Profil</button>
            <div class="modal fade" id="editProfile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-bold" id="exampleModalLabel">Edit Profile</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
        </form>
        <script lenguage="javascript">
            function prosessimpan() {
                var Nim = $('#Nim').val();
                if (Nim == "") {
                    alert("NIM masih kosong");
                    $('#Nim').focus();
                    return false;
                }

                var Nama = $('#Nama').val();
                if (Nama == "") {
                    alert("Nama masih kosong");
                    $('#Nama').focus();
                    return false;
                }

                var NoHP = $('#NoHP').val();
                if (NoHP == "") {
                    alert("No Handphone masih kosong");
                    $('#NoHP').focus();
                    return false;
                }

                var Email = $('#Email').val();
                if (Email == "") {
                    alert("E-Mail masih kosong");
                    $('#Email').focus();
                    return false;
                }

                var Alamat = $('#Alamat').val();
                if (Alamat == "") {
                    alert("Alamat masih kosong");
                    $('#Alamat').focus();
                    return false;
                }

                var NamaOrangTua = $('#NamaOrangTua').val();
                if (NamaOrangTua == "") {
                    alert("Nama Orang Tua masih kosong");
                    $('#NamaOrangTua').focus();
                    return false;
                }

                var TelpOrangTua = $('#TelpOrangTua').val();
                if (TelpOrangTua == "") {
                    alert("Telephone Orang Tua masih kosong");
                    $('#TelpOrangTua').focus();
                    return false;
                }

                $('#identitas').submit();
            }
        </script>
        <div class="modal-body">
            <form id="identitas" name="identitas" method="post" action="<?php echo base_url('Cdatadiri/updatedatadiri') ?>">
                <label for="">NIM</label>
                <input id="Nim" placeholder="Masukkan NIM" name="Nim" type="text" value="<?php echo $user->Nim ?>" class="form-control mb-3">
                <label for="">Nama Mahasiswa</label>
                <input id="Nama" placeholder="Masukkan Nama" name="Nama" type="text" value="<?php echo $user->Nama ?>" class="form-control mb-3">
                <div class="row">
                    <div class="col-md-6">
                        <label for="">Handphone</label>
                        <input id="NoHP" placeholder="Masukkan NIM" name="NoHP" type="number" value="<?php echo $user->NoHp ?>" class="form-control mb-3">
                    </div>
                    <div class="col-md-6">
                        <label for="">Email</label>
                        <input type="email" id="Email" placeholder="Masukkan E-Mail" name="Email" value="<?php echo $user->Email ?>" class="form-control mb-3">
                    </div>
                </div>
                <label for="">Alamat</label>
                <input id="Alamat" placeholder="Masukkan Alamat" name="Alamat" type="text" value="<?php echo $user->Alamat ?>" class="form-control mb-3">
                <label for="">Nama Orang Tua</label>
                <input id="NamaOrangTua" placeholder="Masukkan Nama Orang Tua" name="NamaOrangTua" type="text" value="<?php echo $user->NamaOrangTua ?>" class="form-control mb-3">
                <label for="">Telp Orang Tua</label>
                <input type="number" id="TelpOrangTua" placeholder="Masukkan Telephone Orang Tua" name="TelpOrangTua" value="<?php echo $user->TelpOrangTua ?>" class="form-control">
                <input type="hidden" name="id_akun" value="<?= $this->session->userdata('id_akun') ?>" id="id_akun" />

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" onclick="prosessimpan();">Update</button>
        </div>
        </form>
    </div>
</div>
</div>
<br>
    <div class="card">
        <div class="card-header">
            <h3 class="text-bold">Data Diri Mahasiswa</h3>
                <?php 
                    $pesan=$this->session->flashdata('pesan');
                    if ($pesan=="")
                    {
                    echo "";	
                    }
                    else
                    {
                ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong><?php echo $pesan; ?></strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                <?php
                    }
                ?>
        </div>
        <div class="card-body">
            <table class="table">
                <tbody>
                    <tr>
                        <td width="15%">Nim</td>
                        <td width="2%">:</td>
                        <td width="30%"><?php echo $user->Nim ?></td>
                        <td width="3%"></td>
                        <td width="15%">Alamat</td>
                        <td width="2%">:</td>
                        <td width="30%"><?php echo $user->Alamat ?></td>
                    </tr>
                    <tr>
                        <td>Nama Mahasiswa</td>
                        <td>:</td>
                        <td><?php echo $user->Nama ?></td>
                        <td></td>
                        <td>E-mail</td>
                        <td>:</td>
                        <td><?php echo $user->Email ?></td>
                    </tr>
                    <tr>
                        <td>Handphone</td>
                        <td>:</td>
                        <td><?php echo $user->NoHp ?></td>
                        <td></td>
                        <td>Telepon Orangtua</td>
                        <td>:</td>
                        <td><?php echo $user->TelpOrangTua ?></td>

                    </tr>
                    <tr>
                        <td>Nama Orangtua</td>
                        <td>:</td>
                        <td><?php echo $user->NamaOrangTua ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>