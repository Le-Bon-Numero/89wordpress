<?php /* Ce fichier est le fichier permettant d'afficher un article de post-type "Réalisations" (notre post-type personnalisé)
Il se substitue au fichier par défaut single.php dans le cas d'un article de type "Réalisations" */ ?>

<?php require_once('partials/header.php') ?>

<?php get_image_header() ?>

<h1 class="page-title title-bar" >Par <?= get_field('realisation_author') ?></h1>

<article >
    <h3 class="post-date text-medium-section"><?= get_the_date(); ?></h3>    
   
    <!-- On lance une boucle pour afficher les images et descriptions de nos réalisations,
    correspondant aux champs ACF que l'on a définis. -->
    <?php
    for ($i = 1; $i < 4; $i++) {
        if (get_field('realisation_image_'.$i) && get_field('realisation_description_'.$i)) { ?>
            
        <section class="realisation-part">
            <div class="text-medium-section realisation-part-inner">
                <div class="editor-content">
                    <?= get_field('realisation_description_'.$i) ?>
                </div>
                <div class="illustration">
                    <img 
                    src="<?= get_field('realisation_image_'.$i)['sizes']['medium_large'] ?>" 
                    alt="<?= get_field('realisation_image_'.$i)['alt'] ?>"
                    >
                </div>
            </div>
        </section>

    <?php }
    } ?>
    
</article>

<?php require_once('partials/footer.php') ?>