<?php
    ob_start();
    try{
        if( isset($_GET['idReceiver'])){
            // $idSender=$_COOKIE['idSender'];
            $idSender=1;
            $idReceiver=$_GET['idReceiver'];
            
            require('../../script/connexion_bd.php');
            try{
                $query_select=$bdd->prepare('SELECT * FROM `message` WHERE (id_sender=? AND id_receiver=?) OR (id_sender=? AND id_receiver=?)');
                $query_select->execute(array($idSender, $idReceiver,$idReceiver, $idSender));

                $query_update=$bdd->prepare('UPDATE `message` SET lue=? WHERE (id_sender=? AND id_receiver=?) OR (id_sender=? AND id_receiver=?)');
                $query_update->execute(array(1, $idSender, $idReceiver,$idReceiver, $idSender));

                $exist=false;
                while($res=$query_select->fetch()){
                    $exist=true;
                    $response[]=$res;
                }

                if($exist){
                    echo(json_encode($response));
                    header('HTTP/1.1 200 recuperation Ok');

                }
                else{
                    header('HTTP/1.1 404 aucun');
                }
                
            }
            catch(Exception $e){
                header('HTTP/1.1 500 recuperation impossible');
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