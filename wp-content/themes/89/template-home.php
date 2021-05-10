<?php
/**
 * Template Name: Page Home
 * Template Post Type: Page
 */

 /* Ce fichier est utilisée pour la page d'accueil du site */
?>

<?php require_once('partials/header.php') ?>

<?php get_image_header() ?>

<!-- On décide de faire des sections de nos parties textuelles de la page d'accueil.
On récupère différents champs créés par le biais du plugin ACF grâce aux fonctions get_field() -->
<section class="dark">
    <div class="text-medium-section subtitle">
        <p><?= get_field('home_subtitle_1') ?></p>
    </div>
</section>

<section class="text-medium-section home-content">
    <h4 class="title-bar"><?= get_field('home_presentation_1_title') ?></h4>
    <?= get_field('home_presentation_1') ?>
</section>

<div class="divider" >
    <img 
    src="<?= get_field('home_separateur_1')['sizes']['1536x1536']; ?>" 
    alt="<?= get_field('home_separateur_1')['alt']?>"
    />
</div>

<section class="text-medium-section home-content">
    <h4 class="title-bar"><?= get_field('home_operation') ?></h4>
    <div class="home-logos-container">
        <div>
            <div class="home-icon">
                <img 
                src="<?= get_field('icon_order')['sizes']['1536x1536']; ?>" 
                alt="<?= get_field('icon_order')['alt']?>"
                />
            </div>
            <?= get_field('home_order') ?>
        </div>
        <div>
            <div class="home-icon">
                <img 
                src="<?= get_field('icon_shot')['sizes']['1536x1536']; ?>" 
                alt="<?= get_field('icon_shot')['alt']?>"
                />
            </div>
            <?= get_field('home_shot') ?>
        </div>
        <div>
            <div class="home-icon">
            <img 
                src="<?= get_field('icon_delivery')['sizes']['1536x1536']; ?>" 
                alt="<?= get_field('icon_delivery')['alt']?>"
                />
            </div>
            <?= get_field('home_delivery') ?>
       </div>
    </div>
</section>

<section class="dark">
    <div class="text-medium-section subtitle">
        <h4><?= get_field('home_subtitle_2_title') ?></h4>
        <p><?= get_field('home_subtitle_2') ?></p>
    </div>
</section>

<section class="text-medium-section home-content">
    <h4 class="title-bar"><?= get_field('home_presentation_2_title') ?></h4>
    <?= get_field('home_presentation_2') ?>
</section>

<div class="divider">
    <img 
    src="<?= get_field('home_separateur_2')['sizes']['1536x1536']; ?>" 
    alt="<?= get_field('home_separateur_2')['alt']?>"
    />
</div>

<section class="text-medium-section home-content no-description">
    <h4 class="title-bar"><?= get_field('home_presentation_3_title') ?></h4>
</section>

<!-- Dans cette section, on implémente un formulaire créé avec le plugin Contact Form 7 
On note l'id de cette section "contact" qui nous permet de créer un lien vers cette "ancre" pour notre menu principal.
Contrairement aux classes, un "id" doit toujours être unique sur la page.
-->
<section id="contact" class="dark">
    <p class="form-text">Toute notre équipe se tient à votre disposition afin de répondre à vos questions !</p>
    <?= do_shortcode('[contact-form-7 id="121" title="Contact Home"]'); ?>
</section>

<div class="divider">
    <img 
    src="<?= get_field('home_separateur_3')['sizes']['1536x1536']; ?>" 
    alt="<?= get_field('home_separateur_3')['alt']?>"
    />
</div>

<?php require_once('partials/footer.php') ?>