<?php if ( post_password_required() ) { // Vérifie si les commentaires sont protégés par mot de passe
    return;
} ?>
<div id="comments" class="comments-area">
    <?php if ( have_comments() ) : // On vérifie s'il y a des commentaires en base ?>
        <h3 class="comments-title">
            <?php
            printf( _nx( '1 commentaire sur “%2$s”', '%1$s commentaires sur “%2$s”', get_comments_number(), 'Titre du commentaire'),
                number_format_i18n( get_comments_number() ), get_the_title() );
            // On affiche le titre des commentaires avec une fonction qui affiche le singulier ou le pluriel
            // Ainsi que le nombre de commentaires à côté du titre
            ?>
        </h3>
        <ul class="comment-list">
            <?php
            wp_list_comments( array(
                'short_ping'  => true,
                'avatar_size' => 50,
            ) );
            // fonction qui liste les commentaires ?>
        </ul>
    <?php endif; ?>
    <?php if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
        <p class="no-comments">
            <?php _e( 'Les commentaires sont fermés.' ); // Message par défaut si les commentaires sont fermés ?>
        </p>
    <?php endif; ?>
    <?php comment_form(); // affiche le formulaire de contact ?>
</div>