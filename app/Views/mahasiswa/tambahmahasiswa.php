<div class="card">
<div class="card-header">
<h3 class="card-title"> 
<?= $submenu; ?>
</h3>
</div>
<!-- /.card-header -->
<div class="card-body">
<?= form_open('mahasiswa/simpan') ?>
    <div class="form-group row">
        <label for="nim007" class="col-sm-2 col-form-label">NIM</label>
        <div class="col-sm-10">
            <input class="form-control" name="nim007" id="nim" placeholder="Masukkan NIM">
        </div>
    </div>

    <div class="form-group row">
        <label for="nama_mhs007" class="col-sm-2 col-form-label">Nama Mahasiswa</label>
        <div class="col-sm-10">
            <input class="form-control" name="nama_mhs007" id="nama_mhs" placeholder="Masukkan Nama Mahasiswa">
        </div>
    </div>

    <div class="form-group row">
        <label for="tempat_lahir007" class="col-sm-2 col-form-label">Tempat & Tgl Lahir</label>
        <div class="col-sm-5">
            <input class="form-control" name="tempat_lahir007" id="tempat_lahir" placeholder="Masukkan Tempat Lahir">
        </div>
        <div class="col-sm-5">
            <input type="date" class="form-control" name="tgl_lahir007" id="tgl_lahir" placeholder="Masukkan Tanggal Lahir">
        </div>
    </div>

    <div class="form-group row">
        <label for="alamat007" class="col-sm-2 col-form-label">Alamat</label>
        <div class="col-sm-10">
            <textarea name="alamat007" class="form-control" cols="30"></textarea>
        </div>
    </div>

    <div class="form-group row">
        <label for="nohp007" class="col-sm-2 col-form-label">No HP</label>
        <div class="col-sm-10">
            <input class="form-control" name="nohp007" id="nohp" placeholder="Masukkan No HP">
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