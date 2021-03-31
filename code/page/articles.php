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
  </body>
</html>
