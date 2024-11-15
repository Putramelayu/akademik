<div class="card">
<div class="card-header">
<h3 class="card-title"> 
<?= $submenu; ?>
</h3>
</div>
<!-- /.card-header -->
<div class="card-body">
<?= form_open('laporan/simpan') ?>
    <div class="form-group row">
        <label for="judul_laporan007" class="col-sm-2 col-form-label">judul laporan</label>
        <div class="col-sm-10">
            <input class="form-control" name="judul_laporan007" id="judul_laporan007" placeholder="Masukkan judul  laporan">
        </div>
    </div>

    <div class="form-group row">
        <label for="deskripsi_laporan007" class="col-sm-2 col-form-label">Deskripsi Laporan</label>
        <div class="col-sm-10">
            <textarea name="deskripsi_laporan007" class="form-control" cols="30"></textarea>
        </div>
    </div>

    <div class="form-group row">
        <label for="status_laporan007" class="col-sm-2 col-form-label">status & tgl Laporan</label>
        <div class="col-sm-5">
            <input class="form-control" name="status_laporan007" id="status_laporan007" placeholder="Masukkan status laporan">
        </div>
        <div class="col-sm-5">
            <input type="date" class="form-control" name="tgl_laporan007" id="tgl_laporan007" placeholder="Masukkan Tanggal Laporan">
        </div>
    </div>

    

    <div class="form-group row">
      <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
      <button type="reset" class="btn btn-secondary btn-sm ml-2">Batal</button>
    </div>

<?= form_close() ?>
</div>
</div>  