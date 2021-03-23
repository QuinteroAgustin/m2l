<?php 
    $active=4; $title = "Déconnexion"; require('../header.php');
    // unset enlève ce qui à dans la variable $session[user] 
    unset($_SESSION['user']);
    $_SESSION['messages']=array(
        "deconnexion" => "Vous vous êtes bien déconnecté" 
    );
    header("Location: ../index.php"); // Redirige à l'accueil
?>