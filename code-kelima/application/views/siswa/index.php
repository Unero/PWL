<div class="container">
    <div class="row mt-4">
        <div class="col-md-6">
            <a href="<?php echo base_url();?>siswa/tambah" class="btn btn-primary">Tambah Data</a>
        </div>
    </div>    

    <div class="row mt-3">
        <div class="col-md-6">
            <h2>Daftar Siswa</h2>
            <ul class="list-group">
                <?php foreach ($siswa as $mhs):?>
                    <li class="list-group-item"><?= $mhs['nama'];?> - <?= $mhs['nim'];?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>