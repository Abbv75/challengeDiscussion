<?php
    require("../script/connexion_bd.php");
    try{
        if(isset($_COOKIE["idUser"])){
            $idUser=$_COOKIE['idUser'];
             $query=$bdd->prepare("SELECT * FROM `user` WHERE `idUser`=?");
             $query->execute(array($idUser));
             $exist=false;
             if($res=$query->fetch()){
             $exist=true;
             $response[] = array(
                    "login"=>$res['login'],
                    "profil"=>$res['profil']
                );
            }
        }
            if($exist){
                echo(json_encode($response));
                header("HTTP/1.1 200 ok");
            }else{
                header("HTTP/1.1 404 erreur1");
            }  
    }catch(Exception $e){
        die(header("HTTP/1.1 500 erreur2"));
    }
?>