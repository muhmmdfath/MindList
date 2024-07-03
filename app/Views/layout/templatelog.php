<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title; ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('/css.css'); ?>">
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top" style="background-color:#12BAA9 !important;">

        <!-- Navbar Brand (Kiri) -->
        <a class="navbar-brand" href="#">
            <img src="<?= base_url('assets/logo4.png'); ?>" alt="Bootstrap" height="40">
        </a>

        <!-- Toggler untuk mobile -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar Items (Kanan) -->
        <div class="collapse navbar-collapse justify-content-end ms-auto" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="/">Beranda</a>
                <a class="nav-link" href="/about">Tentang Kami</a>
                <a class="nav-link" href="/help">Butuh Bantuan ?</a>
                <a class="nav-link" href="#">Notifikasi</a>
            </div>
        </div>

        <!-- Icon Pengguna -->
        <a href="">
            <span class="icon ms-auto">
                <ion-icon style="color:black;font-size:25px;padding-top:8px;padding-right:80px;"
                    name="person-outline"></ion-icon>
            </span>
        </a>

</nav>



    <div class="containerside">
    <div class="navigation">
        <ul>
            <li>
                <a href="">
                    <span class="icon">
                        <ion-icon name="folder-outline"></ion-icon>
                    </span>
                    <span class="title">Dashboard</span>
                </a>
            </li>

            <li>
                <a href="/manage">
                    <span class="icon">
                        <ion-icon name="time-outline"></ion-icon>
                    </span>
                    <span class="title">Manajemen</span>
                </a>
            </li>

            <li>
                <a href="">
                    <span class="icon">
                        <ion-icon name="people-outline"></ion-icon>
                    </span>
                    <span class="title">Kelompok</span>
                </a>
            </li>

            <li>
                <a href="">
                    <span class="icon">
                        <ion-icon name="bar-chart-outline"></ion-icon>
                    </span>
                    <span class="title">Pencapaian</span>
                </a>
            </li>

            <li>
                <a href="">
                    <span class="icon">
                        <ion-icon name="calendar-clear-outline"></ion-icon>
                    </span>
                    <span class="title">kalender</span>
                </a>
            </li>

            <li>
                <a href="">
                    <span class="icon">
                        <ion-icon name="extension-puzzle-outline"></ion-icon>
                    </span>
                    <span class="title">Pendukung</span>
                </a>
            </li>

            <li>
                <a href="">
                    <span class="icon">
                        <ion-icon name="log-out-outline"></ion-icon>
                    </span>
                    <span class="title">Keluar</span>
                </a>
            </li>
        </ul>
    </div>
</div>



    <!-- Main Content -->
    <div class="main-content">
        <?= $this->renderSection('content'); ?>
    </div>

    <!-- JavaScript -->
    <script src="<?= base_url('/main.js') ?>"></script>
    <script type="module"
        src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule
        src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>