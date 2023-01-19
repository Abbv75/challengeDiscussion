<?php

require("../../script/connexion_bd.php");

try {
  if (isset($_POST['email']) ) {

    $pseudo = htmlspecialchars($_POST['email']);
    $recupUser = $bdd->prepare('SELECT * FROM user WHERE  `login`=? ');

    $recupUser->execute(array($pseudo));
    if($exist) {
      setcookie('login', $pseudo, time() + 3600 * 24 * 30,'/');
      header("HTTP/1.1  200 connexion reussi");
    }else{
      die(header("HTTP/1.1 404 user introuvable"));
    }
  }
} catch (Exception $e) {
  die(header("HTTP/1.1 500 erreur "));
}
