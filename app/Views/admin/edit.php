<?= $this->extend('admin/layout/template-admin.php'); ?>

<?= $this->section('content'); ?>


<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3 h3admin">Form Edit</h2>
            <form action="/admin/update/<?= $produk['id']; ?>" method="POST">
                <?= csrf_field(); ?>
                <input type="hidden" name="slug" value="<?= $produk['slug']; ?>">
                <div class="row mb-3">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id="nama" name="nama" value="<?= (old('nama')) ? old('nama') :  $produk['nama'] ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('nama'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="harga" name="harga" value="<?= (old('harga')) ? old('harga') :  $produk['harga'] ?>">
                    </div>
                </div>
                <center>
                    <button type="submit" class="btn btn-primary">Edit Data</button>

                </center>
            </form>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>