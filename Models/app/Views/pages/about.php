<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container py-5">
    <div class="row align-items-center">
        <div class="col-md-6 mb-4">
            <img src="/img/komik.jpg" alt="Komik Shelf" class="img-fluid rounded shadow">
        </div>
        <div class="col-md-6">
            <h1 class="display-5 text-danger mb-3">Baca Komik</h1>
            <p class="lead">Selamat datang di <strong>Aplikasi Manajemen Komik</strong>, sebuah platform sederhana untuk
                mengelola koleksi komik favoritmu seperti Naruto, Boruto, dan lainnya.</p>
            <p>Aplikasi ini dibuat dengan <strong>CodeIgniter 4</strong> dan menyediakan fitur CRUD lengkap, di
                antaranya:</p>
            <ul>
                <li>📥 Tambah komik baru lengkap dengan cover, penulis, dan penerbit</li>
                <li>🔍 Lihat detail komik yang keren</li>
                <li>✏️ Edit informasi komik kapan saja</li>
                <li>🗑️ Hapus komik yang tidak dibutuhkan</li>
            </ul>
            <p>Aplikasi ini cocok untuk latihan pemrograman, tugas sekolah, atau bahkan menjadi sistem katalog koleksi
                pribadi bagi pecinta manga dan anime.</p>
            <a href="/books" class="btn btn-danger mt-3">Lihat Koleksi Komik</a>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>