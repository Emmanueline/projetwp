<?php get_header();?>

<!-- Contenu principal -->
<main role="main" class="container col-12">
    <div class="row">
        <div class="col-12 blog-main bg-light">
            <br>

            <div class="col-6">
                <!-- Boucle WordPress pour la liste des articles -->
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <?php if (!is_sticky()) : ?>
                        <div class="card bg-white border rounded-0" style="width: 30rem;">
                            <div class="blog-post card-body">
                                <h2 class="blog-post-title card-title"><?php the_title() ?></h2>
                                <p class="blog-post-meta"><?php the_date(); ?> par <a href="#" class="text-dark"><?php the_author() ?></a><a href="#"><?php the_category() ?></a></p>
                                <hr class="my-4">
                                <?php the_post_thumbnail('post-thumbnail', ['class' => 'card-img-top', 'alt' =>'', 'style' => 'height: auto;']); ?>
                                <div class="pb-4 mb-4"></div>
                                <div class="lead">
                                    <?php the_excerpt() ?>
                                </div>
                                <div class="pb-4 mb-1"></div>
                                <a class="btn btn-danger rounded-pill px-3" href="<?php the_permalink() ?>">Lire l'article complet </a>
                            </div>
                        </div>
                        <div class="pb-4 mb-4"></div>
                    <?php endif; ?>
                <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <!--Fin boucle WordPress -->

            <!-- Pagination -->
            <nav class="blog-pagination text-dark">
                <?php previous_posts_link('Articles Précédents'); ?>
                <?php next_posts_link('Articles Suivants'); ?>
            </nav>

        </div>

        <!-- Fin contenu principal -->

    </div><!-- /.row -->
</main><!-- /.container -->

<!-- Fin Contenu principal -->

<?php get_footer();?>
</body>

</html>