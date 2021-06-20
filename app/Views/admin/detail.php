<?php $this->extend('admin/layout/template-admin'); ?>

<?php $this->section('content'); ?>
<!-- Container Fluid-->

<div class="container">
    <div class="row">
        <div class="col-lg-12 ">
            <!-- Content ---->
            <div class="row p-3">
                <div class="col-sm-2 py-2">
                </div>
                <div class="col-sm-9 py-2">

                    <center>
                        <h3 class="h3admin"><?= $produk['nama']; ?></h3><br>
                        <img src="/assets/img/<?= $produk['foto']; ?>" alt="" class="gambar_web">
                        <br>
                        <h2 class="h3admin"><?= $produk['harga']; ?></h2>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>