<div class="container">
    <div class="row">
        <div class="col-xs-1-12">
            <div class="card">
                <div class="card-header">
                    Form Tambah Data Mahasiswa
                </div>
                <div class="card-body">
                    <?php if(validation_errors()):?>
                    <div class="alert alert-danger" role="alert">
                        <?= validation_errors()?>
                    </div>
                    <?php endif ?>
                    <form action="" method="post">
                        <div class="form-group">
                          <label for="nama">Nama</label>
                          <input type="text" id="nama" class="form-control" name="nama">
                        </div>
                        <div class="form-group">
                          <label for="nim">NIM</label>
                          <input type="number" id="nim" class="form-control" name="nim">
                        </div>
                        <div class="form-group">
                          <label for="email">Email</label>
                          <input type="text" id="email" class="form-control" name="email">
                        </div>
                        <div class="form-group">
                          <label for="jurusan">Jurusan</label>
                          <select id="jurusan" class="form-control" name="jurusan">
                              <option selected>-----</option>
                              <option value="kimia">Kimia</option>
                              <option value="informatika">Informatika</option>
                              <option value="mesin">Mesin</option>
                          </select>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary float-right">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>