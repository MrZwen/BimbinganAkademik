<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2 border-bottom">
            <div class="col-sm-6">
                <h3 class="m-0">Dashboard Kaprodi</h2>
            </div>
        </div>
    </div>
    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">

                    <!-- Menampilkan List Mahasiswa -->
                    
                    <div class="card card-success card-outline shadow">
                        <div class="card-header">
                            <h5 class="card-title"><i class="fas fa-tag" ></i>  List Mahasiswa</h5>
                        </div>
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nim</th>
                                    <th>Nama Mahasiswa</th>
                                    <th>No Hp</th>
                                    <th>Email</th>
                                    <th>Alamat</th>
                                    <th>Nama Orang Tua</th>
                                    <th>Telp Orang Tua</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php 
                                    if(empty($hasil))
                                    {
                                        echo "<tr>";
                                        echo "<td colspan='8' class='text-center'>Data Kosong</td>";
                                        echo "</tr>";
                                    }
                                    else{
                                        $no = 1;
                                        foreach ($hasil as $data) :
                                    ?>
                                <tr>
                                    <td><?= $no ?></td>
                                    <td><?= $data->Nim ?></td>
                                    <td><?= $data->Nama ?></td>
                                    <td><?= $data->NoHp ?></td>
                                    <td><?= $data->Email ?></td>
                                    <td><?= $data->Alamat ?></td>
                                    <td><?= $data->NamaOrangTua ?></td>
                                    <td><?= $data->TelpOrangTua ?></td>
                                </tr>
                                </tfoot>
                                
                            </tbody>
                            <?php
                            $no++;  
                            endforeach;
                            } 
                            ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>