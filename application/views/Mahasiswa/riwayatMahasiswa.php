<!DOCTYPE html>
<html>
<script>
    function tampilevaluasi(id_bimbingan) {
        window.open("<?php echo base_url() ?>criwayat/evaluasi/" + id_bimbingan, "_self");
    }
</script>

<head>
    <title>Riwayat Bimbingan Mahasiswa</title>
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

        @media screen and (max-width: 600px) {
            table {
                font-size: 12px;
            }
        }
    </style>
</head>

<body>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2 border-bottom">
                <div class="col-sm-6">
                    <h1>Riwayat Bimbingan</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="card card-info card-outline">
        <div class="card-header">
            <h5 class="card-title">Hasil Evaluasi dari Bimbingan</h5>
        </div>
        <div class="table-responsive">
            <div class="mb-3 mt-3">
            <div class="card-body">
                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>T.A</th>
                            <th>Semester</th>
                            <th>Nama Pembimbing</th>
                            <th>Tanggal dan Waktu</th>
                            <th>File Evaluasi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                         if (empty($hasil)) {
                            echo "<tr>";
                            echo "<td colspan='6' class='text-center'>Data Kosong</td>";
                            echo "</tr>";
                        } else {
                            $no = 1;
                            foreach ($hasil as $data) :
                        ?>
                                <tr>
                                    <td><?= $no; ?></td>
                                    <td><?= $data->tahunajaran ?></td>
                                    <td><?= $data->semester ?></td>
                                    <td><?= $data->NamaDosen  ?></td>
                                    <td><?= $data->TglBimbingan  ?></td>
                                    <td><a onclick="tampilevaluasi(<?php echo $data->id_evaluasi; ?>);" class="btn btn-danger btn-sm"><i class="fa fa-book"></i> PDF</a>
                                    <td></td>
                                </tr>
                    </tbody>
                </table>
                <?php
                    $no++;
                    endforeach;
                }    
                ?>
            </div>
            </div>
        </div>
    </div>

</body>

</html>