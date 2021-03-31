<?php
$sql =
' SELECT id FROM countries
  WHERE name = :name
';
$dataBinded = array(
  ':name' => $_POST['selectCountry']
);
$prepareRequete = $pdo->prepare($sql);
$prepareRequete->execute($dataBinded);
$idCountry = $prepareRequete->fetchAll(PDO::FETCH_ASSOC);

$sql =
' SELECT * FROM articles
  WHERE country_id = :country_id
  ORDER BY date_publication ASC
';
$dataBinded = array(
  ':country_id' => $idCountry['0']['id']
);
$prepareRequete = $pdo->prepare($sql);
$prepareRequete->execute($dataBinded);
$dataCountry = $prepareRequete->fetchAll(PDO::FETCH_ASSOC);
