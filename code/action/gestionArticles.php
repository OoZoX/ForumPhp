<?php
require_once 'config.php';

if (empty($_SESSION['admin'])) {
  header('Location: ../../page/index.php');
}

if (isset($_POST['create'])) {
  $sql =
  ' SELECT id FROM countries
    WHERE name = :name
  ';
  $dataBinded = array(
    ':name' => $_POST['country']
  );
  $prepareRequete = $pdo->prepare($sql);
  $prepareRequete->execute($dataBinded);
  $idCountry = $prepareRequete->fetchAll(PDO::FETCH_ASSOC);

  $sql =
  ' INSERT INTO articles
    (country_id, admin_id, title, image, description, description_2, date_content, city)
    VALUES(:country_id, :admin_id, :title, :image, :description, :description_2, :date_content, :city)
  ';
  $dataBinded = array(
    ':country_id' => $idCountry['0']['id'],
    ':admin_id' => $_SESSION['admin']['id'],
    ':title' => $_POST['title'],
    ':image' => $_POST['imgArticle'],
    ':description' => $_POST['text1'],
    ':description_2' => $_POST['text2'],
    ':date_content' => $_POST['date'],
    ':city' => $_POST['location']
  );
  $prepareRequete = $pdo->prepare($sql);
  $prepareRequete->execute($dataBinded);
}


elseif (isset($_POST['Modifier'])) {

  $sql =
  ' SELECT id FROM countries
    WHERE name = :name
  ';
  $dataBinded = array(
    ':name' => $_POST['country']
  );

  $prepareRequete = $pdo->prepare($sql);
  $prepareRequete->execute($dataBinded);
  $idCountry = $prepareRequete->fetchAll(PDO::FETCH_ASSOC);


  $sql =
  ' UPDATE articles
    SET country_id=:country_id, title=:title, image=:image, description=:description, description_2=:description_2, date_content=:date_content, city=:city
    WHERE id = :id
  ';
  $dataBinded = array(
    ':country_id' => $idCountry['0']['id'],
    ':title' => $_POST['title'],
    ':image' => $_POST['imgArticle'],
    ':description' => $_POST['text1'],
    ':description_2' => $_POST['text2'],
    ':date_content' => $_POST['date_content'],
    ':city' => $_POST['location'],
    ':id' => $_POST['id']
  );
  $prepareRequete = $pdo->prepare($sql);
  $prepareRequete->execute($dataBinded);
}
elseif (isset($_POST['Supprimer'])){
  $sql =
  ' DELETE FROM comments
    WHERE article_id = :id
  ';
  $dataBinded = array(
    ':id' => $_POST['id']
  );
  $prepareRequete = $pdo->prepare($sql);
  $prepareRequete->execute($dataBinded);

  $sql =
  ' DELETE FROM articles
    WHERE id = :id
  ';
  $dataBinded = array(
    ':id' => $_POST['id']
  );
  $prepareRequete = $pdo->prepare($sql);
  $prepareRequete->execute($dataBinded);
}

header('Location: ../page/adminGestionArticles.php');
