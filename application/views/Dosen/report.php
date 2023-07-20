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
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>NIM</th>
                                    <th>Tanggal Bimbingan</th>
                                    <th>Tahun Ajaran</th>
                                    <th>Semester</th>
                                    <th>Status Bimbingan</th>
                                    <th>BImbingan ke-</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (empty($hasil)) {
                                    echo "<tr>";
                                    echo "<td colspan='6' class='text-center'>Data Kosong</td>";
                                    echo "</tr>";
                                } else {
                                    $prevIdGroup = "";
                                    $no = 1;
                                    $count = 0; // Variabel untuk menghitung jumlah data dengan id_group yang sama

                                    foreach ($hasil as $data) {
                                        if ($data->id_group != $prevIdGroup) {


                                            $count = 1;
                                            $prevIdGroup = $data->id_group;
                                        } else {
                                            $count++;
                                        }

                                        echo "<tr>";
                                        echo "<td>{$no}</td>";
                                        echo "<td>{$data->Nama}</td>";
                                        echo "<td>{$data->Nim}</td>";
                                        echo "<td>{$data->TglBimbingan}</td>";
                                        echo "<td>{$data->tahunajaran}</td>";
                                        echo "<td>{$data->semester}</td>";
                                        echo "<td>";

                                        if (!isset($data->Solusi) && !isset($data->Uraian)) {
                                            echo '<span class="badge badge-danger">Belum Bimbingan</span>';
                                        } else if (!isset($data->Solusi) && !isset($data->Uraian) ||$data->Solusi === "" && $data->Uraian === "") {
                                            echo '<span class="badge badge-warning">Dalam Proses</span>';
                                        } else {
                                            echo '<span class="badge badge-success">Sudah Bimbingan</span>';
                                        }

                                        echo "</td>";
                                        echo "<td>{$count}</td>";
                                        echo "</tr>";

                                        $no++;
                                    }
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