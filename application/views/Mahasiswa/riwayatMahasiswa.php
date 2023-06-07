<!DOCTYPE html>
<html>

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

    <table class="table table-striped">
        <thead>
            <tr>
                <th>T.A</th>
                <th>Semester</th>
                <th>Nama Pembimbing</th>
                <th>Tanggal dan Waktu</th>
                <th>File Evaluasi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            if ($hasil) {
                foreach ($hasil as $data) :
            ?>
                    <tr>
                        <td><?= $data->tahunajaran ?></td>
                        <td><?= $data->semester ?></td>
                        <td><?= $data->NamaDosen  ?></td>
                        <td><?= $data->TglBimbingan  ?></td>
                        <td></td>
                        <td></td>
                    </tr>
        </tbody>
    </table>
<?php
                endforeach;
            } else {
                echo "Data Kosong";
?>
<?php
            }
?>


</body>

</html>