<body>
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2 border-bottom">
            <div class="col-sm-6">
                <h1 class="m-0">Riwayat Bimbingan</h1>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h5 class="card-title">Riwayat</h5>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>T.A</th>
                            <th>Semester</th>
                            <th>Nama Dosen</th>
                            <th>Nama Mahasiswa</th>
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
                                    <td><?= $data->Semester ?></td>
                                    <td><?= $data->NamaDosen ?></td>
                                    <td><?= $data->Nama ?></td>
                                    <td><?= $data->TglBimbingan  ?></td>
                                    <td><a href="<?= base_url('Criwayat/pdfK/'.$data->id_evaluasi) ?>" class="btn btn-danger btn-sm"><i class="fa fa-book"></i>  PDF</a>
                                    <td></td>
                                </tr>
                    </tbody>
                        <?php
                            endforeach;
                        }
                        ?>
                </table>
            </div>
        </div>
    </div>
</div>

</body>

</html>