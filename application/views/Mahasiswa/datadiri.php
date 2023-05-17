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
            <img src="<?=  base_url('assets/dist/img/avatar.png') ?>" alt="Foto Profil" class="img-circle" style="width:130px;height:150px"><br>
            <br><input type="hidden" name="photo_current" size="50" class="form-control" value="files/mahasiswa/IMG_20210825_154515-1.JPG">
            <button type="button" class="btn btn-warning btn-xs" onclick="" style="margin-bottom:10px" data-loading-text="Memuat..."><i class="fa fa-trash-o"></i> Hapus Foto</button>
            <input id="avatar" name="avatar" type="file">
            <br><button type="submit" name="button" class="btn btn-success"><i class="fa fa-user"></i> Ganti Foto</button>
            <!-- Modal -->
            <button type="button" class="btn btn-primary" onclick="" style="margin-left:10px" data-loading-text="Memuat..." data-toggle="modal" data-target="#editProfile"><i class="fa fa-edit"></i> Edit Profil</button>
        </form>

        <div class="modal fade" id="editProfile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title text-bold" id="exampleModalLabel">Edit Profile</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="">
                        <label for="">NIM</label>
                        <input type="text" class="form-control mb-3">
                        <label for="">Nama Mahasiswa</label>
                        <input type="text" class="form-control mb-3">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Handphone</label>
                                <input type="number" class="form-control mb-3">
                            </div>
                            <div class="col-md-6">
                                <label for="">Email</label>
                                <input type="email" class="form-control mb-3">
                            </div>
                        </div>
                        <label for="">Alamat</label>
                        <input type="text" class="form-control mb-3">
                        <label for="">Nama Orang Tua</label>
                        <input type="text" class="form-control mb-3">
                        <label for="">Telp Orang Tua</label>
                        <input type="number" class="form-control">
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" style="">Simpan</button>
                </div>
                </div>
            </div>
        </div>
        <br>
        <div class="card-body">
        <table class="table">
            <tbody>
                <tr>
                    <td width="15%">Nim</td>
                    <td width="2%">:</td>
                    <td width="30%">2115354064</td>
                    <td width="3%"></td>
                    <td width="15%">NIK</td>
                    <td width="2%">:</td>
                    <td width="30%">2</td>
                </tr>
                <tr>
                    <td>Nama Mahasiswa</td>
                    <td>:</td>
                    <td></td>
                    <td></td>
                    <td>Alamat</td>
                    <td>:</td>
                    <td></td>
                </tr>
                <tr>
                    <td>Handphone</td>
                    <td>:</td>
                    <td>085155418814</td>
                    <td></td>
                    <td>E-mail</td>
                    <td>:</td>
                    <td>krisnaastika71@gmail.com</td>

                </tr>
                <tr>
                    <td>Nama Orangtua</td>
                    <td>:</td>
                    <td>D4 Teknologi Rekayasa Perangkat Lunak</td>
                    <td></td>
                    <td>telepon Orangtua</td>
                    <td>:</td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
</div>