<?php /* Ce fichier est le fichier par défaut permettant d'afficher une page de notre site 
(si aucun fichier template-* n'a été créé pour ladite page) */ ?>

<?php require_once('partials/header.php') ?>

<?php get_image_header('h2') ?>

<h1 class="page-title title-bar" ><?php the_title() ?></h1>

<h2 class="page-subtitle" ><?= get_field('page_subtitle') ?></h2>

<div class="page-content text-large-section editor-content"><?= get_field('page_content') ?></div>

<?php require_once('partials/footer.php') ?>
