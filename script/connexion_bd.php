<?php
try {
    $bd_url = "localhost";
    $bd_name = "challengediscussion";
    $bd_login = "root";
    $bd_pass = "";
    $bdd = new PDO('mysql:host=' . $bd_url . ';dbname=' . $bd_name, $bd_login, $bd_pass, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES \'UTF8\''));
} catch (Exception $e) {
    die(header("HTTP/1.1 500 Connexion a la base de donne impossible"));
}
