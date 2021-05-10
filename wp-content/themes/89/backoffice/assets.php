<?php
/**
 * Fichier de chargement du css et du js
 */

 // La fonction qui sera appelée dans l'action "wp_enqueue_scripts"
function ecole89_enqueue_scripts() {
    // On créé une variable qui change le numéro de version chaque seconde si le site est sur "localhost"
    // ainsi, on supprime le cache en développement mais pas en production
    $version = strpos($_SERVER['SERVER_NAME'], 'localhost') !== false ? time() : '1.1';

    // le style css en commun
    wp_enqueue_style( 'ecole89-common', get_stylesheet_directory_uri().'/assets/common.css', [], $version);

    // le style css pour l'éditeur de contenu
    wp_enqueue_style( 'ecole89-editor', get_stylesheet_directory_uri().'/assets/editor.css', [], $version);

    // le style css du header
    wp_enqueue_style( 'ecole89-header', get_stylesheet_directory_uri().'/assets/header.css', [], $version);

    // le style css du header
    wp_enqueue_style( 'ecole89-header-mobile', get_stylesheet_directory_uri().'/assets/header-mobile.css', [], $version);

    // le style css du footer
    wp_enqueue_style( 'ecole89-footer', get_stylesheet_directory_uri().'/assets/footer.css', [], $version);

    // le style css de la page home
    wp_enqueue_style( 'ecole89-home', get_stylesheet_directory_uri().'/assets/home.css', [], $version);

    // le style css du formulaire de la page home
    wp_enqueue_style( 'ecole89-home-form', get_stylesheet_directory_uri().'/assets/home-form.css', [], $version);

    // le style css de la page FAQ
    wp_enqueue_style( 'ecole89-faq', get_stylesheet_directory_uri().'/assets/page.css', [], $version);

    // le style css de la page d'archive (blog / réalisations)
    wp_enqueue_style( 'ecole89-archive', get_stylesheet_directory_uri().'/assets/archive.css', [], $version);

    // le style css d'un article 
    wp_enqueue_style( 'ecole89-article', get_stylesheet_directory_uri().'/assets/post.css', [], $version);

    // le style css d'une réalisation
    wp_enqueue_style( 'ecole89-realisation', get_stylesheet_directory_uri().'/assets/realisation.css', [], $version);

    // le fichier de javascript ( menu responsive )
    wp_enqueue_script('ecole89-script', get_stylesheet_directory_uri().'/assets/script.js', [], $version, true );
}

// Fonction de wordpress qui va charger notre configuration au bon moment
add_action('wp_enqueue_scripts', 'ecole89_enqueue_scripts');

// Fonction de wordpress qui permet à l'utilisateur de voir son texte stylé depuis l'éditeur de la page d'administration du site.
// Le texte apparaît de la même façon que sur le site déployé.
function wpdocs_theme_add_editor_styles() {
    add_editor_style( get_stylesheet_directory_uri().'/assets/editor.css' );
    add_editor_style( get_stylesheet_directory_uri().'/assets/common.css' );
}
add_action( 'admin_init', 'wpdocs_theme_add_editor_styles' );