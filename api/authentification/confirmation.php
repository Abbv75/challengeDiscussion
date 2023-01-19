<?php
require("../../script/connexion_bd.php");
try {
    if (isset($_POST['loginEntrer']) && isset($_COOKIE['login'])) {

        $loginEntre = htmlspecialchars($_POST['loginEntrer']);
        echo ($loginEntre . ' ' . $_COOKIE['code']);
        if ($loginEntre == $_COOKIE['login']) {
            $query = $bdd->prepare('INSERT INTO `user` (`login`, `profil`) VALUES ( ?,?);');
            $query->execute(array($_COOKIE['login'], ));
            header("HTTP/1.1 200 ok");
            setcookie("login", $_COOKIE['login'], time() + 3600 * 24 * 30, "/");
            
         
        } else {
            header("HTTP/1.1 403 erreur");
        }
    } else {
        die(header("HTTP/1.1 404 donner introuvable"));
    }
} catch (Exception $e) {
    die(header("HTTP/1.1 500 erreur "));
}
