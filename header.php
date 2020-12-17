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
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.5/examples/blog/blog.css" rel="stylesheet">
    <link href="http://wordpress/wp-content/themes/tpfinal/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
    <?php wp_head(); ?>
</head>

<body>
<div class="container">
    <!-- Partie haute du site, logo...  -->
    <header class="blog-header py-3 text-center">
        <a class="blog-header-logo text-dark" href="<?php bloginfo('url') ?>">
            <?php if (has_custom_logo()) : ?>
                <?php the_custom_logo(); ?>
            <?php else : ?>
                <h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
            <?php endif; ?></a>
    </header>
    <!-- Fin partie haute du site -->

    <!-- Menu -->

    <div class="bg-white">
        <nav class="container text-center navbar navbar-expand-lg navbar-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigations-02"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse justify-content-md-center" id="navigations-02">
                <div class="row w-100">
                    <div>
                        <?php wp_nav_menu(array(
                            'theme_location' => 'main',
                            'container' => 'ul',
                            'menu_class' => 'navbar-nav text-dark',
                        ));
                        ?>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <div class="pb-4 mb-4"></div>

    <!-- Fin Menu -->
</div>

<!-- Hero Header -->
<div class="container">
    <div class="jumbotron p-4 p-md-5 text-dark rounded bg-light text-center">
        <div class="col-md-6 px-0">
            <h1 class="display-4 font-italic"><?php the_title(); ?></h1>
            <p class="lead my-3">Découvrez notre super blog !</p>
            <p class="lead mb-0"><a href="<?php the_permalink() ?>" class="text-dark font-weight-bold">En savoir plus...</a></p>
        </div>
    </div>
</div>
<!-- Fin Hero Header -->