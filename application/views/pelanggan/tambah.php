<h2>Tambah Pelanggan</h2>

<form action="<?= base_url('index.php/pelanggan/simpan'); ?>" method="post">

    <div class="mb-3">
        <label>Nama</label>
        <input type="text" name="nama" class="form-control">
    </div>

    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control">
    </div>

    <div class="mb-3">
        <label>No HP</label>
        <input type="text" name="no_hp" class="form-control">
    </div>

    <div class="mb-3">
        <label>Username</label>
        <input type="text" name="username" class="form-control">
    </div>

    <div class="mb-3">
        <label>Password</label>
        <input type="password" name="password" class="form-control">
    </div>

    <button class="btn btn-success">
        Simpan
    </button>

</form>