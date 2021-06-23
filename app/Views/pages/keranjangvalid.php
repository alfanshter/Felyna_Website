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
                        </div>
                    </div>
                    <div class="p-content py-3">
                        <center>
                            <h1 class="mt-5">Silahkan login terlebih dahulu</h1>
                            <a href="<?= base_url('admin/login') ?>" class="btn  btn-primary mt-5">Login</a><br><br>
                        </center>
                    </div>
                </div>
                <?= $this->endSection(); ?>