<?php
session_start();

// Connexion à la base de données
require("../../script/connexion_bd.php");


if (isset($_POST['login']) && isset($_POST['profil'])) {
    // Récupération des informations de connexion
    $login = $_POST['login'];
    $password = $_POST['profil'];

    // Préparation de la requête
    $stmt = $db->prepare("SELECT * FROM user WHERE login = :login AND profil = :profil");
    $stmt->bindParam(':login', $login);
    $stmt->bindParam(':profil', $profil);
    $stmt->execute();

    // Vérification de la correspondance des informations de connexion
    if ($stmt->rowCount() > 0) {
        // Stockage des informations de l'utilisateur dans la session
        $_SESSION['login'] = $login;
        $_SESSION['profil'] = $profil;
        header('Location: dashboard.php');
    } else {
        // Affichage d'un message d'erreur
        echo "Email incorrect";
    }
}
?>
<!DOCTYPE html>
<html lang="Fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../lib/css/authentification/connexion.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <title>Inscription</title>
</head>
<body>
    <div class="wrapper">
        <div class="logo">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTTlJgcPWvijPP8j4Kjn4J3gdoR4ReO6lYugg&usqp=CAU" alt="">
        </div>
        <div class="container">
            <div class="return">
                <a href="connexion.html"><i class="fa fa-chevron-left"></i></a>
            </div> 
        <div class="text-center mt-4 name">
            Inscription
        </div>
        <form method="post" action="/../api/authentification/login.php" class="p-3 mt-3">
            <label for="" >Profil</label>
            <div class="form-field d-flex align-items-center">
                <span class="far fa-image"></span>
                <input type="file" name="userName" id="email" accept="image/*"placeholder="Profil">
            </div>
            <label for="">Email</label>
            <div class="form-field d-flex align-items-center">
                <span class="far fa-envelope"></span>
                <input type="text" name="userName" id="email" placeholder="Email">
            </div>
           <input type="submit"class="btn mt-3" value="Valider" >
        </form>
       
    </div>
</body>
</html>
