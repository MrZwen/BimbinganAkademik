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
                    <div class="card-body">
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
                                    foreach ($hasil as $data) :
                                ?>
                                    <tr>

                                    </tr>
                                <?php
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