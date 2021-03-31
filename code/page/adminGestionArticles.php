<?php
require_once '../action/config.php';
include '../functions/choisesCountry.php';

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
    <div>
      <h2>Creation d'un Article</h2>
    </div>

    <div>
      <?php include '../action/recupCountries.php'; ?>
      <?php include '../content/articles/formCreateArticles.php'; ?>
    </div>
  </div>

  <div>
    <div>
      <h2>Choisir un pays</h2>
    </div>

    <div>
      <form action="adminGestionArticles.php" method="post">
        <select name="countrySelect">
          <option value="choise">choisir pays</option>
          <?php include '../content/selectCountries.php'; ?>
          <input type="submit" name="btn" value="go"/>
        </select>
      </form>
    </div>
    <div>

      <?php include '../content/articles/afficheArticlesAdmin.php'; ?>


    </div>
  </div>
</div>
