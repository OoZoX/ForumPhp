<?php
require_once '../action/config.php';

if (empty($_SESSION['admin'])) {
  header('Location: index.php');
}?>

<div>
  <div>
    <?php include '../content/nav.php' ?>
  </div>
  <div>
    <h1>Page Admin</h1>

  </div>

  <?php include '../content/navAdmin.php'; ?>
  <div>
    <h2>Creation d'un Article</h2>
  </div>
  <div>
    <div>
      <?php include '../content/formCreateArticles.php'; ?>
    </div>
    <div>
      <?php include '../' ?>
    </div>
  </div>

</div>
