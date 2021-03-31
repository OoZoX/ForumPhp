<?php require_once '../action/config.php'; ?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <?php
  include '../content/head.php';
  $title = 'countries'; ?>
  <body>
    <header>
      <?php include '../content/nav.php'; ?>
    </header>
    <?php include '../content/allArticlesFromCountries.php' ?>
    <?php include '../content/affCountries.php'; ?>
  </body>
</html>
