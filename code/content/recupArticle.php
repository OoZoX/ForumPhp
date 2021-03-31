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
$_RECUP['articleIndex'] = $prepareRequete->fetchAll(PDO::FETCH_ASSOC);

$sql =
' SELECT name FROM countries
  WHERE id = :id
';
$dataBinded = array(
  ':id' => $_RECUP['articleIndex']['0']['country_id']
);
$prepareRequete = $pdo->prepare($sql);
$prepareRequete->execute($dataBinded);
$_RECUP['articleIndexId'] = $prepareRequete->fetchAll(PDO::FETCH_ASSOC);
