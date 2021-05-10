<?php
// Fichier de création de la taxonomie "Réalisation"
// https://developer.wordpress.org/resource/dashicons/#image-rotate-right
// template => single-{post_type}.php 
//   permet de définir le format d'une page d'un article de type "post-type"
//   ex : notre fichier single-realisations.php (qui diffère d'un article par défaut -single.php-)
// archive => archive-{post_type}.php
//   permet de définir le format de la page de listing des articles de type "post-type"
//   ex : on aurait pu utiliser archive-realisations.php (mais le format par défaut qu'on a défini -archive.php- nous suffit)

add_action('init', function () {
  $labels = array(
    'name'                  => 'Réalisations',
    'singular_name'         => 'Réalisation',
    'menu_name'             => 'Réalisations',
    'all_items'             => 'Toutes les réalisations',
    'view_item'             => 'Voir la réalisation',
    'add_new_item'          => 'Ajouter une nouvelle réalisation',
    'add_new'               => 'Ajouter',
    'edit_item'             => 'Editer la réalisation',
    'update_item'           => 'Modifier la réalisation',
    'search_items'          => 'Rechercher une réalisation',
    'not_found'             => 'Aucun élément',
    'not_found_in_trash'    => 'Aucun élément dans la corbeille',
  );

  register_post_type(
      'realisations',
      [
        'label'               => $labels['name'],
        'description'         => '',
        'labels'              => $labels,
        'supports'            => ['title', 'excerpt', 'thumbnail'],
        'show_in_rest'        => true,
        'hierarchical'        => false,
        'public'              => true,
        'has_archive'         => true,
        'menu_position'       => 2,
        'rewrite'             => ['slug' => 'realisations'],
        'menu_icon'           => 'dashicons-camera',
      ]
  );
}, 0);
