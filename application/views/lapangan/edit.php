<h2 class="mb-4">Edit Lapangan</h2>

<div class="card shadow">
    <div class="card-body">

        <form action="<?= base_url('index.php/datalapangan/update'); ?>" method="post">

            <input type="hidden"
                   name="id_lapangan"
                   value="<?= $lapangan->id_lapangan ?>">

            <div class="mb-3">
                <label>Nama Lapangan</label>
                <input type="text"
                       name="nama_lapangan"
                       value="<?= $lapangan->nama_lapangan ?>"
                       class="form-control">
            </div>

            <div class="mb-3">
                <label>Jenis Lapangan</label>

                <select name="jenis_lapangan" class="form-control">

                    <option value="Sintetis"
                    <?= ($lapangan->jenis_lapangan == 'Sintetis') ? 'selected' : ''; ?>>
                        Sintetis
                    </option>

                    <option value="Vinyl"
                    <?= ($lapangan->jenis_lapangan == 'Vinyl') ? 'selected' : ''; ?>>
                        Vinyl
                    </option>

                    <option value="Rumput"
                    <?= ($lapangan->jenis_lapangan == 'Rumput') ? 'selected' : ''; ?>>
                        Rumput
                    </option>

                </select>
            </div>

            <div class="mb-3">
                <label>Harga Sewa</label>
                <input type="number"
                       name="harga_sewa"
                       value="<?= $lapangan->harga_sewa ?>"
                       class="form-control">
            </div>

            <select name="status" class="form-control">

                <option value="Tersedia"
                <?= ($lapangan->status=='Tersedia')?'selected':'' ?>>
                    Tersedia
                </option>

                <option value="Dibooking"
                <?= ($lapangan->status=='Dibooking')?'selected':'' ?>>
                    Dibooking
                </option>

                <option value="Maintenance"
                <?= ($lapangan->status=='Maintenance')?'selected':'' ?>>
                    Maintenance
                </option>

            </select>

            <button type="submit" class="btn btn-primary">
                Update
            </button>

        </form>

    </div>
</div>