<div class="card">
<div class="card-header">
<h3 class="card-title"> 
<?= $submenu; ?>
</h3>
</div>
<!-- /.card-header -->
<div class="card-body">
<?= form_open('dosen/update/'.$dosen['id_dosen007']) ?>
    <div class="form-group row">
        <label for="nidn007" class="col-sm-2 col-form-label">nidn</label>
        <div class="col-sm-10">
            <input class="form-control" value="<?= $dosen['nidn007'] ?>" name="nidn007" id="nidn007" placeholder="Masukkan nidn">
        </div>
    </div>

    <div class="form-group row">
        <label for="nama_dosen007" class="col-sm-2 col-form-label">Nama dosen</label>
        <div class="col-sm-10">
            <input class="form-control" value="<?= $dosen['nama_dosen007'] ?>"  name="nama_dosen007" id="nama_dosen007" placeholder="Masukkan Nama dosen">
        </div>
    </div>

    <div class="form-group row">
        <label for="tempat_lahir007" class="col-sm-2 col-form-label">Tempat & Tgl Lahir</label>
        <div class="col-sm-5">
            <input class="form-control" value="<?= $dosen['tempat_lahir007'] ?>" name="tempat_lahir007" id="tempat_lahir" placeholder="Masukkan Tempat Lahir">
        </div>
        <div class="col-sm-5">
            <input type="date" value="<?= $dosen['tgl_lahir007'] ?>" class="form-control" name="tgl_lahir007" id="tgl_lahir" placeholder="Masukkan Tanggal Lahir">
        </div>
    </div>

    <div class="form-group row">
        <label for="alamat_dsn007" class="col-sm-2 col-form-label">alamat_dsn</label>
        <div class="col-sm-10">
            <textarea name="alamat_dsn007" class="form-control" cols="30"><?= $dosen['alamat_dsn007'] ?></textarea>
        </div>
    </div>

    <div class="form-group row">
        <label for="pendidikan007" class="col-sm-2 col-form-label">pendidikan</label>
        <div class="col-sm-10">
            <input class="form-control" value="<?= $dosen['pendidikan007'] ?>" name="pendidikan007" id="pendidikan" placeholder="Masukkan pendidikan">
        </div>
    </div>

    <div class="form-group row">
        <label for="jurusan007" class="col-sm-2 col-form-label">Jurusan</label>
        <div class="col-sm-10">
            <input class="form-control" value="<?= $dosen['jurusan007'] ?>" name="jurusan007" id="jurusan" placeholder="Masukkan Jurusan">
        </div>
    </div>

    <div class="form-group row">
      <button type="submit" class="btn btn-warning btn-sm">Update</button>
      <button type="reset" class="btn btn-secondary btn-sm ml-2">Batal</button>
    </div>

<?= form_close() ?>
</div>
</div>  