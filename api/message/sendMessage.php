<?php
    ob_start();
    try{
        if(isset($_COOKIE['idUser']) &&isset($_GET['idReceiver']) && isset($_GET['message'])){
            $idSender=$_COOKIE['idSender'];
            $idReceiver=$_GET['idReceiver'];
            $message=$_GET['message'];
            
            require('../../script/connexion_bd.php');
            try{
                $query=$bdd->prepare('INSERT INTO `message` (`message`, id_sender, id_receiver) VALUES(?,?,?)');
                $query->execute(array($message, $idSender, $idReceiver));
                
                header('HTTP/1.1 200 Ajoue Ok');
            }
            catch(Exception $e){
                header('HTTP/1.1 500 ajoue impossible');
            }
        }
        else{
            header('HTTP/1.1 403 info inccorecte');
        }
    }
    catch(Exception $e){
        header('HTTP/1.1 500 Une erreur est survenue');
        echo($e->getMessage());
    }

    ob_end_flush();
?>