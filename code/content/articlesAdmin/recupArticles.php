<?php

$sql =
' SELECT id FROM countries WHERE name = :name
';
if (isset($_POST['countrySelect'])){
$dataBinded = array(
  ':name' => $_POST['countrySelect']
);
}
else{
  $dataBinded = array(
    ':name' => $_SESSION['article']
  );
}
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
