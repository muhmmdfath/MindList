<?= $this->extend('layout/templatelog'); ?>

<?= $this->section('content'); ?>

<main class="main-content" style="padding-left: 250px; margin-top: -80px;">
    <div class="card-container">
        <div class="card">
            <ion-icon name="book-outline"></ion-icon>
            <p>Mata Kuliah</p>
        </div>
        <div class="card">
            <ion-icon name="calendar-outline"></ion-icon>
            <p>Jadwal</p>
        </div>
        <div class="card">
            <ion-icon name="create-outline"></ion-icon>
            <p>Tugas</p>
        </div>
    </div>
    <div class="card-container">
        <div class="card">
            <ion-icon name="clipboard-outline"></ion-icon>
            <p>Belajar</p>
        </div>
        <div class="card">
            <ion-icon name="pencil-outline"></ion-icon>
            <p>To do List</p>
        </div>
    </div>
</main>

<?= $this->endSection('content'); ?>