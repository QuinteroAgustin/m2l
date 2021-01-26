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
    <div class="marge">
    <br>
        <h1>S'inscrire</h1>
        <form action="index.php" method="POST">
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
                <option value="l1" selected="selected">Ligue de basket</option>
                <option value="l1">Ligue de volley</option>
                <option value="l1">Ligue de handball</option>
                <option value="l1">Ligue de football</option>
            </select>
            <br>
            <p>* : Champs obligatoires</p>
            <p><a href="connexion.php">Déjà inscrit ?</a></p></body>
            <input type="submit" value="S'inscrire">
        </form>
    </div>

</html>