<div class="card">
<div class="card-header">
<h3 class="card-title"> 
<?= $submenu; ?>
</h3>
</div>
<!-- /.card-header -->
<div class="card-body">
<?= form_open('dosen/simpan') ?>
    <div class="form-group row">
        <label for="nidn" class="col-sm-2 col-form-label">nidn</label>
        <div class="col-sm-10">
            <input class="form-control" name="nidn007" id="nidn" placeholder="Masukkan nidn">
        </div>
    </div>

    <div class="form-group row">
        <label for="nama_dosen" class="col-sm-2 col-form-label">Nama Dosen</label>
        <div class="col-sm-10">
            <input class="form-control" name="nama_dosen007" id="nama_dosen" placeholder="Masukkan Nama Dosen">
        </div>
    </div>

    <div class="form-group row">
        <label for="tempat_lahir" class="col-sm-2 col-form-label">Tempat & Tgl Lahir</label>
        <div class="col-sm-5">
            <input class="form-control" name="tempat_lahir007" id="tempat_lahir" placeholder="Masukkan Tempat Lahir">
        </div>
        <div class="col-sm-5">
            <input type="date" class="form-control" name="tgl_lahir007" id="tgl_lahir" placeholder="Masukkan Tanggal Lahir">
        </div>
    </div>

    <div class="form-group row">
        <label for="alamat_dsn007" class="col-sm-2 col-form-label">Alamat Dosen</label>
        <div class="col-sm-10">
            <textarea name="alamat_dsn007" class="form-control" cols="30"></textarea>
        </div>
    </div>

    <div class="form-group row">
        <label for="pendidikan007" class="col-sm-2 col-form-label">Pendidikan</label>
        <div class="col-sm-10">
            <input class="form-control" name="pendidikan007" id="pendidikan" placeholder="Masukkan pendidikan">
        </div>
    </div>

    <div class="form-group row">
        <label for="jurusan007" class="col-sm-2 col-form-label">Jurusan</label>
        <div class="col-sm-10">
            <input class="form-control" name="jurusan007" id="jurusan" placeholder="Masukkan Jurusan">
        </div>
    </div>

    <div class="form-group row">
      <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
      <button type="reset" class="btn btn-secondary btn-sm ml-2">Batal</button>
    </div>

<?= form_close() ?>
</div>
</div>  