<?php
$sql =
" SELECT * FROM countries
  ORDER BY name ASC
";
$prepareRequete = $pdo->prepare($sql);
$prepareRequete->execute();
$dataCountry = $prepareRequete->fetchAll(PDO::FETCH_ASSOC);
