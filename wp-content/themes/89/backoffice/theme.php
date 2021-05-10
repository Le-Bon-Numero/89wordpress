<?php
/**
 * Fichier de configuration générale
 */

// On supprime l'éditeur "Guttenberg"
add_filter('use_block_editor_for_post', '__return_false', 10);

// Ajoute la possibilité de modifier le titre du site
add_theme_support( 'title-tag' );

// Ajoute la possibilité de modifier le logo du site
add_theme_support( 'custom-logo');

// Cache la bar d'admin quand on est connecté, et pas dans le backoffice
add_filter('show_admin_bar', '__return_false');

// Ajoute 2 menu au thème ( emplacements )
add_action('init', function() {
  register_nav_menus([
    'header-menu' => 'Header Menu',
    'footer-menu' => 'Footer Menu'
  ]);
});
