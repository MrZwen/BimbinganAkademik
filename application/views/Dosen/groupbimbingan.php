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
  // Memperbarui tampilan daftar nama mahasiswa saat tombol "Tampil Group" ditekan
  document.addEventListener("DOMContentLoaded", function() {
        const tampilGroupButtons = document.querySelectorAll(".tampil-group");
        tampilGroupButtons.forEach(function(button) {
            button.addEventListener("click", function() {
                const namaDosen = button.dataset.namaDosen;
                const semester = button.dataset.semester;
                const tahunajaran = button.dataset.tahunajaran;
                const groupMahasiswaRow = document.querySelector('.group-mahasiswa-row[data-nama-dosen="' + namaDosen + '"][data-semester="' + semester + '"][data-tahunajaran="' + tahunajaran + '"]');
                groupMahasiswaRow.classList.toggle("show");
            });
        });
    }); 
</script>

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
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <?php
            if (empty($hasil)) {
              echo "<tr>";
              echo "<td colspan='6' class='text-center'>Data Kosong</td>";
              echo "</tr>";
            } else {
              $no = 1;
              $prevNamaDosen = ""; // Variabel penanda nama dosen sebelumnya
              $prevSemester = "";
              $prevTahunAjaran = "";
              foreach ($hasil as $data) {
                if ($data->NamaDosen == $prevNamaDosen && $data->semester == $prevSemester && $data->tahunajaran == $prevTahunAjaran) {
                  continue; // Lewati baris jika nama dosen sama dengan nama sebelumnya
                }
                ?>
                <tr class="text-center">
                  <td>
                    <?= $no; ?>
                  </td>
                  <td>
                    <?= $data->NamaDosen ?>
                  </td>
                  <td>
                    <?= $data->semester ?>
                  </td>
                  <td>
                    <?= $data->tahunajaran ?>
                  </td>
                  <td>
                    <button type="button" class="btn btn-success btn-sm tampil-group"
                    data-nama-dosen="<?= $data->NamaDosen ?>" data-semester="<?= $data->semester ?>" data-tahunajaran="<?= $data->tahunajaran ?>"><i class="fas fa-info"></i></button>
                  </td>
                </tr>
                <tr class="group-mahasiswa-row" data-nama-dosen="<?= $data->NamaDosen ?>" data-semester="<?= $data->semester ?>" data-tahunajaran="<?= $data->tahunajaran ?>">
                  <td></td>
                  <td colspan="" class="text-center">Nama Mahasiswa</td>
                  <td colspan="4" class="">
                    <ul class="group-mahasiswa-list">
                      <?php
                      // Menampilkan nama mahasiswa dengan dosen yang sama
                      foreach ($hasil as $data_mahasiswa) {
                        if ($data_mahasiswa->NamaDosen == $data->NamaDosen && $data_mahasiswa->semester == $data->semester && $data_mahasiswa->tahunajaran == $data->tahunajaran) {
                    ?>


                          <li>
                            <?= $data_mahasiswa->Nama ?>
                          </li>
                          <?php
                        }
                      }
                      ?>
                    </ul>
                  </td>
                </tr>
                <?php
                $prevSemester = $data->semester;
                $prevTahunAjaran = $data->tahunajaran;
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