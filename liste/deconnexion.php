<?php $active=4; $title = "Déconnexion"; require('../header.php');
    unset($_SESSION['user']);
    $_SESSION['messages']=array(
        "deconnexion" => "Vous vous êtes bien déconnecté"
    );
    header("Location: ../index.php");
?>