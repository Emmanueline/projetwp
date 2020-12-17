<?php if ( post_password_required() ) { // Vérifie si les commentaires sont protégés par mot de passe
    return;
} ?>

    <!-- Si les commentaires sont acceptés !-->
<?php if (comments_open()) : ?>
    <!-- Formulaire avec du html personnalisé!-->
    <h3 class='title'>Ajouter un commentaire</h3>
    <div id="comments" class="form-row">

        <!-- Autres champs du formulaire!-->
        <div class="form-group col-md-6">
            <label for="inputName4" class="font-weight-bolder">Nom</label>
            <input type="name" class="form-control" id="inputName4" placeholder="Votre nom">
        </div>
        <div class="form-group col-md-6">
            <label for="inputEmail4" class="font-weight-bolder">Email</label>
            <input type="email" class="form-control" id="inputEmail4" placeholder="Votre email">
        </div>

        <!-- Contenu du commentaire!-->
        <div class="form-group col-md-12">
            <label for="exampleFormControlTextarea1" class="font-weight-bolder">Commentaire</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Votre commentaire"></textarea>
        </div>

        <!-- Checkbox de confirmation!-->
        <div class="form-group col-md-8">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                <small class="text-muted"><label class="form-check-label" for="invalidCheck">
                        En soumettant ce formulaire j'accepte que les informations saisies soient utilisées par RedLab pour m'envoyer des informations et/ou me recontacter.
                        Mes données personnelles ne seront jamais communiquées à des tiers. Pour révoquer ce consentement, consultez notre politique de confidentialité.
                    </label></small>
                <div class="invalid-feedback">
                    <p>Merci de valider avant d\'envoyer votre formulaire.</p>
                </div>
            </div>
        </div>
        <!-- Bouton de validation!-->
        <div  class='col-md-4'>
            <button class="btn btn-danger px-5 rounded-pill"type="submit">Envoyer</button>
        </div>


    </div>

    <?php if(get_comments_number() == 0) : ?>
        <div class="box mt-5">
            <p> Cet article n'a pas encore de commentaires </p>
        </div>
    <? endif ?>

    <?php wp_list_comments('type=comment&callback=mytheme_comment'); ?>

    <!-- Si les commentaires sont fermés !-->
<?php else : ?>
    <article class="message">
        <div class="message-body">
            <?php _e('Les commentaires sont fermés'); ?>
        </div>
    </article>
<?php endif; ?>