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

<h2>Creation Modification Suppression Pays</h2>
<div>
<?php
include '../content/pays/formCreatePays.php';
include '../content/pays/formModifPays.php';
?>
</div>
