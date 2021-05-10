<!-- Ce fichier est utilisé pour récupérer tous les articles grâce à la loop / boucle wordpress 
pour mettre en page notre liste d'articles -->

<div class="archive-content text-medium-section">

  <!-- La boucle wordpress qui permet de récupérer nos articles et de les traiter un par un -->
  <?php if ( have_posts() ): ?>
    <?php while ( have_posts() ): ?>

      <!-- On installe le contexte du post (sans cette fonction, on n'aurait pas accês aux différents éléments du post  -->
      <?php the_post(); ?>
    
      <article class="post_item">
        <div class='post_thumbnail'>
          <?php the_post_thumbnail('thumbnail'); ?>
        </div>
      
        <div class='post_description'>
          <h2 class='title'><?php the_title(); ?></h2>
          <h3 class='date'>
            <img class="icon" src="<?= get_stylesheet_directory_uri().'/assets/clock.svg' ?>" />
            <?= get_the_date(); ?>
          </h3>
          <?php the_excerpt(); ?>
          <a href="<?php the_permalink() ?>">Voir l'article</a>
        </div>
      </article>

    <hr/>

    <?php endwhile ?>

    <!-- On n'oublie pas le cas où il n'y aurait pas encore d'articles à présenter. -->
    <?php else: ?>
    
    <?php
      $no_data_title = "Pas encore d'article";
      $queried_object = get_queried_object();
      if(isset($queried_object->name) && $queried_object->name === 'realisations' ) {
        $no_data_title = "Pas encore de réalisation";
      }
    ?>

    <h4><?= $no_data_title?></h4>
    <p>Nous n'avons pas encore d'éléments de ce type à vous présenter ici. Nous nous attelons à pallier ce détail au plus vite !</p>

  <?php endif ?>

  <!-- On inclue une pagination fournie par wordpress pour pouvoir accéder à tous nos articles simplement -->
  <?php the_posts_pagination(); ?>
</div>
