<?php /* Ce fichier est le fichier par défaut permettant d'afficher un article */ ?>

<?php require_once('partials/header.php') ?>

<?php get_image_header() ?>

<!-- On met le contenu de notre article dans une balise <article> parfaitement adapté à ce type de contenu -->
<article>
    <h1 class="page-title title-bar" >Par <?= get_field('article_author') ?></h1>

    <div class="page-content post text-medium-section">
        <h3 class="post-date"><?= get_the_date(); ?></h3>
        <div class="editor-content">
            <?= get_field('article_content') ?>
        </div>
    </div>
</article>

<?php require_once('partials/footer.php') ?>