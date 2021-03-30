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

</div>

<?php include '../content/navAdmin.php'; ?>
<div>
  <h2>Creation d'un Article</h2>
</div>
<div>
  <?php include '../content/formCreateArticles.php'; ?>
</div>
