<!-- Ce fichier définit le header / en-tête qui sera présent sur les pages de notre site.
 
Important :
Il comprend également toutes les balises nécessaires à la page : doctype, head et metas...
On constate que nos balises "html", "body" et "main" ne sont pas fermées.
Elles le seront par le fichier "footer.php".
Les deux fichiers seront toujours ajoutés de pair.
 -->
<!doctype html>
<html <?= get_language_attributes() ?>>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <?php wp_head() ?>
    <!-- Les deux lignes suivantes concernent les fonts Google que l'on récupère -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;700&display=swap" rel="stylesheet">
  </head>
  <body>
    <header class="header">
      <!-- On ajoute le logo s'il existe -->
      <?php if(has_custom_logo()): ?>
        <?php the_custom_logo() ?>
      <?php endif ?>
      <!-- Les deux éléments suivants "overlay-header" et "menu-burger" ne sont utilisés que pour les petites résolutions -->
      <img id="menu-burger" src="<?= get_stylesheet_directory_uri().'/assets/menu.png' ?>" alt="Icone burger menu">
      <div class="overlay-header"></div>
      <!-- On ajoute le menu principal du site -->
      <nav class="header-nav">
        <?php if(has_nav_menu('header-menu')): ?>
          <?php wp_nav_menu([ 'theme_location' => 'header-menu', 'menu_class' => 'header-menu-inner', 'container' => 'ul' ]); ?>
        <?php endif ?>
      </nav>
    </header>
    <main class="main-content">
