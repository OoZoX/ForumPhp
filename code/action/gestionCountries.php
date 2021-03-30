<?php
require_once 'config.php';

if (empty($_SESSION['admin'])) {
  header('Location: ../../page/index.php');
}


if (isset($_POST['Modifier']) or isset($_POST['Supprimer'])) {  //modification pays
  if (isset($_POST['Modifier'])) {
    $sql =
    " UPDATE countries
      SET name=:name, image=:image
      WHERE id = :id
    ";
    $dataBinded = array(
      ':name' => $_POST['name'],
      ':image' => $_POST['image'],
      ':id' => $_POST['id']
    );
  }
  elseif (isset($_POST['Supprimer'])) {  //suppression pays
    $sql =
    " DELETE FROM countries
      WHERE id = :id
    ";
    $dataBinded = array(
      ':id' => $_POST['id']
    );
  }
  $prepareRequete = $pdo->prepare($sql);
  $prepareRequete->execute($dataBinded);
}


else {  //creation pays
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
