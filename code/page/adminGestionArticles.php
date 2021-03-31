<?php
require_once '../action/config.php';

if (empty($_SESSION['admin'])) {
  header('Location: index.php');
}?>

<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <?php
  include '../content/head.php';
  $title = 'Gestion Article';
  ?>
  <body>
    <header>
      <?php include '../content/nav.php' ?>
    </header>

      <div>
        <h1>Page Admin</h1>
      </div>

      <div>
        <div>
          <h2>Creation d'un Article</h2>
        </div>

        <div>
          <?php include '../action/recupCountries.php'; ?>
          <?php include '../content/articlesAdmin/formCreateArticles.php'; ?>
        </div>
      </div>

      <div>
        <div>
          <h2>Choisir un pays</h2>
        </div>

        <div>
          <form action="adminGestionArticles.php" method="post">
            <select name="countrySelect">
              <?php include '../content/selectCountries.php'; ?>
              <input type="submit" name="btn" value="go"/>
            </select>
          </form>
        </div>

        <div>
          <?php include '../content/articlesAdmin/afficheArticlesAdmin.php'; ?>
        </div>
      </div>

  </body>
</html>
