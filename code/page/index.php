<?php
require_once '../action/config.php';
include '../content/recupLastArticle.php';
?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
<?php
  $title = 'Accueil';
  include '../content/head.php';
  ?>
  <body>
    <header>
      <?php include '../content/nav.php' ?>
    </header>
    <div>
      <h1>VENEZVISITERLEPAYSDEVOTRECHOIX.COM</h1>
    </div>
    <div>
      <h2>Dernier article posté</h2>
    </div>
    <?php include '../content/afficheArticles.php'; ?>


  </body>
</html>
