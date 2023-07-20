<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2 border-bottom">
            <div class="col-sm-6">
                <h1 class="m-0">SK Bimbingan</h1>
            </div>
        </div>

        <script language="javascript">
            function hapusdata(KodeKaprodi) {
                if (confirm("Apakah anda yakin menghapus data ini?")) {
                    window.open("<?php echo base_url() ?>cskbimbingan/hapusdata/"+KodeKaprodi, "_self");
                }
            }

            function editdata(KodeKaprodi) {
                load("cskbimbingan/editdata/"+KodeKaprodi,"#script");
            }
        </script>
        <script lenguage="javascript">
            function prosessimpan() {
                var semester = $('#semester').val();
                if (semester == "") {
                    alert("Semester masih kosong");
                    $('#semester').focus();
                    return false;
                }
                var NamaFile = $('#NamaFile').val();
                if (NamaFile == "") {
                    alert("Nama File masih kosong");
                    $('#NamaFile').focus();
                    return false;
                }
                var tahunajaran = $('#tahunajaran').val();
                if (tahunajaran == "") {
                    alert("Tahun Ajaran masih kosong");
                    $('#tahunajaran').focus();
                    return false;
                }

                $('#simpansk').submit();
            }
        </script>
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary card-outline shadow">
                    <div class="card-header">
                        <h5 class="card-title"> <i class="fas fa-users"></i> SK Bimbingan</h5>
                    </div>
                    <div class="card-body">
                        <form id="simpansk" name="simpansk" method="post" action="<?php echo base_url('cskbimbingan/simpanskbimbingan'); ?>" enctype="multipart/form-data">
                            <div class="mb-3">
                                <input type="hidden" class="form-control" name="Id_Sk" id="Id_Sk">
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
                            <div class="mb-3">
                                <label for="NamaFile">Nama File</label>
                                <input type="text" class="form-control" name="NamaFile" id="NamaFile" placeholder="Masukkan Nama File...">
                            </div>
                            <div class="mb-3">
                                <input type="file" name="file" id="file">
                                <input type="hidden" name="KodeKaprodi" value="<?= $this->session->userdata('KodeKaprodi') ?>" id="KodeKaprodi">
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
    </div>

    