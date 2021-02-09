<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M2L - Inscription</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <div>
        <ul class="navbar">
            <li class="ligne left"><a class="tjaune"href="index.php">Accueil</a></li>
            <li class="ligne left"><a href="liste/liste.php">FAQ</a></li>
            <li class="ligne right"><a class="active"href="inscription.php">Inscription</a></li>
            <li class="ligne right"><a href="connexion.php">Connexion</a></li>
        </ul>
    </div>
    <div class="center">
    <br>
        <h1>S'inscrire</h1>
        <form action="validation.php" method="post">
            <label for="pseudo">*Pseudo : </label>
            <input type="text" id="pseudo" name="pseudo">
            <br><br>
            <label for="email">*Email : </label>
            <input type="text" id="email" name="email">
            <br><br>
            <label for="password">*Mot de passe : </label>
            <input type="password" id="password" name="password">
            <br><br>
            <label for="password2">*Confirmer le mot de passe : </label>
            <input type="password" id="password2" name="password2">
            <br><br>
            <label for="ligue">*Ligue : </label>
            <select name="ligue" id="ligue">
                <option value="1" selected="selected">Ligue de basket</option>
                <option value="2">Ligue de volley</option>
                <option value="3">Ligue de handball</option>
                <option value="4">Ligue de football</option>
            </select>
            <br>
            <p>* : Champs obligatoires</p>
            <p><a href="connexion.php">Déjà inscrit ?</a></p></body>
            <input type="submit" value="S'inscrire">
        </form>
    </div>
<footer>
    <div class="footer">
      <ul class="foot_left">INFOS PRATIQUES</ul>
      <ul class="foot_right">CONTACT</ul>
    </div>
</footer>

<?php

$pseudo = isset($_POST['pseudo']) ? $_POST['pseudo'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$password = isset($_POST['password']) ? $_POST['password'] : '';
$password2 = isset($_POST['password2']) ? $_POST['password2'] : '';
$ligue = isset($_POST['ligue']) ? $_POST['ligue'] : '';
$submit = isset($_POST['submit']);

if (isset($_POST['submit'])) {

    /*On teste si tous les champs sont bien remplis*/
    if(!empty($_POST['pseudo']) and !empty($_POST['email']) and !empty($_POST['password']) and !empty($_POST['password2'])) {

        /*On teste si le mot de passe contient bien au moins 6 caractères*/
        if(strlen($_POST['password'])>=6) {

            /*On teste si les 2 mots de passe sont bien identiques*/
            if ($_POST['password']==$_POST['password2']) {

                /*On crypte le mot de passe*/
                $_POST['password']=md5($_POST['password']);

                /*On se connecte à MySQL et on sélectionne la base*/
                $c = new mysqli("127.0.0.1","root","","m2l");

                /*On crée la requête*/
                $sql = "INSERT INTO user (pseudo, mdp, mail, id_ligue) VALUES (NULL,'".$_POST['pseudo']."','".$_POST['password']."','".$_POST['mail']."')";

                /*Exécute et affiche l'erreur mysql si elle se produit*/
                if(!$c->query($sql)) {
                    printf("Message d'erreur : %s\n", $c->error);
                }

            /*On ferme la connexion*/
            mysqli_close($c);
            }

        else echo "Les mots de passe ne sont pas identiques";
        }
    
    else echo "Le mot de passe est trop court";
    }

else echo "Veuillez saisir tous les champs";
}

?>

</body>
</html>