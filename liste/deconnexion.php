<?php $active=4; $title = "Déconnexion"; require('../header.php'); 
    session_unset();
?>
    <div class="center">
        <h1>Maison des Ligues</h1>
        <h2>Déconnexion</h2>
        <img src="../img/logo.png" alt="Logo_page" title="Deconnexion" id="logo" class="centerpng"/>

        <p>Vous vous êtes bien déconnecté !</p>
        <a href="../index.php"><input type="submit" value="Retour à la page d'accueil"></a>
    </div>
<?php require('../footer.php'); ?>