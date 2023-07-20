<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2 border-bottom">
            <div class="col-sm-6">
                <h1 class="m-0">Group Bimbingan</h1>
            </div>
        </div>
    </div>
</div>


<script>
    function hapusdata(id_group) {
        if (confirm("Apakah anda yakin menghapus data ini?")) {
            window.open("<?php echo base_url() ?>cgroup/hapusdata/" + id_group, "_self");
        }
    }
    // Memperbarui tampilan daftar nama mahasiswa saat tombol "Tampil Group" ditekan
    document.addEventListener("DOMContentLoaded", function() {
        const tampilGroupButtons = document.querySelectorAll(".tampil-group");
        tampilGroupButtons.forEach(function(button) {
            button.addEventListener("click", function() {
                const namaDosen = button.dataset.namaDosen;
                const groupMahasiswaRow = document.querySelector('.group-mahasiswa-row[data-nama-dosen="' + namaDosen + '"]');
                groupMahasiswaRow.classList.toggle("show");
            });
        });
    });
</script>

<script lenguage="javascript">
    function prosessimpan() {

        var NID = $('#NID').val();
        if (NID == "") {
            alert("NID masih kosong");
            $('#NID').focus();
            return false;
        }
        var NIM = $('#NIM').val();
        if (NIM == "") {
            alert("NIM Mahasiswa masih kosong");
            $('#NIM').focus();
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
                        <form id="identitas" name="identitas" method="post" action="<?php echo base_url('Cgroup/tambahmahasiswa') ?>">
                            <div class="mb-3">
                                <label for="NID">NID Dosen</label>
                                <input type="text" class="form-control" name="NID" id="NID" placeholder="Masukkan NIDN...">
                            </div>
                            <div class="mb-3">
                                <label for="NIM">Nim Mahasiswa</label>
                                <input type="text" id="NIM" class="form-control" name="NIM" placeholder="Masukkan NIM Mahasiswa...">
                            </div>
                            <div class="mb-3">
                                <label for="semester">Semester</label>
                                <input type="text" class="form-control" name="semester" id="semester" placeholder="Masukkan Semester...">
                            </div>
                            <div class="mb-3">
                                <label for="tahunajaran">Tahun Ajaran</label>
                                <br>
                                <select name="tahunajaran" id="tahunajaran" class="form-control" >
                                <option value="">pilih tahun ajaran</option>
                                    <?php
                                    foreach ($hasil1 as $data) {
                                        echo '<option value="' . $data->tahunajaran . '">' . $data->tahunajaran . '</option>';
                                    }
                                    ?>
                                </select>
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
                <div class="card card-success card-outline shadow">
                    <div class="card-header">
                        <h5 class="card-title"> <i class="fas fa-users"></i> Group Bimbingan</h5>
                    </div>
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-hover">
                            <thead>
                                <tr class="text-center">
                                    <th>No</th>
                                    <th>Nama Dosen</th>
                                    <th>Semester</th>
                                    <th>Tahun Ajaran</th>
                                    <th colspan="3">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (empty($hasil)) {
                                    echo "Data Kosong";
                                } else {
                                    $no = 1;
                                    $prevNamaDosen = ""; // Variabel penanda nama dosen sebelumnya
                                    foreach ($hasil as $data) {
                                        if ($data->NamaDosen == $prevNamaDosen) {
                                            continue; // Lewati baris jika nama dosen sama dengan nama sebelumnya
                                        }
                                ?>
                                        <tr class="text-center">
                                            <td><?= $no; ?></td>
                                            <td><?= $data->NamaDosen ?></td>
                                            <td><?= $data->semester ?></td>
                                            <td><?= $data->tahunajaran ?></td>
                                            <td>
                                                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#tambahmahasiswa<?= $data->id_group ?>"><i class="fa fa-plus"></i></button>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-success btn-sm tampil-group" data-nama-dosen="<?= $data->NamaDosen ?>"><i class="fas fa-info"></i></button>
                                            </td>
                                            <td>
                                                <button type="button" class="btn btn-danger btn-sm tampil-group" onclick="hapusdata(<?php echo $data->id_group; ?>);"><i class="fas fa-trash"></i></button>
                                            </td>
                                        </tr>
                                        <tr class="group-mahasiswa-row" data-nama-dosen="<?= $data->NamaDosen ?>">
                                            <td colspan="2" class="text-center">Nama Mahasiswa</td>
                                            <td colspan="5" class="">
                                                <ul class="group-mahasiswa-list">
                                                    <?php
                                                    // Menampilkan nama mahasiswa dengan dosen yang sama
                                                    foreach ($hasil as $data_mahasiswa) {
                                                        if ($data_mahasiswa->NamaDosen == $data->NamaDosen) {
                                                    ?>

                                                            <li><?= $data_mahasiswa->Nama ?></li>

                                                    <?php
                                                        }
                                                    }
                                                    ?>
                                                </ul>
                                            </td>
                                        </tr>
                                        <div class="modal fade" id="tambahmahasiswa<?= $data->id_group ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title " id="exampleModalLabel">Tambah Mahasiswa</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form id="mahasiswa" name="mahasiswa" method="post" action="<?php echo base_url('Cgroup/tambahmahasiswa') ?>">
                                                            <input type="hidden" value="<?= $data->semester ?>" name="semester" id="semester">
                                                            <input type="hidden" value="<?= $data->tahunajaran ?>" name="tahunajaran" id="tahunajaran">
                                                            <input type="hidden" value="<?= $data->NID ?>" name="NID" id="NID">
                                                            <label for="NIM">Nim Mahasiswa </label>
                                                            <input id="Nim" placeholder="" name="Nim" type="Text" value="" class="form-control mb-3">
                                                        </form>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <a type="button" class="btn btn-success" onclick="prosestambah()">Tambah</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                <?php
                                        $prevNamaDosen = $data->NamaDosen; // Update nilai penanda nama dosen sebelumnya
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
        <script lenguage="javascript">
            function prosestambah() {
                var Nim = $('#Nim').val();
                if (Nim == "") {
                    alert("Nim yang anda tambahkan masih kosong");
                    $('#Nim').focus();
                    return false;
                }

                $('#mahasiswa').submit();
            }
        </script>
    </div>
</div>