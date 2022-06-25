<div class="col-md-12">
    <div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title"><?= $judul ?></h3>
    </div>

    <form method="post" action="<?= base_url()?>jenis_obat/update" class="form-horizontal">
        <div class="box-body">
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Id Jenis Obat</label>
            <div class="col-sm-10">
            <input type="text" name="id_jenis_obat" value="<?= $data['id_jenis_obat']; ?>" class="form-control" readonly>
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Jenis Obat</label>

            <div class="col-sm-10">
            <input type="text" name="jenis_obat" class="form-control" value="<?= $data['jenis_obat']; ?>" placeholder ="Jenis Obat" required>
            </div>
        </div>
        <div class="box-footer">
            <a href="<?= base_url()?>jenis_obat" class="btn btn-warning">Cancel</a>
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
    </div>
</div>