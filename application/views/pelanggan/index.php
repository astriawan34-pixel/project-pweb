<h2 class="mb-4">Data Pelanggan</h2>

<a href="<?= base_url('index.php/pelanggan/tambah'); ?>"
   class="btn btn-success mb-3">
   + Tambah Pelanggan
</a>

<div class="card shadow">
    <div class="card-body">

        <table class="table table-bordered table-hover">

            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>No HP</th>
                    <th>Username</th>
                    <th width="180">Aksi</th>
                </tr>
            </thead>

            <tbody>

            <?php $no=1; foreach($pelanggan as $row): ?>

                <tr>
                    <td><?= $no++; ?></td>
                    <td><?= $row->nama; ?></td>
                    <td><?= $row->email; ?></td>
                    <td><?= $row->no_hp; ?></td>
                    <td><?= $row->username; ?></td>

                    <td>

                        <a href="<?= base_url('index.php/pelanggan/edit/'.$row->id_pelanggan); ?>"
                           class="btn btn-warning btn-sm">
                           Edit
                        </a>

                        <a href="<?= base_url('index.php/pelanggan/hapus/'.$row->id_pelanggan) ?>"
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