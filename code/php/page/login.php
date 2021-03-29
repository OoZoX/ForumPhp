<?php 
require_once "../action/config.php";

if (isset($_SESSION['admin'])) {
  header('Location: index.php');
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">

  <?php
  $title = 'Connection';
  include '../content/head.php';
  ?>

  <body>
    <header>
      <?php
      include '../content/nav.php'; ?>
    </header>

    <h2>Connection</h2>
    <div>
      <form action="../action/log.php" method="post">                   <!--formulaire de connection-->
        <div>
          <input id="name" type="email" name="email"/>
          <label for="name"> E-mail :</label>
          </div>
          <div>
          <input id="password" type="password" name="password"/>
          <label for="password"> Mot de passe : </label>
          <input type="submit" value="S'identifier"/>
        </div>
      </form>
    </div>
    <div>

      <?php if (isset($_SESSION['message'])) {
        echo ($_SESSION['message']);
      } ?>
        
    </div>
    <?php include '../content/footer.php' ?>
  </body>
</html>
