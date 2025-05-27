<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container py-5">
    <div class="row">
        <div class="col-md-6 mb-4">
            <h2 class="text-primary">Hubungi Kami</h2>
            <p class="lead">Punya saran, pertanyaan, atau ingin kerja sama seputar pengelolaan koleksi buku dan komik?
                Kami siap mendengarkan!</p>

            <ul class="list-unstyled">
                <li><strong>Email:</strong> komik@bookmanager.com</li>
                <li><strong>WhatsApp:</strong> +62 812-3456-7890</li>
                <li><strong>Instagram:</strong> @komikcollection.id</li>
            </ul>

            <p>Jangan ragu untuk menghubungi kami kapan saja. Kami terbuka untuk kritik, saran, atau bahkan koleksi
                komik favoritmu!</p>
        </div>

        <div class="col-md-6">
            <h4 class="mb-3">Kirim Pesan</h4>
            <form>
                <div class="form-group mb-3">
                    <label for="name">Nama</label>
                    <input type="text" class="form-control" id="name" placeholder="Nama lengkap">
                </div>
                <div class="form-group mb-3">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Alamat email">
                </div>
                <div class="form-group mb-3">
                    <label for="message">Pesan</label>
                    <textarea class="form-control" id="message" rows="4"
                        placeholder="Tuliskan pesan Anda..."></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Kirim</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>