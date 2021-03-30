<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?> - M2L</title>
    <link rel="stylesheet" href="/m2l/css/main.css">
    <link rel="icon" href="/m2l/img/logo.png">
    <img src="img/adminv.jpg" alt="">
</head>
<body>
<div class="navbar">
    <ul>
        <li class="ligne left"><a class="<?php if($active==1){echo"active";}?>"href="/m2l/index.php">Accueil</a></li>
        <?php
            if(isset($_SESSION['user'])){ ?>
                <li class="ligne left"><a class="<?php if($active==2){echo"active";}?>" href="/m2l/liste/liste.php">FAQ</a></li>
                <li class="ligne right"><a class="<?php if($active==4){echo"active";}?>" href="/m2l/liste/deconnexion.php">Déconnexion</a></li>
            <?php }else{ ?>
                <li class="ligne right"><a class="<?php if($active==3){echo"active";}?>" href="/m2l/inscription.php">Inscription</a></li>
                <li class="ligne right"><a class="<?php if($active==4){echo"active";}?>" href="/m2l/connexion.php">Connexion</a></li>
            <?php }
        ?>
    </ul>
</div>
    <div class="marge">
        <?php
        if(isset($_SESSION['messages'])){
            // Permet d'afficher les nouveaux messages
            foreach($_SESSION['messages'] as $key=>$value){
                echo '<div class="popup '. $value[0].'">';
                echo "<p><strong>".$key."</strong> : ".$value[1]."</p>";
            }
            unset($_SESSION['messages']);
            echo "</div>";
        }
        ?>
       
