<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2 border-bottom">
            <div class="col-sm-6">
                <h1 class="m-0">Bimbingan</h1>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid mt-3">
  <h4>Daftar Data</h4>
  <table class="table table-striped">
    <thead>
      <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Nim</th>
        <th>Email</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
    <?php

  if(empty($user))
  {
	echo "Data Kosong";  
  }
  else
  {
	  $no=1;
	  foreach ($user as $data):
  ?>
   <tr>
    <td><?= $no ?></td>
    <td><?= $data->Nama ?></td>
    <td><?= $data->Nim  ?></td>
    <td><?= $data->Email  ?></td>
    <td>
        <!-- Modal -->
        <button type="button" class="btn btn-success btn-sm" onclick="">Reply</button>
        <button type="button" class="btn btn-primary" onclick=""data-loading-text="Memuat..." data-toggle="modal" data-target="#Open"><i class="fa fa-edit"></i>Open</button>
            <div class="modal fade" id="Open" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-bold" id="exampleModalLabel">Bimbingan</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
          <div class="modal-body">
           <form id="identitas" name="identitas" method="post" action="">
                  <label for="">NIM</label>
                  <input id="Nim" placeholder="" name="Nim" type="text" value="<?php echo $data->Nim ?>"class="form-control mb-3">
                  <label for="">Nama Mahasiswa</label>
                  <input id="Nama" placeholder="" name="Nama" type="text" value="<?php echo $data->Nama ?>" class="form-control mb-3">
                <div class="row">
                <div class="col-md-6">
                        <label for="">Handphone</label>
                        <input id="NoHP" placeholder="" name="NoHP" type="number" value="" class="form-control mb-3">
                    </div>
                    <div class="col-md-6">
                        <label for="">Email</label>
                        <input type="email" id="Email" placeholder="" name="Email" value="<?php echo $data->Email ?>" class="form-control mb-3">
                    </div>
                </div>
                <label for="">Alamat</label>
                <input id="Alamat" placeholder="" name="Alamat" type="text" value="" class="form-control mb-3">
                <input type="hidden" name="id_akun" value="<?= $this->session->userdata('id_akun') ?>" id="id_akun" />

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary" onclick="prosessimpan();">Update</button>
        </div>
        </form>
     	
    </td>
  <?php
  	$no++;
  	endforeach;
  }
  ?>
  </table>
</tbody> 
</div>