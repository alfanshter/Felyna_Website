<?= $this->extend('admin/layout/template-admin.php'); ?>

<?= $this->section('content'); ?>


<div class="container">
    <div class="row">
        <div class="col-8">
            <h2 class="my-3 h3admin">Form tambah</h2>
            <form action="/admin/save" method="POST" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="row mb-3">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id="nama" name="nama" value="<?= old('nama'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('nama'); ?>
                        </div>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="harga" class="col-sm-2 col-form-label">Harga</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control  <?= ($validation->hasError('foto')) ? 'is-invalid' : ''; ?>" id="harga" name="harga" value="<?= old('harga'); ?>">
                        <div class="invalid-feedback">
                            <?= $validation->getError('harga'); ?>
                        </div>

                    </div>
                </div>

                <div class="row mb-3">
                    <label for="foto" class="col-sm-2 col-form-label">Foto</label>
                    <div class="col-sm-10">
                        <input class="form-control <?= ($validation->hasError('foto')) ? 'is-invalid' : ''; ?>" id="foto" type="file" name="foto">
                        <div class="invalid-feedback">
                            <?= $validation->getError('foto'); ?>
                        </div>

                    </div>
                </div>

                <div class="row mb-3">
                    <label for="foto" class="col-sm-2 col-form-label">Jenis Software</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="jenis_software">
                            <option value="Android">Android</option>
                            <option value="IOS">IOS</option>
                            <option value="Website">Website</option>
                            <option value="Multiplatform">Multiplatform</option>
                        </select>
                    </div>

                </div>

                <div class="row mb-3">
                    <label for="foto" class="col-sm-2 col-form-label">Jenis database</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="database">
                            <option value="Firebase">Firebase</option>
                            <option value="MongoDB">MongoDB</option>
                            <option value="Mysql">Mysql</option>
                            <option value="Multiplatform">Multiplatform</option>
                        </select>
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