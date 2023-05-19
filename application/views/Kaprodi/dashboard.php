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
                    <div class="card card-primary card-outline shadow">
                        <div class="card-header">
                            <h5 class="card-title"><i class="fas fa-tag" ></i>  Informasi Bimbingan</h5>
                        </div>
                        <div class="card-body">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-3 col-6">
                                        <div class="small-box bg-primary">
                                            <div class="inner">
                                                <h3>150</h3>
                                                <p>List Mahasiswa</p>
                                            </div>
                                            <div class="icon">
                                                <i class="ion ion-bag"></i>
                                            </div>
                                            <a href="" class="small-box-footer">Show More <i class="fas fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-6">
                                        <div class="small-box bg-success">
                                            <div class="inner">
                                                <h3>150</h3>
                                                <p>List Dosen</p>
                                            </div>
                                            <div class="icon">
                                                <i class="ion ion-bag"></i>
                                            </div>
                                            <a href="" class="small-box-footer">Show More <i class="fas fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-6">
                                        <div class="small-box bg-info">
                                            <div class="inner">
                                                <h3>150</h3>
                                                <p>Group Bimbingan</p>
                                            </div>
                                            <div class="icon">
                                                <i class="ion ion-bag"></i>
                                            </div>
                                            <a href="" class="small-box-footer">Show More <i class="fas fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-6">
                                        <div class="small-box bg-danger">
                                            <div class="inner">
                                                <h3>150</h3>
                                                <p>Informasi SK</p>
                                            </div>
                                            <div class="icon">
                                                <i class="ion ion-bag"></i>
                                            </div>
                                            <a href="" class="small-box-footer">Show More <i class="fas fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

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
                                        echo "Data Kosong";
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