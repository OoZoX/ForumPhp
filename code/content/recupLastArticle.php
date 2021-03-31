<?php
$sql =
' SELECT * FROM articles
  ORDER BY date_publication DESC
  LIMIT 1
';
$prepareRequete = $pdo->prepare($sql);
$prepareRequete->execute();
$_RECUP['articleIndex'] = $prepareRequete->fetchAll(PDO::FETCH_ASSOC);

header('Location: ../page/index.php');
