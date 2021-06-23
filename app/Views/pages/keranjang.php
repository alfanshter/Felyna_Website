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
                                    <th scope="col">hapus</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($produk as $a) : ?>
                                    <!-- untuk memanipulasi dari method post ke delete agar method delete berfungsi saat button delete di tekan -->

                                    <tr>
                                        <form action="/home/keranjang/<?= $a['id_barang']; ?>" method="POST" class="d-inline">
                                            <?= csrf_field(); ?>
                                            <input type="hidden" name="_method" value="DELETE">
                                            <th scope="row"><?= $i++; ?></th>
                                            <td><?= $a['nama_barang']; ?></td>
                                            <td><?= $a['harga_barang']; ?></td>
                                            <td> <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda yakin ?');">Delete</button>
                                            </td>
                                    </tr>

                                    </form>

                                <?php endforeach; ?>

                            </tbody>
                        </table>

                    </div>
                </div>
                <?= $this->endSection(); ?>