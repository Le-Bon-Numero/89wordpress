<?php 
/* Page principale du site sur laquelle on arrive si aucun des scénarios prédéfinis par wordpress n'est rempli. 
Exemple de scénario prédéfini wordpress : 
 une page chargera par défaut le modèle "page.php", 
 un article chargera par défaut le modèle "single.php"...

Derniers scénarios à étudier :
Est-on sur la page des articles ? */ ?>
<?php if(is_home() && !is_front_page()): ?>
  <?php require_once('archive.php') ?>
  <?php // Sinon, est-on sur la front page ?> 
  <?php elseif(is_front_page()): ?>
  <h1>Attention, si vous voyez ce message, il faut paramétrer une page d'accueil dans le thème.</h1>
<?php // Si on ne se trouve dans aucun de tous ces scénarios, on renvoie vers la page 404 ?>
  <?php else: ?>
  <?php require_once('404.php') ?>
<?php endif ?>
