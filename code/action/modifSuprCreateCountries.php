<?php
require_once 'config.php';

if (isset($_SESSION['admin'])) {
  header('Location: ../../page/index.php');
}


if ($_POST['btnModif'] = 'Modifier') {
  $sql =
  " UPDATE countries
    SET name, image = :name, :image 
    WHERE id = $_POST['id']
  ";
  $dataBinded = array(
    ':name' => $_POST['name'],
    ':image' => $_POST['image']
  );
  $prepareRequete = $pdo->prepare($sql);
  $prepareRequete->execute($dataBinded);
}
else {
  $sql =
  " INSERT INTO countries
    (admin_id, name, image)
    VALUES(:admin_id, :name, :image)
  ";
  $dataBinded = array(
    ':admin_id' => $_SESSION['admin']['id'],
    ':name' =>  $_POST['name'],
    ':image' => $_POST['image']
  );
  $prepareRequete = $pdo->prepare($sql);
  $prepareRequete->execute($dataBinded);
}


header('Location: ../page/adminCreatePays.php');
