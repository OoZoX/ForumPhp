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
  $id_country = $prepareRequete->fetchAll(PDO::FETCH_ASSOC);

  $sql =
  ' INSERT INTO articles
    (country_id, admin_id, title, image, description, description_2, date_content, city)
    VALUES(:country_id, :admin_id, :title, :image, :description, :description_2, :date_content, :city)
  ';
  $dataBinded = array(
    ':country_id' => $id_country['0']['id'],
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


header('Location: ../page/adminGestionArticles.php');
