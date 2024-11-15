<div class="card">
<div class="card-header">
<h3 class="card-title"> 
<?= $submenu; ?>
</h3>
</div>
<!-- /.card-header -->
<div class="card-body">
<?= form_open('mahasiswa/update/'.$mahasiswa['id_mahasiswa007']) ?>
    <div class="form-group row">
        <label for="nim" class="col-sm-2 col-form-label">NIM</label>
        <div class="col-sm-10">
            <input class="form-control" value="<?= $mahasiswa['nim007'] ?>" name="nim007" id="nim007" placeholder="Masukkan NIM">
        </div>
    </div>

    <div class="form-group row">
        <label for="nama_mhs007" class="col-sm-2 col-form-label">Nama Mahasiswa</label>
        <div class="col-sm-10">
            <input class="form-control" value="<?= $mahasiswa['nama_mhs007'] ?>"  name="nama_mhs007" id="nama_mhs007" placeholder="Masukkan Nama Mahasiswa">
        </div>
    </div>

    <div class="form-group row">
        <label for="tempat_lahir007" class="col-sm-2 col-form-label">Tempat & Tgl Lahir</label>
        <div class="col-sm-5">
            <input class="form-control" value="<?= $mahasiswa['tempat_lahir007'] ?>" name="tempat_lahir007" id="tempat_lahir" placeholder="Masukkan Tempat Lahir">
        </div>
        <div class="col-sm-5">
            <input type="date" value="<?= $mahasiswa['tgl_lahir007'] ?>" class="form-control" name="tgl_lahir007" id="tgl_lahir" placeholder="Masukkan Tanggal Lahir">
        </div>
    </div>

    <div class="form-group row">
        <label for="alamat007" class="col-sm-2 col-form-label">Alamat</label>
        <div class="col-sm-10">
            <textarea name="alamat007" class="form-control" cols="30"><?= $mahasiswa['alamat007'] ?></textarea>
        </div>
    </div>

    <div class="form-group row">
        <label for="nohp007" class="col-sm-2 col-form-label">No HP</label>
        <div class="col-sm-10">
            <input class="form-control" value="<?= $mahasiswa['nohp007'] ?>" name="nohp007" id="nohp" placeholder="Masukkan No HP">
        </div>
    </div>

    <div class="form-group row">
        <label for="jurusan007" class="col-sm-2 col-form-label">Jurusan</label>
        <div class="col-sm-10">
            <input class="form-control" value="<?= $mahasiswa['jurusan007'] ?>" name="jurusan007" id="jurusan" placeholder="Masukkan Jurusan">
        </div>
    </div>

    <div class="form-group row">
      <button type="submit" class="btn btn-warning btn-sm">Update</button>
      <button type="reset" class="btn btn-secondary btn-sm ml-2">Batal</button>
    </div>

<?= form_close() ?>
</div>
</div>  