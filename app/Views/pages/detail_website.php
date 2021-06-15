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
                    <table class="table table-success table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Nama</th>
                                <th scope="col">Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?= $produk['nama']; ?></td>
                                <td><?= $produk['harga']; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>



            <?= $this->endSection(); ?>