<div class="col-md-12">
    <div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title"><?= $judul ?></h3>
    </div>

    <form method="post" action="<?= base_url()?>obat/simpan" class="form-horizontal">
        <div class="box-body">
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Id Obat</label>
            <div class="col-sm-10">
            <input type="text" name="id_obat" value="<?= $id_obat ?>" class="form-control" readonly>
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Id Jenis Obat</label>
            <div class="col-sm-10">
            <input type="text" name="id_jenis_obat" class="form-control" placeholder="Id Jenis Obat" required>
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Nama Obat</label>
            <div class="col-sm-10">
            <input type="text" name="nama_obat" class="form-control" placeholder="Nama Obat" required>
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Harga Obat</label>
            <div class="col-sm-10">
            <input type="text" name="harga_obat" class="form-control" placeholder="Harga Obat" required>
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Stok</label>
            <div class="col-sm-10">
            <input type="text" name="stok" class="form-control" placeholder="Stok" required>
            </div>
        </div>
        </div>

        <div class="box-footer">
            <a href="<?= base_url()?>obat" class="btn btn-warning">Cancel</a>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
    </form>
    </div>
</div>