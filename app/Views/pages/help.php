<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <h1 style="font-family:'Mindlist';color:#03302F;margin-top:50px;">Hai, ada yang bisa kami <br>bantu?</h1>
    <div class="search">
        <label for="">
            <ion-icon name="search-outline"></ion-icon>
            <input type="text" placeholder="Cari informasi disini">            
        </label>
    </div>
</div>

<?= $this->endSection('content'); ?>