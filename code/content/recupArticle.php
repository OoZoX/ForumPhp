<?php
$sql =
' SELECT * FROM articles
  WHERE title = :title
';
$dataBinded = array(
  ':title' => $_POST['title']
);
$prepareRequete = $pdo->prepare($sql);
$prepareRequete->execute($dataBinded);
$article = $prepareRequete->fetchAll(PDO::FETCH_ASSOC);
