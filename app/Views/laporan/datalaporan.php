<div class="card">
<div class="card-header">
<h3 class="card-title"> 
    <a href="<?= base_url('laporan/tambah') ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Tambah</a>
</h3>
</div>
<!-- /.card-header -->
<div class="card-body">
<table id="example1" class="table table-bordered table-striped">
<thead>
    <tr>
        <th>No.</th>
        <th>judul laporan - deskripsi  laporan</th>
        <th>tgl laporan & status laporan</th>
        <th>Tgl Entry</th>
        <th style="width : 15%">Aksi</th>
    </tr>
</thead>
<tbody>
    <?php $no = 1; foreach ($laporan as $key => $value) { ?>
    <tr>
        <td><?= $no++; ?></td>
        <td><?= $value['judul_laporan007'] ?> - <?= $value['deskripsi_laporan007'] ?></td>
        <td><?= $value['tgl_laporan007'] ?> & <?= $value['status_laporan007'] ?></td>
        <td><?= $value['tgl_entry007'] ?></td>
        <td>
        <a href="<?= base_url('laporan/edit/'.$value['id_laporan007']) ?>" class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i></a> | 
        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus-data<?= $value['id_laporan007'] ?>">
        <i class="fas fa-trash"></i>
        </button> | 
        <button type="button" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#detail-data<?= $value['id_laporan007'] ?>">
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
<?php foreach ($laporan as $key => $value) { ?>
<div class="modal fade" id="hapus-data<?= $value['id_laporan007'] ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Hapus Data : <?= $value['deskripsi_laporan007'] ?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Yakin Ingin di Hapus !!!</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

              <a href="<?= base_url('laporan/delete/'.$value['id_laporan007']) ?>" class="btn btn-danger">Hapus</a>
              
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
</div>
<?php } ?>
<!-- /.modal -->

<!-- Detail -->
<?php foreach ($laporan as $key => $value) { ?>
<div class="modal fade" id="detail-data<?= $value['id_laporan007'] ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Detail Data : <?= $value['deskripsi_laporan007'] ?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <table class="table">
                    <tr>
                      <td>Judul Laporan</td>
                      <td>:</td>
                      <td><?= $value['judul_laporan007'] ?></td>
                    </tr>
                    <tr>
                      <td>Deskripsi Laporan</td>
                      <td>:</td>
                      <td><?= $value['deskripsi_laporan007'] ?></td>
                    </tr>

                    <tr>
                      <td>tanggal Laporan</td>
                      <td>:</td>
                      <td><?= $value['tgl_laporan007'] ?></td>
                    </tr>

                    <tr>
                      <td>Status Laporan</td>
                      <td>:</td>
                      <td><?= $value['status_laporan007'] ?></td>
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