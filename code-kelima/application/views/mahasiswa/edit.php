<div class="container">
    <div class="row mt-3">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    Form Edit Data Mahasiswa
                </div>
                <div class="card-body">
                    <?php if(validation_errors()):?>
                        <div class="alert alert-danger" role="alert">
                            <strong><?= validation_errors();?></strong>
                        </div>
                    <?php endif ?>
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $mahasiswa['id'];?>">
                        <div class="form-group">
                          <label for="nama">Nama</label>
                          <input type="text" 
                                 name="nama" 
                                 id="nama" 
                                 class="form-control" 
                                 value="<?= $mahasiswa['nama'];?>">
                        </div>
                        <div class="form-group">
                          <label for="nim">NIM</label>
                          <input type="number" 
                                 name="nim" 
                                 id="nim" 
                                 class="form-control" 
                                 value="<?= $mahasiswa['nim'];?>">
                        </div>
                        <div class="form-group">
                          <label for="email">Email</label>
                          <input type="email" 
                                 name="email" 
                                 id="email" 
                                 class="form-control" 
                                 value="<?= $mahasiswa['email'];?>">
                        </div>
                        <div class="form-group">
                          <label for="">Jurusan</label>
                          <select name="jurusan" id="jurusan" class="form-control">
                            <?php foreach($jurusan as $key):?>
                                <?php if($key == $mahasiswa['jurusan']):?>
                                    <option value="<?= $key ?>"selected><?= $key ?></option>
                                <?php else:?>
                                    <option value="<?= $key ?>"><?= $key ?></option>
                                <?php endif; ?>                                
                            <?php endforeach; ?>
                          </select>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary float-right">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
