
<style>
    table {
        width: 100%;
        border-collapse: collapse;
    }
    th,
    td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }

    .form-group {
        margin-bottom: 15px;
    }

    .btn-xs {
        padding: 5px 10px;
        font-size: 12px;
    }

    .form-control-file {
        display: inline-block;
        width: auto;
    }

    @media screen and (max-width: 600px) {
        table {
            font-size: 12px;
        }
    }
</style>
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
  <div class="card card-info card-outline">
    <div class="card-header">
      <h5 class="card-title">Daftar Data</h5>
    </div>
    <div class="card-body">
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
        if (empty($user)) {
            echo "<tr>";
            echo "<td colspan='5' class='text-center'>Data Kosong</td>";
            echo "</tr>";
        } else {
          $no = 1;
          foreach ($user as $data) :
        ?>
            <tr>
              <td><?= $no ?></td>
              <td><?= $data->Nama ?></td>
              <td><?= $data->Nim  ?></td>
              <td><?= $data->Email  ?></td>
              <td>
                <!-- Modal -->
                <script lenguage="javascript">
                      function simpanevaluasi($id_group) {
                    var TglBimbingan = $('#TglBimbingan').val();
                    if (TglBimbingan == "") 
                      {
                        alert("Tgl Masih Kosong!");
                        $('#TglBimbingan').focus();
                        return false;
                      }

                    var Uraian = $('#Uraian').val();
                    if (Uraian == "") 
                      {
                      alert("Uraian Masih Kosong");
                      $('#Uraian').focus();
                        return false;
                      }

                    var Solusi = $('#Solusi').val();
                    if (Solusi == "") 
                      {
                      alert("Solusi masih kosong");
                      $('#Solusi').focus();
                      return false;
                      }

                      $('#bimbinganevaluasi').submit();
                    }
                </script>
                <a href="<?php echo base_url('Cbimbingan/detailNilai/'.$data->id_group); ?>" class="btn btn-info btn-sm">Open</a>
                <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#Reply" data-toggle="modal" data-target="#Open"><i class="fa fa-edit"></i>Reply</button>
                
                <!-- REPLY -->
                <div class="modal fade" id="Reply" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title " id="exampleModalLabel">Bimbingan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                      <form id="bimbinganevaluasi" name="bimbinganevaluasi" method="post" action="<?php echo base_url('Cbimbingan/simpanevaluasi') ?>">
                        <label for="">Tanggal Pertemuan</label>
                        <input id="TglBimbingan" placeholder="" name="TglBimbingan" type="date" value="" class="form-control mb-3">
                          <div class="form-group">
                            <label for="message-text" class="col-form-label">Uraian:</label>
                            <textarea class="form-control" id="Uraian" name="Uraian"></textarea>
                          </div>
                          <div class="form-group">
                            <label for="message-text" class="col-form-label">Solusi:</label>
                            <textarea class="form-control" id="Solusi" name="Solusi"></textarea>
                          </div>
                          <input type="text" name="id_evaluasi" value="<?= $data->id_evaluasi ?>" id="id_evaluasi" />
                          
                        </form>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-success" onclick="simpanevaluasi();">Send</button>                 
                      </div>
                    </div>
                  </div>
                </div>
              </td>
          <?php
            $no++;
          endforeach;
        }
          ?>
      </tbody>
      </table>
    </div>
  </div>
</div>