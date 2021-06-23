<?php

use PhpParser\Node\Stmt\Echo_;
?>
<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>

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
                        <h3><?= $produk['nama']; ?></h3>
                    </div>
                </div>
                <a href="../category/programming.html">Programming</a>
                <div class="p-content py-3">
                    <center>
                        <img src="/assets/img/<?= $produk['foto']; ?>" alt="" class="gambar_web">
                    </center>

                </div>

                <div class="p-content py-3">
                    <form action="<?php echo base_url('home/addcart'); ?>" method="POST">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="slug" value="<?= $produk['slug']; ?>">
                        <input type="hidden" name="nama_barang" value="<?= $produk['nama']; ?>">
                        <input type="hidden" name="harga_barang" value="<?= $produk['harga']; ?>">
                        <input type="hidden" name="foto_barang" value="<?= $produk['foto']; ?>">
                        <input type="hidden" name="nama_database" value="<?= $produk['penyimpanan']; ?>">
                        <input type="hidden" name="jenis_software" value="<?= $produk['jenis_software']; ?>">

                        <table class="table table-success table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">Database</th>
                                    <th scope="col">Jenis Aplikasi</th>
                                    <th scope="col">Beli</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td id="nama" name="nama"><?= $produk['nama']; ?></td>
                                    <td>Rp.<?php echo number_format($produk['harga']); ?></td>
                                    <td><?= $produk['penyimpanan']; ?></td>
                                    <td><?= $produk['jenis_software']; ?></td>
                                    <td><button type="submit" class="btn btn-primary">Beli</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>



            <?= $this->endSection(); ?>