<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h2>Daftar Orang</h2>
            <form action="" method="GET">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Masukkan kata kunci"
                        name="keyword" value="<?= esc($keyword ?? '') ?>">
                    <button class="btn btn-outline-secondary" type="submit">Search</button>
                </div>
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1 + (10 * ($pageSekarang - 1)); ?>
                    <?php foreach ($orang as $o) : ?>
                        <tr>
                            <td><?= $i++; ?></td>
                            <td><?= esc($o['name']); ?></td>
                            <td><?= esc($o['address']); ?></td>
                            <td><a href="#" class="btn btn-success">Detail</a></td>
                        </tr>
                    <?php endforeach; ?>

                    <?php if (empty($orang)) : ?>
                        <tr>
                            <td colspan="4" class="text-center">Data tidak ditemukan.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>

            <?= $pager->links('orang', 'default_full'); ?>

        </div>
    </div>
</div>

<?= $this->endSection(); ?>