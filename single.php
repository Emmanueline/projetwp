<?php get_header(); ?>


    <!-- Contenu principal -->
    <main role="main" class="container">
        <div class="row">
            <div class="col-md-8 blog-main">

                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <div class="card border-info mb-3" style="max-width: 50rem;">
                            <div class="card-header"><?php the_title() ?></div>
                            <div class="card-body text-info">
                                <h5 class="card-title"><?php the_date(); ?> par <a href="#"><?php the_author() ?></a></h5>
                                <?php the_post_thumbnail('post-thumbnail', ['class' => 'card-img-top', 'alt' =>'', 'style' => 'height: auto;']); ?>
                                <p class="card-text"><?php the_content() ?></p>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>

                <?php comments_template(); ?>

                <!-- Pagination -->
                <nav class="blog-pagination">
                    <?php previous_post_link('Article Précédent : %link'); ?>
                    <?php next_post_link('Article Suivant : %link'); ?>
                </nav>

            </div>
            <!-- Fin contenu principal -->
            <?php get_sidebar() ?>


        </div><!-- /.row -->

    </main><!-- /.container -->
    <!-- Fin Contenu principal -->


<?php get_footer(); ?>