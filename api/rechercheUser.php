<?php
    try{
        require("../script/connexion_bd.php");
        if(isset($_POST["nom"])){
           $nomUser=htmlspecialchars($_POST["nom"]);
           $search=$bdd->prepare("SELECT * FROM user WHERE login=?");
           $search->execute(array($nomUser)); 

           $exist=false;
           if($user=$search->fetch()){
            $exist=true;
            $respons[] = array(
                    "idUser"=>$user['idUser'],
                    "login"=>$user['login'],
                    "profil"=>$user['profil']
                );  
           }else{
            die(header("HTTP/1.1 404 user introuvable"));
           }
           if($exist){
            echo(json_encode($respons));
            header("HTTP/1.1 200 ok");
            }else{
            header("HTTP/1.1 404 erreur");
            }
        }
    }catch(Exception $e){
        die(header("HTTP/1.1 500 erreur"));
    }


?>