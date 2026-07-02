<!DOCTYPE html>
<html>
<head>
    <title><?= $title; ?></title>

    <meta charset="utf-8">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        body{
            background:#f4f6f9;
        }

        .sidebar{
            width:250px;
            min-height:100vh;
            background:#198754;
            position:fixed;
            left:0;
            top:0;
        }

        .sidebar a{
            display:block;
            color:white;
            text-decoration:none;
            padding:15px 20px;
        }

        .sidebar a:hover{
            background:rgba(255,255,255,.2);
        }

        .content{
            margin-left:250px;
            padding:25px;
        }

    </style>
</head>

<body>

<div class="sidebar">

    <h3 class="text-center text-white py-4">
        FUTSALZONE
    </h3>

    <a href="<?= base_url('dashboard') ?>">🏠 Dashboard</a>
    <a href="<?= base_url('datalapangan') ?>">⚽ Data Lapangan</a>
    <a href="<?= base_url('pelanggan') ?>">👥 Data Pelanggan</a>
    <a href="<?= base_url('booking') ?>">📅 Booking</a>
    <a href="<?= base_url('pembayaran') ?>">💳 Pembayaran</a>

</div>

<div class="content">