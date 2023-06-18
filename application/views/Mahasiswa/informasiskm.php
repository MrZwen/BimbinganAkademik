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
<div class="card ">
  <div class="card-header ">
    <h3 class="text-bold">Informasi SK Pembimbing</h3>
  </div>
  <div class="container table-responsive">
    <div class="mb-3 mt-3">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama file</th>
            <th>Semester </th>
            <th>Tahun Ajaran</th>
            <th>file SK</th>
          </tr>
        </thead>
        <tbody>
          <?php
          if ($hasil) {
            $no = 1;
            foreach ($hasil as $data) :
          ?>
              <tr>
                <td><?= $no; ?></td>
                <td><?= $data->File_Sk ?></td>
                <td><?= $data->Semester ?></td>
                <td><?= $data->tahunajaran ?></td>
                <td><a href="" class="btn btn-danger btn-sm"><i class="fa fa-book"></i> File </a>
              </tr>
        </tbody>

      <?php
        $no++;
            endforeach;
          } else {
            echo "Data Kosong";
      ?>
    <?php
          }
    ?>
      </table>
    </div>
  </div>
</div>