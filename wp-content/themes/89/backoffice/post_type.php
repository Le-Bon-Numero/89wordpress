<?php
/**
 * Fichier de configuration des pages et des articles
 */


// Ajoute une photo "thumbnail" aux articles
add_theme_support( 'post-thumbnails' );

// La fonction qui sera appelée dans l'action "init"
function ecole89_post_type_support() {
    // Modifie la configuration des pages et articles (supprime le "content" etc)
    remove_post_type_support('page', 'editor');
    remove_post_type_support('page', 'custom-fields');
    remove_post_type_support('page', 'trackbacks');
    remove_post_type_support('page', 'author');
    remove_post_type_support('page', 'revisions');

    remove_post_type_support('post', 'editor');
    remove_post_type_support('post', 'custom-fields');
    remove_post_type_support('post', 'trackbacks');
    remove_post_type_support('post', 'author');
    remove_post_type_support('post', 'revisions');
}


// Fonction de wordpress qui va charger notre configuration au bon moment
add_action('init', 'ecole89_post_type_support');
