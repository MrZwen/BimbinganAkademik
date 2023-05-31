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
        <button type="button" class="btn btn-primary" onclick="" style="" data-loading-text="Memuat..." data-toggle="modal" data-target="#editProfile"><i class="fa fa-edit"></i>Open</button>
            <div class="modal fade" id="editProfile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title text-bold" id="exampleModalLabel">Bimbingan</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
     	
    </td>
  <?php
  	$no++;
  	endforeach;
  }
  ?>
  </table>
</tbody> 
</div>