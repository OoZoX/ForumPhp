<?php
$sql =
' SELECT * FROM comments
  WHERE article_id = :id
  ORDER BY date_publication ASC
';
$dataBinded = array(
  ':id' => $_RECUP['articleIndex']['0']['id']
);
$prepareRequete = $pdo->prepare($sql);
$prepareRequete->execute($dataBinded);
$_RECUP['comments'] = $prepareRequete->fetchAll(PDO::FETCH_ASSOC);
