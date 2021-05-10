<?php
/**
 * La pages qui liste les articles et les réalisations
 * 
 * Dans cette page le contexte de la page n'est pas retrouvé.
 * Il faut donc aller chercher l'identifiant de la page pour pouvoir récupérer ses informations
 * Par exemple, la fonction the_title() ne va pas fonctionner correctement
 */
?>
<?php require_once('partials/header.php') ?>

<?php
  // on récupère l'url de la  page actuelle
  $path = explode('/', $_SERVER['REQUEST_URI'])[1];
  // avec l'url, on peut récupérer la page wordpress correspondante
  $current_page = get_page_by_path($path);
?>

<?php get_image_header('h2', $current_page->ID) ?>

<h1 class="page-title title-bar" ><?= $current_page->post_title ?></h1>

<?php require_once('partials/archive-loop.php') ?>

<?php require_once('partials/footer.php'); ?>
