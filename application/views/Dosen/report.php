<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2 border-bottom">
            <div class="col-sm-6">
                <h1 class="m-0">Report Mahasiswa</h1>
            </div>
        </div>
    </div>

    <div class="content-body">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-outline card-primary">
                    <div class="card-header">
                        <h5 class="card-title">Report Mahasiswa</h5>
                    </div>
                    <div class="card-body text-center">
                        <table  class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Tahun Bimbingan</th>
                                    <th>Semester</th>
                                    <th>Status Bimbingan</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php 
                                if (empty($hasil)) {
                                    echo "<tr>";
                                    echo "<td colspan='5' class='text-center'>Data Kosong</td>";
                                    echo "</tr>";
                                } else {
                                    $no = 1;
                                    foreach ($hasil as $data) :
                                ?>
                                    <tr>
                                        <td><?= $no ?></td>
                                        <td><?= $data->Nama ?></td>
                                        <td><?= $data->TglBimbingan ?></td>
                                        <td><?= $data->semester ?></td>
                                        <td><?php if($data->Solusi === "" && $data->Uraian === ""){
                                            echo '<span class="badge badge-danger">Belum Bimbingan</span>';
                                        } else {
                                            echo '<span class="badge badge-success">Sudah Bimbingan</span>';
                                        }?></td>
                                    </tr>
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
        </div>
    </div>
</div>