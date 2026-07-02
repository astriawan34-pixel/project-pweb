<h2 class="mb-4">Data Lapangan</h2>

<a href="<?= base_url('index.php/datalapangan/tambah'); ?>" 
   class="btn btn-success mb-3">
   + Tambah Lapangan
</a>

<div class="card shadow">
    <div class="card-body">

        <table class="table table-bordered table-hover">

            <thead class="table-dark text-center">
                <tr>
                    <th>No</th>
                    <th>Nama Lapangan</th>
                    <th>Jenis Lapangan</th>
                    <th>Harga Sewa</th>
                    <th>Status</th>
                    <th width="180">Aksi</th>
                </tr>
            </thead>

            <tbody>

                <?php
                $no = 1;
                foreach($lapangan as $row) :
                ?>

                <tr>
                    <td><?= $no++; ?></td>

                    <td><?= $row->nama_lapangan; ?></td>

                    <td><?= $row->jenis_lapangan; ?></td>

                    <td>
                        Rp <?= number_format($row->harga_sewa,0,',','.'); ?>
                    </td>

                    <td>

                    <?php if($row->status=='Tersedia'): ?>

                        <span class="badge bg-success">
                            Tersedia
                        </span>

                    <?php elseif($row->status=='Dibooking'): ?>

                        <span class="badge bg-warning text-dark">
                            Dibooking
                        </span>

                    <?php else: ?>

                        <span class="badge bg-danger">
                            Maintenance
                        </span>

                    <?php endif; ?>

                    </td>

                    <td class="text-center">

                        <a href="<?= base_url('index.php/datalapangan/edit/'.$row->id_lapangan); ?>"
                            class="btn btn-warning btn-sm">
                            Edit
                        </a>

                        <a href="<?= base_url('index.php/datalapangan/hapus/'.$row->id_lapangan) ?>"
                        class="btn btn-danger btn-sm btn-hapus">
                        Hapus
                        </a>

                    </td>

                </tr>

                <?php endforeach; ?>

            </tbody>

        </table>

    </div>
</div>