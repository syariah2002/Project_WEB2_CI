<div class="col-md-12">
    <div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title"><?= $judul ?></h3>
    </div>

    <form method="post" action="<?= base_url()?>pegawai/simpan" class="form-horizontal">
        <div class="box-body">
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Id Pegawai</label>
            <div class="col-sm-10">
            <input type="text" name="id_pegawai" value="<?= $id_pegawai ?>" class="form-control" readonly>
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Nama Pegawai</label>

            <div class="col-sm-10">
            <input type="text" name="nama_pegawai" class="form-control" placeholder="Nama Pegawai" required>
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Jenis Kelamin</label>
            <div class="col-sm-10">
            <select name="jenis_kelamin" class="form-control" required>
                <option value="">- Pilih Jenis Kelamin</option>
                <option value="L">L</option>
                <option value="P">P</option>
            </select>
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Alamat</label>
            <div class="col-sm-10">
                <textarea name="alamat" class="form-control" cols="30" rows="5" required></textarea>
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Tanggal Lahir</label>

            <div class="col-sm-10">
            <input type="date" name="tanggal_lahir" class="form-control" placeholder="Tanggal Lahir" required>
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">No. Telpon</label>

            <div class="col-sm-10">
            <input type="text" name="no_telp" class="form-control" placeholder="No. Telpon" required>
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