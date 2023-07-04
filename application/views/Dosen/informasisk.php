<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2 border-bottom">
      <div class="col-sm-6">
        <h1 class="m-0">Informasi SK</h1>
      </div>
    </div>
  </div>
</div>
<style>
  table {
    width: 100%;
    border-collapse: collapse;
  }

  th,
  td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
  }

  @media screen and (max-width: 600px) {
    table {
      font-size: 12px;
    }
  }
</style>
  <div class="table-responsive">
    <div class="mb-3 mt-3">
      <div class="card">
        <div class="card-header card-primary card-outline">
          <h5 class="card-title"> <i class="fas fa-users"></i> Informasi SK</h5>
        </div>
        <div class="card-body table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>No</th>
                <th>Nama file</th>
                <th>Semester</th>
                <th>Tahun Ajaran</th>
                <th>file SK</th>
              </tr>
            </thead>
            <tbody>
              <?php
              if (empty($hasil)) {
                echo "<tr>";
                echo "<td colspan='5' class='text-center'>Data Kosong</td>";
                echo "</tr>";
            } else  {
                $no = 1;
                foreach ($hasil as $data) :
              ?>
                  <tr>
                    <td><?= $no; ?></td>
                    <td><?= $data->File_Sk ?></td>
                    <td><?= $data->Semester ?></td>
                    <td><?= $data->tahunajaran ?></td>
                    <td><a href="#" class="btn btn-danger btn-sm" onclick="tampilkanPDF('<?= $data->File_Sk ?>')" data-toggle="modal" data-target="#editProfile" ><i class="fa fa-book"></i> File</a></td>
                  </tr>
              <?php
                  $no++;
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
<div class="modal fade" id="editProfile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Informasi SK</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <embed id="pdfEmbed" src="" type="application/pdf" width="100%" height="600px" />
      </div>
    </div>
  </div>
</div>
<script>
  function tampilkanPDF(namaFile) {
    var embedElement = document.getElementById('pdfEmbed');
    var jalurFile = "<?php echo base_url('document/'); ?>" + namaFile; // Ubah "document/" menjadi jalur relatif ke folder yang sesuai
    embedElement.setAttribute('src', jalurFile);
  }
</script>