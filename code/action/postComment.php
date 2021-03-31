<?php
require_once 'config.php';  //poste un commentaire

$sql =
' INSERT INTO comments
  (pseudo, description, article_id)
  VALUES(:pseudo, :description, :article_id)
';
$dataBinded = array(
  ':pseudo' => $_POST['pseudo'],
  ':description' => $_POST['description'],
  ':article_id' => $_POST['id_article']
);
$prepareRequete = $pdo->prepare($sql);
$prepareRequete->execute($dataBinded);

header('Location: ../page/index.php');
