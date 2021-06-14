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
                        <h3>About</h3>
                    </div>
                </div>
                <div class="p-content py-3">
                    <p>
                        Founded in 2021, Felyna
                        has grown into one of the largest online technology
                        publications on the web. Our expertise in all things tech has
                        resulted in millions of visitors every month and hundreds of thousands
                        of fans on social media. We believe that technology is only as useful
                        as the one who uses it. Our aim is to equip readers like you with the
                        know-how to make the most of today's tech, explained in simple terms
                        that anyone can understand. We also encourage readers to use tech in
                        productive and meaningful ways.
                    </p>

                    <p>Not a tech expert yet? Every <a href="contactus.php">Felyna</a>
                        article will bring you one step closer.</p>

                </div>
            </div>

            <?= $this->endSection(); ?>