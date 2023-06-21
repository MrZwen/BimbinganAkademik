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
                                <label for="semester">Semester</label>
                                <input type="text" class="form-control" name="semester" id="semester" placeholder="Masukkan Semester...">
                            </div>
                            <div class="mb-3">
                                <label for="tahunajaran">Tahun Ajaran</label>
                                <input type="number" min="2000" max="2050" id="tahunajaran" class="form-control" name="tahunajaran" placeholder="Masukkan Tahun Ajaran...">
                            </div>
                            <div class="mb-3">
                                <input type="file" name="file" id="FileSk">
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

    