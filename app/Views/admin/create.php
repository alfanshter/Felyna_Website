<?= $this->extend('admin/layout/template-admin.php'); ?>

<?= $this->section('content'); ?>


<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3 h3admin">Form tambah</h2>
            <form action="/admin/save" method="POST">
                <?= csrf_field(); ?>
                <div class="row mb-3">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="nama">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="harga" name="harga">
                    </div>
                </div>
                <center>
                    <button type="submit" class="btn btn-primary">tambah</button>

                </center>
            </form>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>