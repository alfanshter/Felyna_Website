<?php $this->extend('admin/layout/template-admin'); ?>

<?php $this->section('content'); ?>
<!-- Container Fluid-->

<div class="container">
    <div class="row">
        <div class="col-lg-12 ">
            <!-- Content ---->
            <center>
                <h3 class="h3admin"><?= $produk['nama']; ?></h3><br>
                <img src="/assets/img/<?= $produk['foto']; ?>" alt="" class="gambar_web">
                <br>
            </center>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Penyimpanan</th>
                        <th scope="col">Database</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><?= $produk['nama']; ?></td>
                        <td>Rp.<?php echo number_format($produk['harga']); ?></td>
                        <td><?= $produk['penyimpanan']; ?></td>
                        <td><?= $produk['jenis_software']; ?></td>
                    </tr>
                </tbody>
            </table>

        </div>
    </div>
</div>

<?= $this->endSection(); ?>