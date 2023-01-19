<?php
        require("../script/connexion_bd.php");
    try{
        
        if(isset($_POST["nom"])){
           $nomUser=htmlspecialchars($_POST["nom"]);
           $search=$bdd->prepare("SELECT * FROM user WHERE login=?");
           $search->execute(array($nomUser)); 

           $exist=false;
           while($user=$search->fetch()){
            $exist=true;
            $response[] = array(
                    "idUser"=>$user['idUser'],
                    "login"=>$user['login'],
                    "profil"=>$user['profil']
                ); 

           }
           
           if($exist){
            // var_dump($response);
            echo(json_encode($response));
            header("HTTP/1.1 200 ok1");
            }else{
            header("HTTP/1.1 404 erreur");
            }
        }
    }catch(Exception $e){
        die(header("HTTP/1.1 500 erreur"));
    }


?>