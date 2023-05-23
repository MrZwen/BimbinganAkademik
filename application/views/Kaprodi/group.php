<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2 border-bottom">
            <div class="col-sm-6">
                <h1 class="m-0">Group Bimbingan</h1>
            </div>
        </div>
    </div>
</div>

<script lenguage="javascript">
    function prosessimpan() {
        var namagroup = $('#namagroup').val();
        if (namagroup == "") {
            alert("Nama Group masih kosong");
            $('#namagroup').focus();
            return false;
        }

        var NID = $('#NID').val();
        if (NID == "") {
            alert("NID masih kosong");
            $('#NID').focus();
            return false;
        }
        var semester = $('#semester').val();
        if (semester == "") {
            alert("Semester masih kosong");
            $('#semester').focus();
            return false;
        }
        var tahunajaran = $('#tahunajaran').val();
        if (tahunajaran == "") {
            alert("Tahun Ajaran masih kosong");
            $('#tahunajaran').focus();
            return false;
        }

        $('#identitas').submit();
    }
</script>

<div class="conten-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary card-outline shadow">
                    <div class="card-header">
                        <h5 class="card-title"> <i class="fas fa-users"></i> Setting Group Bimbingan</h5>
                    </div>
                    <div class="card-body">
                        <form action="">
                            <div class="mb-3">
                                <label for="NID">NID</label>
                                <input type="text" class="form-control" name="NID" id="NID" placeholder="Masukkan NIDN...">
                            </div>
                            <div class="mb-3">
                                <label for="semester">Semester</label>
                                <input type="text" class="form-control" name="semester" id="semester" placeholder="Masukkan Semester...">
                            </div>
                            <div class="mb-3">
                                <label for="tahunajaran">Tahun Ajaran</label>
                                <input type="number" min="2000" max="2050" id="tahunajaran" class="form-control" name="tahunajaran" placeholder="Masukkan Tahun Ajaran...">
                            </div>
                            <div class="d-flex justify-content-md-end">
                                <button type="reset" class="btn btn-danger mx-2">Cancel</button>
                                <button onclick="prosessimpan();" class="btn btn-success ">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div   div class="card card-success card-outline shadow">
                    <div class="card-header">
                    <h5 class="card-title"> <i class="fas fa-users"></i> Group Bimbingan</h5>
                    </div>
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-hover">
                            <thead>
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>Nama Dosen</th>
                                    <th>Nama Anggota</th>
                                    <th>Semester</th>
                                    <th>Tahun Ajaran</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <?php 
                                    if(empty($hasil))
                                    {
                                        echo "Data Kosong";
                                    }
                                    else{
                                        $no = 1;
                                        foreach ($hasil as $data) :
                                    ?>
                            <tbody>
                                <tr class="text-center">
                                    <td><?= $no; ?></td>
                                    <td><?= $data->NamaDosen ?></td>
                                    <td><?= $data->Nama ?></td>
                                    <td><?= $data->semester ?></td>
                                    <td><?= $data->tahunajaran ?></td>
                                    <td>
                                        <a href="" class="btn btn-success"><i class="fas fa-plus"></i></a>
                                    </td>
                                </tr>
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