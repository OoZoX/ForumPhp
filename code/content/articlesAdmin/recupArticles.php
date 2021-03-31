<?php       //recupere tout les article pour les afficher en admin

$sql =
' SELECT id FROM countries WHERE name = :name
';

$dataBinded = array(
  ':name' => $_POST['country']
);

$prepareRequete = $pdo->prepare($sql);
$prepareRequete->execute($dataBinded);
$idCountry = $prepareRequete->fetchAll(PDO::FETCH_ASSOC);

$sql =
' SELECT * FROM articles
  WHERE country_id = :id
';
$dataBinded = array(
  ':id' => $idCountry['0']['id']
);
$prepareRequete = $pdo->prepare($sql);
$prepareRequete->execute($dataBinded);
$dataArticle = $prepareRequete->fetchAll(PDO::FETCH_ASSOC);
