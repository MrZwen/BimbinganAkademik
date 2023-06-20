<script language="javascript">
    function hapusdata(Id_Sk) {
        if (confirm("Apakah anda yakin menghapus data ini?")) {
            window.open("<?php echo base_url() ?>cskbimbingan/hapusdata/" + Id_Sk, "_self");
        }
    }

    function editdata(Id_Sk) {
        load("cskbimbingan/editdata/"+Id_Sk,"#script");	
    }
</script>
<div class="row">
    <div class="col-md-12">
        <div class="card card-outline card-primary">
            <div class="card-header">
                <h5 class="card-title">Sk Bimbingan</h5>
            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Semester</th>
                            <th>Tahun Ajaran</th>
                            <th>File</th>
                            <th colspan="">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (empty($hasil)) {
                            echo "Data Kosong";
                        } else {
                            $no = 1;
                            foreach ($hasil as $data) :
                        ?>

                                <tr>
                                    <td><?= $no; ?></td>
                                    <td><?= $data->Semester ?></td>
                                    <td><?= $data->tahunajaran ?></td>
                                    <td><?= $data->File_Sk ?></td>
                                    <td>
                                        <button type="button" class="btn btn-info btn-sm" onclick="editdata('<?php echo $data->Id_Sk; ?>')">Edit</button>
                                        <button type="button" class="btn btn-danger btn-sm" onclick="hapusdata(<?php echo $data->Id_Sk; ?>);">Hapus</button>
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