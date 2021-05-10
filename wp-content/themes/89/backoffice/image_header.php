<?php
/** 
 * Pour ne pas faire de copier-collé partout dans le site, on peut faire des fonctions.
 * Ici on créé une fonction qui nous permet de créer une grande image de header
 */

function get_image_header($tag = 'h1', $post_id = null) {
    
    // Pour la gestion du titre
    $has_title = get_field('image_header_title', $post_id) === 'yes';
    // Pour la gestion de l'image principale
    $use_thumbnail = get_field('image_header_thumbnail', $post_id) === 'yes';
    if ($use_thumbnail) {
        $image = get_the_post_thumbnail_url($post_id, '1536x1536');
    } else {
        $image = get_field('image_header_image', $post_id)['sizes']['1536x1536'];
    }
?>

    <div class="image-header-wrapper">

        <img class="image-header" src="<?= $image ?>" />

        <?php if($has_title): ?>
            <<?=$tag ?> class="image-header-punchline">
                <?= get_the_title($post_id) ?>
            </<?=$tag ?>>
            <div class="image-header-overlay"></div>
        <?php endif ?>

    </div>
<?php
}
