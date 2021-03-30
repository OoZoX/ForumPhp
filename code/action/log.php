<?php
require_once '../action/config.php';
$sql = /* Commande sql */
' SELECT * FROM admins
  WHERE email= :email
';

$dataBinded = array(
  ':email' => $_POST['email'],
);

$prepareRequete = $pdo->prepare($sql);
$prepareRequete->execute($dataBinded);

$admin = current($prepareRequete->fetchAll(PDO::FETCH_ASSOC));
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
