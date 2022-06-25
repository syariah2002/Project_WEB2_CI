
<?php
    if(!empty($this->session->flashdata('info'))) {?>
        <div class="alert alert-success" role="alert"><?= $this->session->flashdata('info');?></div>
    <?php }
?>

<div class="row">
    <div class="col-md-12">
        <a href = "<?= base_url()?>jenis_obat/tambah_jenis_obat" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Jenis Obat</a>
    </div>
</div>

<br>

<div class="box">
<div class="box-header">
    <h3 class="box-title">Data Jenis Obat</h3>
</div>
<!-- /.box-header -->
<div class="box-body">
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Id Jenis Obat</th>
                <th>Jenis Obat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>

            <?php
                foreach ($data as $row) {?>
                    <tr>
                        <td><?=$row->id_jenis_obat;?></td>
                        <td><?=$row->jenis_obat;?></td>
                        <td>
                            <a href="<?= base_url()?>jenis_obat/edit/<?= $row->id_jenis_obat;?>" class="btn btn-success btn-xs">EDIT</a>
                            <a href="<?= base_url()?>jenis_obat/hapus/<?= $row->id_jenis_obat;?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin Ingin Menghapus Data?')">HAPUS</a>
                        </td>
                    </tr>
                <?php }
            ?>
        
        </tbody>
    </table>
</div>
</div>
