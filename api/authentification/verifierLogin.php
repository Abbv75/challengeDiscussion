<?php

require("../../script/connexion_bd.php");
try {
  if (isset($_POST['user_email']) ) {
    $email = htmlspecialchars($_POST['user_email']);

    $verif = $bdd->prepare("SELECT * FROM `user` WHERE `login`=?");
    $verif->execute(array($email));
    if ($res = $verif->fetch()) {
      die(header("HTTP/1.1 403 Le login existe deja"));
    }
  }
} catch (Exception $e) {
  die(header("HTTP/1.1 500 erreur"));
}
