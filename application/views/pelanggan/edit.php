<h2 class="mb-4">Edit Pelanggan</h2>

<form action="<?= base_url('index.php/pelanggan/update'); ?>" method="post">

    <input type="hidden"
           name="id_pelanggan"
           value="<?= $pelanggan->id_pelanggan; ?>">

    <div class="mb-3">

        <label>Nama</label>

        <input type="text"
               name="nama"
               class="form-control"
               value="<?= $pelanggan->nama; ?>"
               required>

    </div>

    <div class="mb-3">

        <label>Email</label>

        <input type="email"
               name="email"
               class="form-control"
               value="<?= $pelanggan->email; ?>"
               required>

    </div>

    <div class="mb-3">

        <label>No HP</label>

        <input type="text"
               name="no_hp"
               class="form-control"
               value="<?= $pelanggan->no_hp; ?>"
               required>

    </div>

    <div class="mb-3">

        <label>Username</label>

        <input type="text"
               name="username"
               class="form-control"
               value="<?= $pelanggan->username; ?>"
               required>

    </div>

    <div class="mb-3">

        <label>Password</label>

        <input type="text"
               name="password"
               class="form-control"
               value="<?= $pelanggan->password; ?>"
               required>

    </div>

    <button type="submit" class="btn btn-primary">
        Update Pelanggan
    </button>

</form>