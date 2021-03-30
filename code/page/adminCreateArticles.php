<?php
require_once '../action/config.php';

if (empty($_SESSION['admin'])) {
  header('Location: index.php');
}
else {
  include '../content/nav.php';
}
?>
