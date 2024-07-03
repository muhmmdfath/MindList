<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col about">
            <h1>Sekilas Tentang <br>MindList</h1>
            <h3>#BersiaplahUntukMasaDepan</h3><br>
            <p>
            Mindlist berawal dari tahun 2024 sebagai aplikasi student planner berbasis web yang dirancang untuk memudahkan manajemen akademis Anda. Aplikasi ini lahir dari kebutuhan untuk membantu siswa mengelola waktu dan materi pelajaran mereka dengan lebih efisien dalam dunia pendidikan yang semakin kompleks.
            <br><br>
            Kini, Mindlist menawarkan serangkaian fitur canggih yang memanfaatkan teknologi AI untuk memberikan pengalaman belajar yang lebih terintegrasi. Dengan fitur peringkas materi otomatis, Mindlist memungkinkan Anda untuk memahami konten dengan cepat dan efektif. Selain itu, pencarian jurnal akademik yang terintegrasi membantu Anda menemukan informasi relevan dengan mudah, mendukung proses penelitian dan belajar Anda. Pengaturan jadwal belajar yang intuitif memastikan Anda tetap terorganisir dan dapat mengelola waktu dengan efisien.
            <br><br>
            Mindlist dirancang tidak hanya untuk membantu siswa dalam kegiatan akademis sehari-hari, tetapi juga untuk mendukung mereka dalam mencapai kesuksesan jangka panjang. Dengan Mindlist, Anda dapat memaksimalkan potensi belajar Anda, tetap selangkah lebih maju dalam pendidikan, dan meraih masa depan yang gemilang.
            </p>
        </div>
        <div class="col about">
            <img src="<?= base_url('assets/kelompok.jpeg'); ?>" style="width:500px;height: 650px;;border-radius:20px;margin-left:50px;" alt="">
        </div>
    </div>
</div>

<?= $this->endSection('content'); ?>