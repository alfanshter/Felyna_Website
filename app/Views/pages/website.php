<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<div class="container">
    <div class="row">
        <div class="col">
            <h2>Jual Website</h2>
            <?php foreach ($produk as $a) : ?>
                <ul>
                    <li><?= $a['nama']; ?> </li>
                    <li><?= $a['harga']; ?></li>
                    <li><?= $a['database']; ?></li>
                </ul>

            <?php endforeach; ?>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>