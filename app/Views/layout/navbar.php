<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url('home'); ?>">Felyna</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?= base_url('home/backend'); ?>">Back-End</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('home/programming'); ?>">Programming</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('home/website'); ?>">Website</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="<?= base_url('home/frontend'); ?>">Front-end</a>
                </li>

                <li class="nav-item"> <span style="font-family: sans-serif"></span>
                    <a class="nav-link" href="<?= base_url('home/about'); ?>">About</a>
                </li>

                <li class="nav-item"> <span style="font-family: sans-serif"></span>
                    <a class="nav-link" href="<?= base_url('home/keranjang'); ?>">Keranjang</a>
                </li>

            </ul>
            <form class="d-flex">
                <input class="form-control border-0 rounded-pill" type="search" placeholder="Search" aria-label="Search">
                <button class="btn-main rounded-pill btn btn-outline-success" type="submit">Search</button>
                <button class="btn-main  btn btn-outline-success margin-right 4"><a class="nav-link" href="<?= base_url('admin'); ?>">Admin</a></button>
            </form>
        </div>
    </div>
</nav>