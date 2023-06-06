<!DOCTYPE html>
<html>

<head>
    <title>Riwayat Bimbingan Mahasiswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
    <h1>Riwayat Bimbingan</h1>

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
            if (empty($hasil)) {
                echo "Data Kosong";
            } else {
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
<?php
                endforeach;
            }
?>
    </table>

</body>

</html>