
<?php
    if(!empty($this->session->flashdata('info'))) {?>
        <div class="alert alert-success" role="alert"><?= $this->session->flashdata('info');?></div>
    <?php }
?>

<div class="row">
    <div class="col-md-12">
        <a href = "<?= base_url()?>pegawai/tambah_pegawai" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Pegawai</a>
    </div>
</div>

<br>

<div class="box">
<div class="box-header">
    <h3 class="box-title">Data Pegawai</h3>
</div>
<!-- /.box-header -->
<div class="box-body">
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Id Pegawai</th>
                <th>Nama Pegawai</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Tanggal Lahir</th>
                <th>No. Telpon</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>

            <?php
                foreach ($data as $row) {?>
                    <tr>
                        <td><?=$row->id_pegawai;?></td>
                        <td><?=$row->nama_pegawai;?></td>
                        <td><?=$row->jenis_kelamin;?></td>
                        <td><?=$row->alamat;?></td>
                        <td><?=$row->tanggal_lahir;?></td>
                        <td><?=$row->no_telp;?></td>
                        <td>
                            <a href="<?= base_url()?>pegawai/edit/<?= $row->id_pegawai;?>" class="btn btn-success btn-xs">EDIT</a>
                            <a href="<?= base_url()?>pegawai/hapus/<?= $row->id_pegawai;?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin Ingin Menghapus Data?')">HAPUS</a>
                        </td>
                    </tr>
                <?php }
            ?>
        
        </tbody>
    </table>
</div>
</div>
