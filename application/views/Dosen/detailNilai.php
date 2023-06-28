<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2 border-bottom">
      <div class="col-sm-6">
        <h1 class="m-0">Detail Nilai</h1>
      </div>
    </div>
  </div>
</div>

<div class="content-body">
    <div class="card card-success card-outline">
        <div class="card-header">
            <h5 class="header-title">Detail Nilai</h5>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <form action="" class="form-label">Nim</form>
                <input type="text" class="form-control" value="<?php echo $user->Nim ?>" disabled>
            </div>
            <div class="mb-3">
                <form action="" class="form-label">Nama Mahasiswa</form>
                <input type="text" class="form-control" value="<?php echo $user->Nama ?>" disabled>
            </div>
            <div class="mb-3">
                <form action="" class="form-label">Handphone</form>
                <input type="text" class="form-control" value="<?php echo $user->NoHp ?>" disabled>
            </div>
            <div class="mb-3">
                <form action="" class="form-label">Email</form>
                <input type="text" class="form-control" value="<?php echo $user->Email ?>" disabled>
            </div>
            <div class="mb-3">
                <form action="" class="form-label">Alamat</form>
                <input type="text" class="form-control" value="<?php echo $user->Alamat ?>" disabled>
            </div>
            <div class="mb-3">
                <form action="" class="form-label">IPK</form>
                <input type="text" class="form-control" value="<?php echo $user->IPK ?>" disabled>
            </div>
            <div class="mb-3">
                <form action="" class="form-label">IPS</form>
                <input type="text" class="form-control" value="<?php echo $user->IPS ?>" disabled>
            </div>
            <div class="mb-3">
                <form action="" class="form-label">Lainnya</form>
                <input type="text" class="form-control" value="<?php echo $user->lainnya ?>" disabled>
            </div>
            <div class="mb-3">
                <form action="" class="form-label">Verifikasi</form>
                <input type="text" class="form-control" value="<?php echo $user->VerifMahasiswa ?>" disabled>
            </div>
            <div class="mb-3">
                <form action="" class="form-label">Keluhan</form>
                <textarea type="text" class="form-control" disabled><?php echo $user->keluhan ?> </textarea>
            </div>
            <div class="d-flex justify-content-end">
                <a href="<?php echo base_url('Cbimbingan/bimbingan') ?>" class="btn btn-danger"> Kembali </a>
            </div>
        </div>
    </div>
</div>