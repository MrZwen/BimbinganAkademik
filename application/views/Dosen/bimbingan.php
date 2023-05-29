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

  if(empty($hasil))
  {
	echo "Data Kosong";  
  }
  else
  {
	  $no=1;
	  foreach ($hasil as $data):
  ?>
   <tr>
    <td><?= $no ?></td>
    <td><?= $user->Nama ?></td>
    <td><?= $user->Nim  ?></td>
    <td><?= $user->Email  ?></td>
    <td>
        <button type="button" class="btn btn-primary btn-sm" onclick="editdata('')">Edit</button>
       	<button type="button" class="btn btn-danger btn-sm" onclick="hapusdata('');">Hapus</button>
    </td>
  <?php
  	$no++;
  	endforeach;
  }
  ?>
  </table>
</tbody> 
</div>