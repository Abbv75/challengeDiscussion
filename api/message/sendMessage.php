<?php
    ob_start();
    try{
        if(isset($_GET['idSender']) &&isset($_GET['idReveiver']) && isset($_GET['message'])){
            $idSender=$_GET['idSender'];
            $idReveiver=$_GET['idReveiver'];
            $message=$_GET['message'];
            require('../../script/connexion_bd.php');

            $query=$bdd->prepare('INSERT INTO `message` (`message`, id_user1)')
        }
        else{
            header('HTTP/1.1 403 info inccorecte');
        }
    }
    catch(Exception $e){
        header('HTTP/1.1 500 Une erreur est survenue');
    }

    ob_end_flush();
?>