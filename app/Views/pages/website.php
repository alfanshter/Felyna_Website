<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<main id="main">


    <!-- main section -->
    <section class="hero py-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 shadow content">

                    <!-- Content ---->
                    <div class="row p-3">
                        <div class="col-sm-2 py-2">
                        </div>
                        <div class="col-sm-9 py-2">
                            <h3>Daftar Website</h3>
                        </div>
                    </div>
                    <div class="p-content py-3">
                        <table class="table table-success table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">Foto</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($produk as $a) : ?>
                                    <tr>
                                        <th scope="row"><?= $i++; ?></th>
                                        <td><?= $a['nama']; ?></td>
                                        <td><?= $a['harga']; ?></td>
                                        <td> <img class="gambar_web" alt="" src="<?= base_url($a['foto']); ?>" /></td>
                                    </tr>
                                <?php endforeach; ?>

                            </tbody>
                        </table>

                    </div>
                </div>
                <?= $this->endSection(); ?>