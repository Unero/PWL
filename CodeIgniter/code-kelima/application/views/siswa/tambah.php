<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Tambah Data Siswa
                </div>
                <div class="card-body">
                    <?php if(validation_errors()):?>
                        <div class="alert alert-danger" role="alert">
                            <strong><?= validation_errors();?></strong>
                        </div>
                    <?php endif ?>
                    <form action="" method="post">
                        <div class="form-group">
                          <label for="nama">Nama</label>
                          <input type="text" name="nama" id="nama" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="alamat">Alamat</label>
                          <input type="text" name="alamat" id="alamat" class="form-control">
                        </div>
                        <div class="form-group">
                          <label for="nim">Nim</label>
                          <input type="number" name="nim" id="nim" class="form-control">
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary float-right">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>