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
<script language="javascript">
  function simpanevaluasi(id_evaluasi) {
    var Uraian = $('#Uraian' + id_evaluasi).val();
    if (Uraian == "") {
      alert("Uraian Masih Kosong");
      $('#Uraian' + id_evaluasi).focus();
      return false;
    }

    var Solusi = $('#Solusi' + id_evaluasi).val();
    if (Solusi == "") {
      alert("Solusi masih kosong");
      $('#Solusi' + id_evaluasi).focus();
      return false;
    }
    var VerifDosen = "Terverifikasi";
    var form = document.getElementById('bimbinganevaluasi' + id_evaluasi);
    form.action = "simpanevaluasi/" + id_evaluasi;
    form.submit();
  }
</script>
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
                  <a href="<?php echo base_url('Cbimbingan/detailNilai/' . $data->id_group); ?>" class="btn btn-info btn-sm">Open</a>
                  <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#Reply<?= $data->id_evaluasi ?>"><i class="fa fa-edit"></i> Reply</button>

                  <!-- REPLY -->
                  <div class="modal fade" id="Reply<?= $data->id_evaluasi ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title " id="exampleModalLabel">Bimbingan</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <?php $id_evaluasi = $data->id_evaluasi ?>
                          <form id="bimbinganevaluasi<?= $data->id_evaluasi ?>" name="bimbinganevaluasi" method="post">
                            <div class=" form-group">
                              <label for="message-text" class="col-form-label">Uraian:</label>
                              <textarea class="form-control" id="Uraian" <?= $data->id_evaluasi ?> name="Uraian"></textarea>
                            </div>
                            <div class="form-group">
                              <label for="message-text" class="col-form-label">Solusi:</label>
                              <textarea class="form-control" id="Solusi" <?= $data->id_evaluasi ?> name="Solusi"></textarea>
                            </div>
                            <input type="hidden" id="VerifDosen" name="VerifDosen" value="Terverifikasi">
                          </form>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-success" onclick="simpanevaluasi(<?php echo $id_evaluasi; ?>);">Send</button>
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