<!doctype html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Myself">
    <title><?php bloginfo('name'); ?></title>

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.5/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@300;600&display=swap" rel="stylesheet">    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.5/examples/blog/blog.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
    <?php wp_head(); ?>
</head>

<body class="bg-light">
<div class="container col-12">


    <!-- navbar -->

    <nav class="navbar navbar-expand-lg navbar-white bg-white">
        <a class="navbar-brand navbar-brand" href="<?php bloginfo('url') ?>">
            <?php if (has_custom_logo()) : ?>
                <?php the_custom_logo(); ?>
            <?php else : ?>
                <h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
            <?php endif; ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto pull-sm-right">
                <li class="nav-item pull-right">
                    <a class="nav-link disabled" href="https://www.redlab.io/les-objets-connectes" tabindex="-1" aria-disabled="true">IOT</a>
                </li>
                <li class="nav-item pull-right">
                    <a class="nav-link disabled" href="https://www.redlab.io/le-big-data" tabindex="-1" aria-disabled="true">Big Data</a>
                </li>
                <li class="nav-item pull-right">
                    <a class="nav-link disabled" href="https://www.redlab.io/advanced-analytics" tabindex="-1" aria-disabled="true">Advanced Analytics</a>
                </li>
                <li class="nav-item pull-right">
                    <a class="nav-link disabled" href="https://www.redlab.io/la-blockchain" tabindex="-1" aria-disabled="true">Blockchain</a>
                </li>
                <li class="nav-item pull-right">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">L'agence</a>
                </li>
                <li class="nav-item dropdown active pull-right">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Le blog
                        <span class="sr-only">(current)</span></a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">IOT</a>
                        <a class="dropdown-item" href="#">Big Data</a>
                        <a class="dropdown-item" href="#">Advanced Analytics</a>
                        <a class="dropdown-item" href="#">Blockchain</a>
                    </div>
                </li>
                <li class="nav-item pull-right">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Contact</a>
                </li>
            </ul>

            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2 rounded-pill" type="search" placeholder="" aria-label="Rechercher">
                <button class="btn btn-outline-danger rounded-pill px-4 my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

    <!-- Hero -->
    <header class="py-6 bg-image-full banner" style="background-image: url('https://cvanderc.chef2projet.digital/www/wordpress/wp-content/uploads/2020/12/iot.png"></header>

</div>
