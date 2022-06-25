
<?php
    if(!empty($this->session->flashdata('info'))) {?>
        <div class="alert alert-success" role="alert"><?= $this->session->flashdata('info');?></div>
    <?php }
?>

<div class="row">
    <div class="col-md-12">
        <a href = "<?= base_url()?>obat/tambah_obat" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Obat</a>
    </div>
</div>

<br>

<div class="box">
<div class="box-header">
    <h3 class="box-title">Data Obat</h3>
</div>
<!-- /.box-header -->
<div class="box-body">
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Id Obat</th>
                <th>Id Jenis Obat</th>
                <th>Nama Obat</th>
                <th>Harga Obat</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>

            <?php
                foreach ($data as $row) {?>
                    <tr>
                        <td><?=$row->id_obat;?></td>
                        <td><?=$row->id_jenis_obat;?></td>
                        <td><?=$row->nama_obat;?></td>
                        <td><?=$row->harga_obat;?></td>
                        <td><?=$row->stok;?></td>
                        <td>
                            <a href="<?= base_url()?>obat/edit/<?= $row->id_obat;?>" class="btn btn-success btn-xs">EDIT</a>
                            <a href="<?= base_url()?>obat/hapus/<?= $row->id_obat;?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin Ingin Menghapus Data?')">HAPUS</a>
                        </td>
                    </tr>
                <?php }
            ?>
        
        </tbody>
    </table>
</div>
</div>
