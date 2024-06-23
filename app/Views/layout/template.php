<!doctype html>
<html lang="en">
<l>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?= $title; ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="<?= base_url('/css.css'); ?>">
  </head>

  <body>


    <nav class="navbar navbar-expand-lg bg-body-tertiary" style="background-color:#12BAA9 !important;">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="<?= base_url('assets/logo4.png'); ?>" alt="Bootstrap" height="40">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link active" aria-current="page" href="/">Beranda</a>
            <a class="nav-link" href="/about">Tentang Kami</a>
            <a class="nav-link" href="#">Butuh Bantuan ?</a>
            <a class="tombol btn" style="background-color: white; color: #12BAA9 !important;" href="#">Masuk</a>
          </div>
        </div>
      </div>
      </div>
    </nav>


    <?= $this->renderSection('content'); ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>

</html>