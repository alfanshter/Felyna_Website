<?= $this->extend('admin/layout/template-admin'); ?>

<?= $this->section('content'); ?>

<div class="container-fluid" id="container-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <div class="card mb-4">
                <div class="card">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h3 class="m-0 font-weight-bold text-primary">Daftar Website</h3>
                        <?php if (session()->getFlashdata('pesan')) : ?>
                            <div class="alert alert-success" role="alert">
                                <?= session()->getFlashdata('pesan'); ?>
                            </div>
                        <?php endif; ?>

                        <a href="<?= base_url('admin/create') ?>" class="btn btn-sm btn-primary"><i class="fas fa-plus"></i>Add Data</a>
                    </div>
                </div>
                <div class="table-responsive p-3">
                    <table class="table align-items-center table-flush table-hover" id="dataTableHover">
                        <thead class="thead-light">
                            <th>No</th>
                            <th>Nama Website</th>
                            <th>Harga</th>
                            <th>Detail</th>
                        </thead>
                        <tbody>
                            <?= $i = 1; ?>
                            <?php foreach ($produk as $produks) : ?>
                                <tr>
                                    <td><?= $i++; ?></td>
                                    <td><?= $produks['nama']; ?></td>
                                    <td><?= $produks['harga']; ?></td>
                                    <td><a href="/admin/detail/<?= $produks['slug']; ?>" class="btn btn-primary">Detail</a></td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>