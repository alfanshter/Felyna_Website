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
    <?= $this->include('layout/navbar'); ?>


    <!-- BODY -->
    <?php $this->renderSection('content'); ?>


    <!-- footer section -->
    <footer class="footer py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <a class="footer-logo" href="#">Website</a>
                    <p>Website ini dibuat guna memenuhi tugas pemrograman aplikasi berbasis web</p>
                </div>
                <div class="col-md-4">
                    <h4>Usefull links</h4>
                    <ul>
                        <li>
                            <a class="nav-link" href="index.php">
                                Home
                            </a>
                        </li>

                        <li>
                            <a class="nav-link" href="page/terms.html">
                                Terms of Service
                            </a>
                        </li>

                        <li>
                            <a class="nav-link" href="page/privacy.html">
                                Privacy
                            </a>
                        </li>

                        <li>
                            <a class="nav-link" href="page/contactus.php">
                                Contact Us
                            </a>
                        </li>

                        <li>
                            <a class="nav-link" href="#here-newsletter">
                                Newsletter
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <a id="here-newsletter" href="#"></a>
                    <h4>Newsletter</h4>
                    <form class="d-flex">
                        <input class="form-control border-0 rounded-pill" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn-main rounded-pill btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>

            <div class="w-100 text-center credits">
                <p>CopyRight
                    &copy; <a>Felina Amelia</a> 2021.
                </p>
            </div>
        </div>
    </footer>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>