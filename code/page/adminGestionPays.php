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

  <div>
    <?php include '../content/navAdmin.php'; ?>
  </div>

  <div>
    <h2>Creation Modification Suppression Pays</h2>
  </div>

  <div>
    <div>
      <?php include '../content/countries/formCreateCountries.php'; ?>
    </div>

    <div>
      <?php include '../content/countries/formModifCountries.php'; ?>
    </div>
  </div>
</div>
