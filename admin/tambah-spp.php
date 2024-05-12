<h5>Halaman Tambah Data SPP</h5>
<a href="?url=spp" class="btn btn-primary">Kembali</a>
<hr>
<form method="post" action="?url=proses-tambah-spp">
    <div class="form-groub mb-2">
        <label>Tahun</label>
        <input type="number" name="tahun" maxlength="4" class="form-control" required>
    </div>
    <div class="form-groub mb-2">
        <label>Nominal</label>
        <input type="number" name="nominal" maxlength="13" class="form-control" required>
    </div>
    <div class="form-group">
        <button type="sumbit" class="btn btn-success">Simpan</button>
        <button type="reset" class="btn btn-warning">Kosongkan</button>
    </div>
</form>