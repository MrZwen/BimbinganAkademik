<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2 border-bottom">
            <div class="col-sm-6">
                <h1 class="m-0">Bimbingan</h1>
            </div>
        </div>
    </div>
</div>
<form action="">
    <div class="mb-3">
        <label class="form-label">Tahun Bimbingan </label>
        <select name="StatusMahasiswa" class="form-control" id="StatusMahasiswa">
            <?php if ($hasil) {
                foreach ($hasil as $data): 
            ?>
            
                    <option value=""><?php echo $data->semester ?> <?php echo  $data->tahunajaran; ?> </option>
                <?php
                endforeach;
            } else {
                ?>
                <option value="DataKosong">Data Kosong</option>
            <?php
            }
            ?>
        </select>
    </div>
</form>