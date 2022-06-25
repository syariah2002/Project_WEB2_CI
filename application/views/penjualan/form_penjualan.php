<div class="col-md-12">
    <div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title"><?= $judul ?></h3>
    </div>

    <form method="post" action="<?= base_url()?>penjualan/simpan" class="form-horizontal">
        <div class="box-body">
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Kode Transaksi</label>
            <div class="col-sm-10">
            <input type="text" name="kode_transaksi" value="<?= $kode_transaksi ?>" class="form-control" readonly>
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Id Pelanggan</label>

            <div class="col-sm-10">
            <input type="text" name="id_pelanggan" class="form-control" placeholder="Id Pelanggan" required>
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Id Jenis Obat</label>
            <div class="col-sm-10">
            <input type="text" name="id_jenis_obat" class="form-control" placeholder="Id Jenis Obat" required>
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Id Obat</label>
            <div class="col-sm-10">
            <input type="text" name="id_obat" class="form-control" placeholder="Id Obat" required>
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Id Pegawai</label>
            <div class="col-sm-10">
            <input type="text" name="id_pegawai" class="form-control" placeholder="Id Pegawai" required>
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Tanggal</label>
            <div class="col-sm-10">
            <input type="date" name="tanggal" class="form-control" placeholder="Tanggal" required>
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Jumlah Obat</label>
            <div class="col-sm-10">
            <input type="text" name="jumlah_obat" class="form-control" placeholder="Jumlah Obat" required>
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Total</label>
            <div class="col-sm-10">
            <input type="text" name="total" class="form-control" placeholder="Total" required>
            </div>
        </div>
        </div>

        <div class="box-footer">
            <a href="<?= base_url()?>pegawai" class="btn btn-warning">Cancel</a>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
    </div>
</div>