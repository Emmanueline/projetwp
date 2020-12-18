<?php get_header(); ?>

    <!-- Hero -->
    <header class="py-6 bg-image-full banner" style="background-image: url('https://cvanderc.chef2projet.digital/www/wordpress/wp-content/uploads/2020/12/iot.png">
        
    </header>

    <!-- Contenu principal -->
    <main role="main" class="container col-12">
        <div class="row">
            <div class="col-12 blog-main bg-light">


                <?php if (have_posts()) : ?>
                    <?php while (have_posts()) : the_post(); ?>
                        <div class="col-lg-8 mx-auto main"><style>.main { margin-top: -300px }</style>
                            <div class="card border-white mb-3 rounded-0" style="max-width: 50rem;">
                                <?php the_post_thumbnail('post-thumbnail', ['class' => 'card-img-top', 'style' => 'height: auto;']); ?>
                                <br><h1 class="mx-auto h1"><?php the_title() ?></h1><br>
                                <div class="card-body">
                                    <h5 class="card-subtitle mb-2 text-muted text-center"><?php the_date(); ?> - <a href="#" class="text-center"><?php the_author() ?></a> - <a href="#"><?php the_category() ?></a></h5>
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