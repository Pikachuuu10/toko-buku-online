<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Admin toko Buku Online</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
        crossorigin="anonymous" />
    <link rel="stylesheet" href="<?= base_url() ?>CSS/style.css" />
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Admin</h2>
            </div>
            <div class="col">
                <a href="<?= base_url('logout') ?>" class="btn btn-secondary">Logout</a>
            </div>
        </div>
        <div class="row">
            <div class="row-3">
                <ul>
                    <li>
                        <a href="<?= base_url('admin/dashboard') ?>" class="">Dashboard</a>
                    </li>
                    <li>
                        <a href="<?= base_url('admin/daftar-buku') ?>" class="">Daftar Buku</a>
                    </li>
                    <li>
                        <a href="<?= base_url('admin/transaksi') ?>" class="">Transaksi</a>
                    </li>
                    <li>
                        <a href="<?= base_url('admin/pelanggan') ?>" class="">Pelanggan</a>
                    </li>
                </ul>
            </div>
            <div class="row-9">
                <?= $this->renderSection('main'); ?>
            </div>
        </div>
    </div>

    <footer class="bg-success text text-white py-3 text text-center">
        <div class="container">
            Copyright 2024. Toko buku online kelas C. All Rights Reserved
        </div>
    </footer>


    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>