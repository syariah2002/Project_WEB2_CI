<?php
    if(!empty($this->session->flashdata('info'))) {?>
        <div class="alert alert-success" role="alert"><?= $this->session->flashdata('info');?></div>
    <?php }
?>

<div class="row">
    <div class="col-md-12">
        <a href = "<?= base_url()?>penjualan/tambah_penjualan" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Penjualan</a>
    </div>
</div>

<br>

<div class="box">
<div class="box-header">
    <h3 class="box-title">Data Penjualan</h3>
</div>
<!-- /.box-header -->
<div class="box-body">
    <table id="example1" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Kode Transaksi</th>
                <th>Id Pelanggan</th>
                <th>Id Jenis Obat</th>
                <th>Id Obat</th>
                <th>Id Pegawai</th>
                <th>Tanggal</th>
                <th>Jumlah Obat</th>
                <th>Total</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>

            <?php
                foreach ($data as $row) {?>
                    <tr>
                        <td><?=$row->kode_transaksi;?></td>
                        <td><?=$row->id_pelanggan;?></td>
                        <td><?=$row->id_jenis_obat;?></td>
                        <td><?=$row->id_obat;?></td>
                        <td><?=$row->id_pegawai;?></td>
                        <td><?=$row->tanggal;?></td>
                        <td><?=$row->jumlah_obat;?></td>
                        <td><?=$row->total;?></td>
                        <td>
                            <a href="<?= base_url()?>penjualan/edit/<?= $row->kode_transaksi;?>" class="btn btn-success btn-xs">EDIT</a>
                            <a href="<?= base_url()?>penjualan/hapus/<?= $row->kode_transaksi;?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin Ingin Menghapus Data?')">HAPUS</a>
                        </td>
                    </tr>
                <?php }
            ?>
        
        </tbody>
    </table>
</div>
</div>
