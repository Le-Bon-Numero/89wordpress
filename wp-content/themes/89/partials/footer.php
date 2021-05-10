<!-- Ce fichier définit le footer / pied de page qui sera présent sur les pages de notre site.

Important :
Il comprend également quelques balises fermantes nécessaires à la page.
Les balises "html", "body" et "main" sont fermées ici (mais ouvertes dans header.php).
Les deux fichiers seront toujours ajoutés de pair
 -->
    </main>
    <footer>

      <!-- Section comprenant le menu de pied de page créé via wordpress -->
      <section class="presentation">
        <nav class="footer-nav">
          <h3>Qui sommes-nous ?</h3>
          <?php if(has_nav_menu('footer-menu')): ?>
            <?php wp_nav_menu([ 'theme_location' => 'footer-menu', 'menu_class' => 'footer-menu-inner', 'container' => 'ul' ]); ?>
          <?php endif ?>
        </nav>
      </section>

      <section class="contact">
        <h3>Nous contacter</h3>
        <p><a href="mailto:contact@test-mail.fr">contact@test-mail.fr</a></p>
        <p>01 02 03 04 05</p>
        <p>58 rue Boursault</p>
        <p>75017 Paris</p>
      </section>

      <section class="medias-sociaux">
        <h3>Nous suivre</h3>
        <div class="medias-logos">
          <a href="https://www.facebook.com">
            <img class="icon" src="<?= get_stylesheet_directory_uri().'/assets/facebook.png' ?>" alt="Icone Facebook">
          </a>
          <a href="https://www.instagram.com">
          <img class="icon" src="<?= get_stylesheet_directory_uri().'/assets/instagram.png' ?>" alt="Icone Instagram">
          </a>
        </div>
      </section>

    </footer>
    <!-- On rajoute le footer "Wordpress" nécessaire à la bonne marche de Wordpress
    C'est dans celui-ci que wordpress va par exemple aller coller les scripts Javascript dont on a besoin, ... -->
    <?php do_action('get_footer'); ?>
    <?php wp_footer(); ?>
  </body>
</html>
