<html>

<head>
        <title>Crescent Technologies</title>
        <link rel="shortcut icon" href="<?php echo base_url('assets/img/favicon.png') ?>" type="image/x-icon">
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/main.css') ?>">
        <script src="<?php echo base_url('assets/js/jquery-3.4.0.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
</head>

<body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand py-0" href="#">
                        <img class="" src="<?php echo base_url('assets/img/logo.png') ?>" alt="" width="72" height="72">
                        <?php echo $brand; ?></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                                <?php if (isset($_SESSION['is_logged_in'])) { ?>
                                        <li class="nav-item active">
                                                <a class="nav-link" href="<?php echo site_url('news') ?>">News <span class="sr-only">(current)</span></a>
                                        </li>
                                        <li class="nav-item">
                                                <a class="nav-link" href="<?php echo site_url('news/create') ?>">Add News</a>
                                        </li>
                                        <li class="nav-item">
                                                <a class="nav-link" href="<?php echo site_url('news/slugs') ?>">Tags</a>
                                        </li>
                                        <li class="nav-item">
                                                <a class="nav-link" href="<?php echo  site_url('auth/logout') ?>">Log out</a>
                                        </li>
                                <?php } else { ?>
                                        <li class="nav-item">
                                                <a class="nav-link" href="<?php echo site_url('auth/login') ?>">Login</a>
                                        </li>
                                        <li class="nav-item">
                                                <a class="nav-link" href="<?php echo site_url('auth/signup') ?>">Sign up</a>
                                        </li>
                                <?php } ?>

                        </ul>
                </div>
        </nav>
        <div class="container">