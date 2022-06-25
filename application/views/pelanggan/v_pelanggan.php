
<?php
    if(!empty($this->session->flashdata('info'))) {?>
        <div class="alert alert-success" role="alert"><?= $this->session->flashdata('info');?></div>
    <?php }
?>

<div class="row">
    <div class="col-md-12">
        <a href = "<?= base_url()?>pelanggan/tambah_pelanggan" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Pelanggan</a>
    </div>
</div>

<br>

<div class="box">
<div class="box-header">
    <h3 class="box-title">Data Pelanggan</h3>
</div>
<!-- /.box-header -->
<div class="box-body">
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Id Pelanggan</th>
                <th>Nama Pelanggan</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>

            <?php
                foreach ($data as $row) {?>
                    <tr>
                        <td><?=$row->id_pelanggan;?></td>
                        <td><?=$row->nama_pelanggan;?></td>
                        <td><?=$row->jenis_kelamin;?></td>
                        <td><?=$row->alamat;?></td>
                        <td>
                            <a href="<?= base_url()?>pelanggan/edit/<?= $row->id_pelanggan;?>" class="btn btn-success btn-xs">EDIT</a>
                            <a href="<?= base_url()?>pelanggan/hapus/<?= $row->id_pelanggan;?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin Ingin Menghapus Data?')">HAPUS</a>
                        </td>
                    </tr>
                <?php }
            ?>
        
        </tbody>
    </table>
</div>
</div>
