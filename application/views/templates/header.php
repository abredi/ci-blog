<html>
<head>
        <title>Crescent Technologies</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/main.css') ?>">
        <script src="<?php echo base_url('assets/js/jquery-3.4.0.min.js') ?>"></script>
        <script src="<?php echo base_url('assets/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
</head>
<body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#"><?php echo $brand; ?></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                        <ul class="navbar-nav">
                                <li class="nav-item active">
                                        <a class="nav-link" href="<?php echo site_url('news')?>">News <span class="sr-only">(current)</span></a>
                                </li>
                                <li class="nav-item">
                                        <a class="nav-link" href="<?php echo site_url('news/create')?>">Add News</a>
                                </li>
                                <li class="nav-item">
                                        <a class="nav-link" href="<?php echo site_url('news/slugs')?>">Tags</a>
                                </li>
                        </ul>
                </div>
        </nav>
        <div class="container">