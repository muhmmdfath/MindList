<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="jumbotron jumbotron-fluid text-center">
  <div class="container">
    <h1 class="display-4 jumbcen" style="padding-top:100px;">MindList</h1>
    <p class="lead">Aplikasi student planner berbasis web yang dirancang untuk memudahkan manajemen akademis Anda. Mengintegrasikan teknologi AI canggih, Mindlist menawarkan fitur peringkas materi otomatis dan pencarian jurnal akademik, sehingga Anda dapat mengakses dan memahami informasi dengan cepat. Selain itu, Mindlist mempermudah pengaturan jadwal belajar, memastikan Anda tetap terorganisir dan dapat mengelola waktu dengan efisien.</p>
  </div>
</div>

<div class="container">
<div class="row workingspace">
    <div class="col">
      <img src="<?= base_url('assets/2.jpg'); ?>" alt="workingspace" class="img-fluid" style="width:500px;    border-radius: 20px;">
    </div>
    <div class="col">
      <h1 style="font-family: 'Mindlist';margin-top:25px;margin-bottom:5px;">VISI</h1>
      <p style="font-family: 'biasa';">Menjadi platform utama yang mendukung dan menginspirasi siswa dalam mengelola waktu dan tugas secara efisien, sehingga mereka dapat mencapai potensi akademik dan pribadi yang maksimal.<br><br>

      MindList bercita-cita untuk menjadi mitra terpercaya dalam setiap langkah perjalanan pendidikan siswa dengan menyediakan alat dan fitur yang tidak hanya memudahkan pengelolaan tugas sehari-hari, tetapi juga membantu dalam pengembangan keterampilan hidup yang penting.</p>
    </div>
</div>
</div>

<div class="container">
<div class="row workingspace" style="margin-top: 100px;padding-bottom: 100px;">
    <div class="col">
      <h1 style="font-family: 'Mindlist';margin-top:50px;margin-bottom:5px;margin-left:12px;">MISI</h1>
      <ol style="font-family: 'biasa';">
        <li>Mendukung Pengembangan Siswa Secara Holistik</li>
        <li>Meningkatkan Produktivitas dan Efektivitas Belajar</li>
        <li>Menjadi Sumber Inspirasi dan Motivasi</li>
        <li>Mengintegrasikan Teknologi Terkini</li>
        <li>Menjamin Keamanan dan Privasi Pengguna</li>
      </ol>
    </div>
    <div class="col">
      <img src="<?= base_url('assets/3.jpg'); ?>" alt="workingspace" class="img-fluid" style="width:500px;    border-radius: 20px;">
    </div>
</div>
</div>
 <?= $this->endSection('content'); ?>