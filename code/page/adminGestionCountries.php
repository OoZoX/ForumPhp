<?php
require_once '../action/config.php';

if (empty($_SESSION['admin'])) {
  header('Location: index.php');
}?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <?php
  include '../content/head.php';
  $title = 'Gestion pays';
  ?>
  <body>
    <div>
      <div>
        <?php include '../content/nav.php' ?>
      </div>

      <div>
        <h1>Gestion Pays</h1>
      </div>

      <div>
        <div>
          <h3>Ajouter un pays</h3>
        </div>
        <div>
          <?php include '../content/countries/formCreateCountries.php'; ?>
        </div>

        <div>
          <div>
            <h3>Pays existant</h3>
          </div>
          <div>
            <?php include '../content/countries/formModifCountries.php'; ?>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
