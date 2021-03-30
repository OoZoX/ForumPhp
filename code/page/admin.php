<?php
require_once '../action/config.php';

if (empty($_SESSION['admin'])) {
  header('Location: index.php');
}
else {
  include '../content/nav.php';
}
?>
  <div>
    <h1>Page Admin</h1>
    <p>Bienvenue sur votre espace de gestion des articles</p>
  </div>

<?php include '../content/navAdmin.php'; ?>
