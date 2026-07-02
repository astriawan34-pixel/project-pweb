<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Pelanggan</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">
</head>
<body>

<div class="container mt-4">

    <h2 class="mb-4">
        Dashboard Pelanggan
    </h2>

    <div class="row">

        <?php foreach($lapangan as $l): ?>

        <div class="col-md-4 mb-3">

            <div class="card shadow">

                <div class="card-body">

                    <h5>
                        <?= $l->nama_lapangan ?>
                    </h5>

                    <p>
                        Jenis:
                        <?= $l->jenis_lapangan ?>
                    </p>

                    <p>
                        Rp <?= number_format($l->harga_sewa) ?>
                        / Jam
                    </p>

                    <a href="#"
                       class="btn btn-success">
                       Booking
                    </a>

                </div>

            </div>

        </div>

        <?php endforeach; ?>

    </div>

</div>

</body>
</html>