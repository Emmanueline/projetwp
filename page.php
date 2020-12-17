<?php get_header();?>

<!-- Contenu principal -->
<main role="main" class="container col-12">
    <div class="row">
        <div class="col-md-8 blog-main">
            <br>
            <h3 class="pb-4 mb-4 font-italic border-bottom">En direct de notre blog...</h3>

            <!-- Boucle WordPress pour la liste des articles -->
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php if (!is_sticky()) : ?>
                    <div class="blog-post">
                        <h2 class="blog-post-title"><?php the_title() ?></h2>
                        <p class="blog-post-meta"><?php the_date(); ?> par <a href="#"><?php the_author() ?></a></p>
                        <?php the_post_thumbnail(); ?><br /><?php the_excerpt() ?>
                        <a class="btn btn-primary bg-info" href="<?php the_permalink() ?>"> Lire l'article complet </a>
                    </div>
                <?php endif; ?>
            <?php endwhile;
            else : ?>
                <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
            <?php endif; ?>
            <!--Fin boucle WordPress -->

            <!-- Pagination -->
            <nav class="blog-pagination">
                <?php previous_posts_link('Articles précédents'); ?>
                <?php next_posts_link('Articles suivants'); ?>
            </nav>

        </div>

        <!-- Fin contenu principal -->

        <?php get_sidebar() ?>

    </div><!-- /.row -->
</main><!-- /.container -->

<!-- Fin Contenu principal -->

<?php get_footer();?>
</body>

</html>