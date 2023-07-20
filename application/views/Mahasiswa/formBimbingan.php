<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2 border-bottom">
            <div class="col-sm-6">
                <h1 class="m-0">Bimbingan</h1>
            </div>
        </div>
    </div>
</div>
<script lenguage="javascript">
    function prosessimpan() {
        var Keaktifan = $('#Keluhan').val();
        if (Keaktifan == "") {
            alert("Keluhan Mahasiswa masih kosong");
            $('#Keluhan').focus();
            return false;
        }

        $('#bimbingan').submit();
    }
</script>
<div class="content-body">
    <div class="card card-success card-outline">
        <div class="card-header">
            <h5 class="card-title">Bimbingan</h5>
        </div>
        <div class="card-body">
            <table id="example1" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Dosen</th>
                        <th>Semester</th>
                        <th>Tahun Ajaran</th>
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
                                <td><?php echo $no; ?></td>
                                <td><?php echo $data->NamaDosen; ?></td>
                                <td><?php echo $data->Semester; ?></td>
                                <td><?php echo $data->tahunajaran; ?></td>
                                <td>
                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#Nilai<?= $data->id_group ?>">
                                        Detail Nilai
                                    </button>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#keluhan<?= $data->id_group  ?>">
                                        Keluhan
                                    </button>
                                </td>
                                <!--Modal Detail-->
                                <div class="modal fade" id="Nilai<?= $data->id_group ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Nilai Mahasiswa</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form id="nilaibimbingan<?= $data->id_group ?>" name="nilaibimbingan" method="post">
                                                    <div class="mb-3">
                                                        <label class="form-label"> Nilai IPK </label>
                                                        <input type="text" class="form-control" value="<?php echo isset($data->IPK) ? $data->IPK  : null; ?>" disabled>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label"> Nilai IPS </label>
                                                        <input type="text" class="form-control" value="<?php echo isset($data->IPS) ? $data->IPS  : null; ?>" disabled>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label"> Ranking </label>
                                                        <input type="text" class="form-control" value="<?php echo isset($data->Ranking) ? $data->Ranking  : null; ?>" disabled>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="form-label"> Lain - lain </label>
                                                        <input type="text" class="form-control" value="<?php echo isset($data->lainnya) ? $data->lainnya  : null; ?>" disabled>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--Modal Keluhan-->
                                <div class="modal fade" id="keluhan<?= $data->id_group ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Keluhan Mahasiswa</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form id="bimbingan" name="bimbingan" method="post" action="<?php echo base_url('Cbimbingan/simpanbimbingan') ?>">
                                                    <input type="hidden" id="id_group" name="id_group" value="<?php echo $data->id_group ?>">
                                                    <div class="mb-3">
                                                        <label for="Keluhan" class="form-label">Keluhan Mahasiswa</label>
                                                        <textarea name="keluhan" class="form-control" id="Keluhan" cols="30" rows="10"></textarea>
                                                    </div>
                                                    <input type="hidden" id="VerifDosen" name="VerifDosen" value="Belum Verifikasi">
                                                    <div class="mb-3">
                                                        <?php date_default_timezone_set("Asia/Ujung_Pandang"); ?>
                                                        <input type="hidden" name="TglBimbingan" id="TglBimbingan" value="<?php echo date("Y-m-d H:i:s"); ?>">
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                        <button type="button" class="btn btn-primary" onclick="prosessimpan()">Submit</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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