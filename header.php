<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?> - M2L</title>
    <link rel="stylesheet" href="/m2l/css/main.css">
    <link rel="icon" href="/m2l/img/logo.png">
</head>
<body>
<div>
        <ul class="navbar">
            <li class="ligne left"><a class="tjaune <?php if($active==1){echo"active";}?>"href="/m2l/index.php">Accueil</a></li>
            <li class="ligne left"><a class="<?php if($active==2){echo"active";}?>" href="/m2l/liste/liste.php">FAQ</a></li>
            <li class="ligne right"><a class="<?php if($active==3){echo"active";}?>" href="/m2l/inscription.php">Inscription</a></li>
            <li class="ligne right"><a class="<?php if($active==4){echo"active";}?>" href="/m2l/connexion.php">Connexion</a></li>
        </ul>
    </div>
    <div class="marge">
