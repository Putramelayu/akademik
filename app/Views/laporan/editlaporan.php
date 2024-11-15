<div class="card">
<div class="card-header">
<h3 class="card-title"> 
<?= $submenu; ?>
</h3>
</div>
<!-- /.card-header -->
<div class="card-body">
<?= form_open('laporan/update/'.$laporan['id_laporan007']) ?>
    <div class="form-group row">
        <label for="judul_laporan007" class="col-sm-2 col-form-label">nidn</label>
        <div class="col-sm-10">
            <input class="form-control" value="<?= $laporan['judul_laporan007'] ?>" name="judul_laporan007" id="judul_laporan007" placeholder="Masukkan nidn">
        </div>
    </div>

    <div class="form-group row">
        <label for="deskripsi_laporan007" class="col-sm-2 col-form-label">deskripsi laporan</label>
        <div class="col-sm-10">
            <textarea name="deskripsi_laporan007" class="form-control" cols="30"><?= $laporan['deskripsi_laporan007'] ?></textarea>
        </div>
    </div>

    <div class="form-group row">
        <label for="status_laporan007" class="col-sm-2 col-form-label">Tempat & Tgl Lahir</label>
        <div class="col-sm-5">
            <input class="form-control" value="<?= $laporan['status_laporan007'] ?>" name="status_laporan007" id="status_laporan007" placeholder="Masukkan status laporan">
        </div>
        <div class="col-sm-5">
            <input type="date" value="<?= $laporan['tgl_laporan007'] ?>" class="form-control" name="tgl_laporan007" id="tgl_laporan007" placeholder="Masukkan Tanggal Lahir">
        </div>
    </div>



    <div class="form-group row">
      <button type="submit" class="btn btn-warning btn-sm">Update</button>
      <button type="reset" class="btn btn-secondary btn-sm ml-2">Batal</button>
    </div>

<?= form_close() ?>
</div>
</div>  