<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2 border-bottom">
            <div class="col-sm-6">
                <h1 class="m-0">Bimbingan</h1>
            </div>
        </div>
    </div>
</div>
<script lenguage="javascript">
    function prosessimpan() {
        var Beasiswa = document.getElementById("Beasiswa");
        var SuratPeringatan = document.getElementById("SuratPeringatan");

        var DosenPembimbing = $('#DosenPembimbing').val();
        if (DosenPembimbing == "") {
            alert("Dosen Pembimbing masih kosong");
            $('#DosenPembimbing').focus();
            return false;
        }
        var TahunAjaran = $('#TahunAjaran').val();
        if (TahunAjaran == "") {
            alert("Tahun Ajaran masih kosong");
            $('#TahunAjaran').focus();
            return false;
        }

        var Semester = $('#Semester').val();
        if (Semester == "") {
            alert("Semester IPK masih kosong");
            $('#Semester').focus();
            return false;
        }

        var StatusMahasiswa = $('#StatusMahasiswa').val();
        if (StatusMahasiswa == "") {
            alert("Status Mahasiswa masih kosong");
            $('#StatusMahasiswa').focus();
            return false;
        }

        var NilaiIpk = $('#NilaiIpk').val();
        if (NilaiIpk == "") {
            alert("Nilai IPK masih kosong");
            $('#NilaiIpk').focus();
            return false;
        }

        var NilaiIps = $('#NilaiIps').val();
        if (NilaiIps == "") {
            alert("Nilai IPS masih kosong");
            $('#NilaiIps').focus();
            return false;
        }

        var Ranking = $('#Ranking').val();
        if (Ranking == "") {
            alert("Ranking masih kosong");
            $('#Ranking').focus();
            return false;
        }

        if (Beasiswa.checked) {
            var Lainya = Beasiswa.value;
        } else if (SuratPeringatan.checked) {
            var Lainya = SuratPeringatan.value;
        } else if (SuratPeringatan.checked || Beasiswa.checked) {
            var Lainya = "";
            Lainya += Beasiswa.value + "SuratPeringatan";
        }

        var Keaktifan = $('#Keaktifan').val();
        if (Keaktifan == "") {
            alert("Keaktifan Mahasiswa masih kosong");
            $('#Keaktifan').focus();
            return false;
        }

        $('#bimbingan').submit();
    }
</script>
<div class="card">
    <div class="card-header">
        <h3 class="text-bold">Form Bimbingan Mahasiswa</h3>
        <?php
        $pesan = $this->session->flashdata('pesan');
        if ($pesan == "") {
            echo "";
        } else {
        ?>
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong><?php echo $pesan; ?></strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        <?php
        }
        ?>
    </div>
    <div class="container">
        <div class="mb-3 mt-3">
            <div class="mb-3">
                <label class="form-label">Dosen Pembimbing</label>
                <input type="text" class="form-control" id="DosenPembimbing" value="<?php echo isset($user->NamaDosen) ? $user->NamaDosen : null; ?>" name="DosenPembimbing" disabled>
            </div>
            <div class="mb-3">
                <label class="form-label">T.A</label>
                <input type="text" class="form-control" id="TahunAjaran" value="<?php echo isset($user->tahunajaran) ? $user->tahunajaran : null; ?>" name="TahunAjaran" disabled>
            </div>
            <div class="mb-3">
                <label class="form-label">Semester</label>
                <input type="text" class="form-control" id="Semester" value="<?php echo isset($user->semester) ? $user->semester : null; ?>" name="Semester" disabled>
            </div>
            <form id="bimbingan" name="bimbingan" method="post" action="<?php echo base_url('Cbimbingan/simpanbimbingan') ?>">
                <input type="hidden" class="form-control" id="id_group" value="<?php echo isset($user->id_group) ? $user->id_group : null; ?> " name="id_group">
                <div class="mb-3">
                    <label class="form-label">Status Mahasiswa </label>
                    <select name="StatusMahasiswa" class="form-control" id="StatusMahasiswa">
                        <option value="">PILIH</option>
                        <option value="Aktif">Aktif</option>
                        <option value="Cuti">Cuti</option>
                        <option value="DropOut">Drop Out (DO)</option>
                </div>
                </select>
                <div class="mb-3">
                    <label class="form-label">Nilai IPK</label>
                    <input type="number" class="form-control" id="IPK" min="0.00" max="4.00" placeholder="Masukkan Nilai IPK" name="IPK">
                </div>
                <div class="mb-3">
                    <label class="form-label">Nilai IPS</label>
                    <input type="number" class="form-control" id="IPS" min="0.00" max="4.00" placeholder="Masukkan Nilai IPS Semester ini" name="IPS">
                </div>
                <div class="mb-3">
                    <label class="form-label">Ranking</label>
                    <input type="number" class="form-control" id="Ranking" min="1" placeholder="Masukkan Ranking Semester ini" name="Ranking">
                </div>
                <div class="mb-3">
                    <label class="form-label">Lain - lain </label>
                    <br>
                    <input class="form-check-label" type="radio" name="Lainya" id="Beasiswa" value="Beasiswa">Beasiswa
                    <input class="form-check-label" type="radio" name="Lainya" id="SuratPeringatan" value="SuratPeringatan">Surat Peringatan
                    <br /> <br />
                </div>
                <div class="mb-3">
                    <label class="form-label">Keaktifan Mahasiswa</label>
                    <textarea class="form-control" rows="3" id="Keaktifan" name="Keaktifan" placeholder="Masukkan Keaktifan Mahasiswa berupa Kegiatan yang telah dilakukan di lingkungan kampus"></textarea>
                </div>
                <button type="button" class="btn btn-primary" onclick="prosessimpan()">Submit</button>
            </form>
        </div>
    </div>
</div>