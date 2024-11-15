<div class="card">
<div class="card-header">
<h3 class="card-title"> 
    <a href="<?= base_url('dosen/tambah') ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Tambah</a>
</h3>
</div>
<!-- /.card-header -->
<div class="card-body">
<table id="example1" class="table table-bordered table-striped">
<thead>
    <tr>
        <th>No.</th>
        <th>nidn - Nama Dosen</th>
        <th>Tempat & Tgl Lahir</th>
        <th>Alamat - pendidikan - Jurusan</th>
        <th>Tgl Entry</th>
        <th style="width : 15%">Aksi</th>
    </tr>
</thead>
<tbody>
    <?php $no = 1; foreach ($dosen as $key => $value) { ?>
    <tr>
        <td><?= $no++; ?></td>
        <td><?= $value['nidn007'] ?> - <?= $value['nama_dosen007'] ?></td>
        <td><?= $value['tempat_lahir007'] ?> & <?= $value['tgl_lahir007'] ?></td>
        <td><?= $value['alamat_dsn007'] ?> - <?= $value['pendidikan007'] ?> - <?= $value['jurusan007'] ?></td>
        <td><?= $value['tgl_entry007'] ?></td>
        <td>
        <a href="<?= base_url('dosen/edit/'.$value['id_dosen007']) ?>" class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i></a> | 
        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus-data<?= $value['id_dosen007'] ?>">
        <i class="fas fa-trash"></i>
        </button> | 
        <button type="button" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#detail-data<?= $value['id_dosen007'] ?>">
        <i class="fas fa-eye"></i>
        </button>
        </td>
    </tr>
    <?php } ?>
</tbody>  
</table>  
</div>
</div> 

<!-- Hapus -->
<?php foreach ($dosen as $key => $value) { ?>
<div class="modal fade" id="hapus-data<?= $value['id_dosen007'] ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Hapus Data : <?= $value['nama_dosen007'] ?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Yakin Ingin di Hapus !!!</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

              <a href="<?= base_url('dosen/delete/'.$value['id_dosen007']) ?>" class="btn btn-danger">Hapus</a>
              
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
</div>
<?php } ?>
<!-- /.modal -->

<!-- Detail -->
<?php foreach ($dosen as $key => $value) { ?>
<div class="modal fade" id="detail-data<?= $value['id_dosen007'] ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Detail Data : <?= $value['nama_dosen007'] ?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <table class="table">
                    <tr>
                      <td>NIDN</td>
                      <td>:</td>
                      <td><?= $value['nidn007'] ?></td>
                    </tr>
                    <tr>
                      <td>Nama Dosen</td>
                      <td>:</td>
                      <td><?= $value['nama_dosen007'] ?></td>
                    </tr>

                    <tr>
                      <td>Tempat Lahir</td>
                      <td>:</td>
                      <td><?= $value['tempat_lahir007'] ?></td>
                    </tr>

                    <tr>
                      <td>Tanggal Lahir</td>
                      <td>:</td>
                      <td><?= $value['tgl_lahir007'] ?></td>
                    </tr>
                    <tr>
                      <td>Alamat Dosen</td>
                      <td>:</td>
                      <td><?= $value['alamat_dsn007'] ?></td>
                    </tr>
                    <tr>
                      <td>Pendidikan</td>
                      <td>:</td>
                      <td><?= $value['pendidikan007'] ?></td>
                    </tr>
                    <tr>
                      <td>Jurusan</td>
                      <td>:</td>
                      <td><?= $value['jurusan007'] ?></td>
                    </tr>
              </table>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
</div>
<?php } ?>
<!-- /.modal -->