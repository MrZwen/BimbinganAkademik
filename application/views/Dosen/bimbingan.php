
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

      if (empty($user)) {
        echo "Data Kosong";
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
                    function simpanevaluasi() {
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

              <button type="button" class="btn btn-primary btn-sm" onclick="" data-loading-text="Memuat..." data-toggle="modal" data-target="#Open"><i class="fa fa-edit"></i>Open</button>
              <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#Reply" data-toggle="modal" data-target="#Open"><i class="fa fa-edit"></i>Reply</button>
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
                        <input id="Nim" placeholder="" name="Nim" type="text" value="<?php echo $data->Nim ?>" class="form-control mb-3" disabled>
                        <label for="">Nama Mahasiswa</label>
                        <input id="Nama" placeholder="" name="Nama" type="text" value="<?php echo $data->Nama ?>" class="form-control mb-3" disabled>
                        <div class="row">
                          <div class="col-md-6">
                            <label for="">Handphone</label>
                            <input id="NoHP" placeholder="" name="NoHP" type="number" value="<?php echo $data->NoHp ?>" class="form-control mb-3" disabled>
                          </div>
                          <div class="col-md-6">
                            <label for="">Email</label>
                            <input type="email" id="Email" placeholder="" name="Email" value="<?php echo $data->Email ?>" class="form-control mb-3" disabled>
                          </div>
                        </div>
                        <label for="">Alamat</label>
                        <input id="Alamat" placeholder="" name="Alamat" type="text" value="<?php echo $data->Alamat ?>" class="form-control mb-3" disabled>
                        <div class="row">
                          <div class="col-md-6">
                            <label for="">IPK</label>
                            <input id="IPK" placeholder="" name="IPK" type="Number" value="<?php echo $data->IPK ?>" class="form-control mb-3" disabled>
                          </div>
                          <div class="col-md-6">
                            <label for="">IPS</label>
                            <input type="Number" id="IPS" placeholder="" name="IPS" value="<?php echo $data->IPS ?>" class="form-control mb-3" disabled>
                          </div>
                        </div>
                        <label for="">Lainnya</label>
                        <input id="Lainnya" placeholder="" name="Lainnya" type="Text" value="<?php echo $data->Lainya ?>" class="form-control mb-3" disabled>
                        <label for="">Verifikasi</label>
                        <input id="Lainnya" placeholder="" name="Lainnya" type="Text" value="<?php echo $data->VerifMahasiswa ?>" class="form-control mb-3" disabled>
                        <label for="">Keaktifan</label>
                        <textarea class="form-control" id="Keaktifan" name="Keaktifan" disabled><?php echo $data->Keaktifan ?></textarea>
                        <input type="hidden" name="id_akun" value="<?= $this->session->userdata('id_akun') ?>" id="id_akun" />
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                    </form>

                  </div>
                </div>
              </div>
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
                        <input type="text" name="idBimbingan" value="<?= $data->id_bimbingan ?>" id="idBimbingan" />
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
  </table>
  </tbody>
</div>