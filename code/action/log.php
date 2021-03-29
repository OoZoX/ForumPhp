<?php
require_once '../action/config.php';
$sql = 'SELECT * FROM admins WHERE email= :email'; /* Commande sql */

$dataBinded = array(
  ':email' => $_POST['email'],
);

$prepare = $pdo->prepare($sql);
$prepare->execute($dataBinded);
$admin = current($prepare->fetchAll(PDO::FETCH_ASSOC));
if(empty($admin)){
  $_SESSION['message'] = 'Email incorrect';
  header('Location:../page/login.php');
}else{
  if (password_verify($_POST['password'], $admin['password'])) {
    $_SESSION['admin'] = $admin;
    $_SESSION['message'] = '';
    header('Location:../page/index.php');
  }
  else {
    $_SESSION['message'] = 'Password incorrect';
    header('Location:../page/login.php');
  }
}

