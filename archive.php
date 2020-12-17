<?php get_header();?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
        <div class="container blog-post border border-info p-5 mt-5 bg-white rounded" style="box-shadow: 5px 5px 5px lightgrey">
            <a href="<?php the_permalink() ?>"><h2 class="blog-post-title text-dark"><?php the_title() ?></h2></a>
            <p class="blog-post-meta"><?php the_date(); ?> par <a href="#"><?php the_author() ?></a></p>
            <?php the_excerpt(); ?>
            <a class="btn btn-primary bg-info border" href="<?php the_permalink() ?>">Lire l'article complet</a>
        </div>

    <?php endwhile; ?>
<?php endif; ?>

    <!-- Pagination -->
    <nav class="container blog-pagination">
        <div>
            <div>
                <?php previous_posts_link('Articles Précédents'); ?>
            </div>
            <div>
                <?php next_posts_link('Articles Suivants'); ?>
            </div>
        </div>
    </nav>

<?php get_footer();?>