<?php get_header(); ?>


    <!-- Contenu principal -->
    <main role="main" class="container col-12">
        <div class="row">
            <div class="col-12 blog-main bg-light">


                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <div class="col-12 col-lg-8 mx-auto">
                            <div class="card border-white mb-3 rounded-0" style="max-width: 50rem;">
                                <div class="card-header"><?php the_title() ?></div>
                                <?php the_post_thumbnail('post-thumbnail', ['class' => 'card-img-top', 'alt' =>'', 'style' => 'height: auto;']); ?>
                                <div class="card-body">
                                    <h5 class="card-title"><?php the_date(); ?> - <a href="#"><?php the_author() ?></a><a href="#"><?php the_category() ?></a></h5>
                                    <p class="card-text"><?php the_content() ?></p>
                                    <br>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
            <div class="col-12 col-lg-8 mx-auto">
                <div class="card border-white mb-3 rounded-0" style="max-width: 50rem;">
                    <div class="card-body">
                        <?php comments_template(); ?>

                        <!-- Pagination -->
                        <nav class="blog-pagination">
                            <?php previous_post_link('Article Précédent : %link'); ?>
                            <?php next_post_link('Article Suivant : %link'); ?>
                        </nav>
                    </div>
                </div>
            </div>


            <!-- Fin contenu principal -->

        </div><!-- /.row -->

    </main><!-- /.container -->
    <!-- Fin Contenu principal -->


<?php get_footer(); ?>