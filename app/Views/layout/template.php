<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $title; ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="<?= base_url('/css.css'); ?>">
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top" style="background-color:#12BAA9 !important;">
      <a class="navbar-brand" href="#">
        <img src="<?= base_url('assets/logo4.png'); ?>" alt="Bootstrap" height="40">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
        <div class="navbar-nav" style="margin-right:50px;">
          <a class="nav-link active" aria-current="page" href="/">Beranda</a>
          <a class="nav-link" href="/about">Tentang Kami</a>
          <a class="nav-link" href="/help">Butuh Bantuan ?</a>
          <button class="tombol btn" style="background-color: white; color: #12BAA9 !important; " data-bs-toggle="modal" data-bs-target="#exampleModal"><b>Masuk</b></button>
        </div>
      </div>

  </nav>

  <!-- Modal Masuk -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <h1 class="modal-title fs-5" id="exampleModalLabel"><center>Masuk</center></h1>
          <form action="">
            <div class="login">
              <label for="email">Alamat Email</label>
              <input id="email" type="text">
            </div>
            <div class="login">
              <label for="passwd">Kata Sandi</label>
              <input id="passwd" type="password">
            </div>
            <button class="login btn btn-primary" type="button" style="margin-top:20px;">Masuk</button>
            <p class="login">Belum punya akun? <a href="#" data-bs-toggle="modal" data-bs-target="#daftarModal">Daftar</a></p>
            <a class="login" href="#">Saya tidak bisa Masuk</a>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Daftar -->
  <div class="modal fade" id="daftarModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-body">
          <h1 class="modal-title fs-5" id="exampleModalLabel"><center>Daftar</center></h1>
          <form action="">
            <div class="login">
              <label for="nama">Nama Lengkap</label>
              <input id="nama" type="text">
            </div>
            <div class="login">
              <label for="email">Alamat Email</label>
              <input id="email" type="text">
            </div>
            <div class="login">
              <label for="passwd">Kata Sandi</label>
              <input id="passwd" type="password">
            </div>
            <button class="login btn btn-primary" type="button" style="margin-top:20px;">Daftar</button>
            <p class="login">Sudah punya akun? <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Masuk</a></p>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Content -->
  <?= $this->renderSection('content'); ?>

  <!-- JavaScript -->
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
