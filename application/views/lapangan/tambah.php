<h2 class="mb-4">Tambah Lapangan</h2>

<div class="card shadow">
    <div class="card-body">

        <form action="<?= base_url('index.php/datalapangan/simpan'); ?>" method="post">

            <div class="mb-3">
                <label>Nama Lapangan</label>
                <input type="text"
                       name="nama_lapangan"
                       class="form-control"
                       required>
            </div>

            <div class="mb-3">
                <label>Jenis Lapangan</label>
                <select name="jenis_lapangan" class="form-control">
                    <option>Sintetis</option>
                    <option>Vinyl</option>
                    <option>Rumput</option>
                </select>
            </div>

            <div class="mb-3">
                <label>Harga Sewa</label>
                <input type="number"
                       name="harga_sewa"
                       class="form-control"
                       required>
            </div>

            <select name="status" class="form-control">
                <option value="Tersedia">Tersedia</option>
                <option value="Dibooking">Dibooking</option>
                <option value="Maintenance">Maintenance</option>
            </select>

            <button type="submit"
                    class="btn btn-success">
                Simpan
            </button>

            <a href="<?= base_url('index.php/datalapangan'); ?>"
               class="btn btn-secondary">
                Kembali
            </a>

        </form>

    </div>
</div>