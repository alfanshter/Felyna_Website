<!DOCTYPE HTML>

<html>

<head>

    <title><?= $title; ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>" />

</head>

<body>

    <!-- header section -->
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

                </ul>
                <form class="d-flex">
                    <input class="form-control border-0 rounded-pill" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn-main rounded-pill btn btn-outline-success" type="submit">Search</button>
                    <button class="btn-main  btn btn-outline-success margin-right 4"><a class="nav-link" href="<?= base_url('admin'); ?>">Admin</a></button>
                </form>
            </div>
        </div>
    </nav>