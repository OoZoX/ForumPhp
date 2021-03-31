<?php require_once '../action/config.php'; ?>

<html lang="fr" dir="ltr">
  <?php include '../content/head.php'; ?>
  <body>
    <header>
      <?php include '../content/nav.php'; ?>
    </header>
    <div>
      <?php
      include '../content/recupArticle.php';
      include '../content/afficheArticles.php' ;
      ?>
    </div>
    <div>
      <h2>Commentaires</h2>
    </div>
    <div>
      <h3>Laisser un commentaire</h3>
      <?php include '../content/formPostComments.php'; ?>
    </div>
    <div>
      <h3>Tout les commentaires</h3>
      <?php  ?>
    </div>
  </body>
</html>
