<div class="card">
<div class="card-header">
<h3 class="card-title"> 
    <a href="<?= base_url('mahasiswa/tambah') ?>" class="btn btn-primary btn-sm"><i class="fas fa-plus"></i> Tambah</a>
</h3>
</div>
<!-- /.card-header -->
<div class="card-body">
<table id="example1" class="table table-bordered table-striped">
<thead>
    <tr>
        <th>No.</th>
        <th>NIM - Nama Mahasiswa</th>
        <th>Tempat & Tgl Lahir</th>
        <th>Alamat - No HP - Jurusan</th>
        <th>Tgl Entry</th>
        <th style="width : 15%">Aksi</th>
    </tr>
</thead>
<tbody>
    <?php $no = 1; foreach ($mahasiswa as $key => $value) { ?>
    <tr>
        <td><?= $no++; ?></td>
        <td><?= $value['nim007'] ?> - <?= $value['nama_mhs007'] ?></td>
        <td><?= $value['tempat_lahir007'] ?> & <?= $value['tgl_lahir007'] ?></td>
        <td><?= $value['alamat007'] ?> - <?= $value['nohp007'] ?> - <?= $value['jurusan007'] ?></td>
        <td><?= $value['tgl_entry007'] ?></td>
        <td>
        <a href="<?= base_url('mahasiswa/edit/'.$value['id_mahasiswa007']) ?>" class="btn btn-warning btn-sm"><i class="fas fa-pencil-alt"></i></a> | 
        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus-data<?= $value['id_mahasiswa007'] ?>">
        <i class="fas fa-trash"></i>
        </button> | 
        <button type="button" class="btn btn-secondary btn-sm" data-toggle="modal" data-target="#detail-data<?= $value['id_mahasiswa007'] ?>">
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
<?php foreach ($mahasiswa as $key => $value) { ?>
<div class="modal fade" id="hapus-data<?= $value['id_mahasiswa007'] ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Hapus Data : <?= $value['nama_mhs007'] ?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Yakin Ingin di Hapus !!!</p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>

              <a href="<?= base_url('mahasiswa/delete/'.$value['id_mahasiswa007']) ?>" class="btn btn-danger">Hapus</a>
              
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
</div>
<?php } ?>
<!-- /.modal -->

<!-- Detail -->
<?php foreach ($mahasiswa as $key => $value) { ?>
<div class="modal fade" id="detail-data<?= $value['id_mahasiswa007'] ?>">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Detail Data : <?= $value['nama_mhs007'] ?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <table class="table">
                    <tr>
                      <td>NIM</td>
                      <td>:</td>
                      <td><?= $value['nim007'] ?></td>
                    </tr>
                    <tr>
                      <td>Nama Mahasiswa</td>
                      <td>:</td>
                      <td><?= $value['nama_mhs007'] ?></td>
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
                      <td>Alamat</td>
                      <td>:</td>
                      <td><?= $value['alamat007'] ?></td>
                    </tr>
                    <tr>
                      <td>No HP</td>
                      <td>:</td>
                      <td><?= $value['nohp007'] ?></td>
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