<?php
require_once '../action/config.php';

if (isset($_SESSION['admin'])) {
  header('Location: index.php');
}
else {
  include '../content/nav.php';

?>
  <div>
    <h1>Page Admin</h1>
  </div>

  <nav>
    <div>
      <ul >
        <li><a href="adminCreatePays.php">Creation modification suppression pays</a></li>
        <li><a href="adminCreateArticles.php">creation article</a></li>
        <li><a href="adminModificationArticles.php">Modification articles</a></li>
      </ul>
    </div>
  </nav>
}
