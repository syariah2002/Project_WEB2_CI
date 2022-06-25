<div class="col-md-12">
    <div class="box box-info">
    <div class="box-header with-border">
        <h3 class="box-title"><?= $judul ?></h3>
    </div>

    <form method="post" action="<?= base_url()?>pegawai/update" class="form-horizontal">
        <div class="box-body">
        <div class="form-group">
            <label for="inputEmail3" class="col-sm-2 control-label">Id Pegawai</label>
            <div class="col-sm-10">
            <input type="text" name="id_pegawai" value="<?= $data['id_pegawai']; ?>" class="form-control" readonly>
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Nama Pegawai</label>

            <div class="col-sm-10">
            <input type="text" name="nama_pegawai" class="form-control" value="<?= $data['nama_pegawai']; ?>" placeholder ="Nama Pegawai" required>
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Jenis Kelamin</label>
            <div class="col-sm-10">
            <select name="jenis_kelamin" class="form-control" required>
                <?php
                    if ($data['jenis_kelamin'] == "L") {?>
                        <option value="L" selected>L</option>
                        <option value="P">P</option>
                    <?php } else {?>
                        <option value="L" >L</option>
                        <option value="P" selected>P</option>
                    <?php }
                ?>
            </select>
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Alamat</label>
            <div class="col-sm-10">
                <textarea name="alamat" class="form-control" cols="30" rows="5" required><?= $data['alamat']; ?></textarea>
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">Tanggal Lahir</label>

            <div class="col-sm-10">
            <input type="date" name="tanggal_lahir" class="form-control" placeholder="Tanggal Lahir" required value="<?= $data['tanggal_lahir']; ?>">
            </div>
        </div>

        <div class="form-group">
            <label for="inputPassword3" class="col-sm-2 control-label">No. Telpon</label>

            <div class="col-sm-10">
            <input type="text" name="no_telp" class="form-control" placeholder="No. Telpon" required value="<?= $data['no_telp']; ?>">
            </div>
        </div>
        </div>

        <div class="box-footer">
            <a href="<?= base_url()?>pegawai" class="btn btn-warning">Cancel</a>
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
    </div>
</div>