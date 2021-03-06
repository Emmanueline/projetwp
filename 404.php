<?php get_header();?>
    <br>
    <main id="site-content" role="main">

        <div class="section-inner thin error404-content">

            <div class="jumbotron jumbotron-fluid text-center">

                <img src="https://cvanderc.chef2projet.digital/www/wordpress/wp-content/uploads/2020/12/page-inexistante.jpg">

                <h1 class="entry-title"><?php _e( 'Page Introuvable', 'redlab' ); ?></h1>

                <div class="intro-text"><p><?php _e( 'La page que vous cherchez n\'a pas pu être trouvée. Elle a peut-être été déplacée, renommée ou supprimée.', 'redlab' ); ?></p></div>

                <?php
                get_search_form(
                    array(
                        'label' => __( '404 not found', 'redlab' ),
                    )
                );
                ?>

                <div class="col-md-4 mx-auto">
                    <a href="<?php bloginfo('url') ?>"><br><button class="btn btn-danger px-5 rounded-pill">Retourner sur la page d'accueil</button></a>
                </div>

            </div>

        </div><!-- .section-inner -->

    </main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer();?>