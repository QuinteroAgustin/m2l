<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M2L - Supprimer</title>
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
    <div>
        <ul class="navbar">
            <li class="ligne left"><a class="tjaune active"href="index.php">Accueil</a></li>
            <li class="ligne left"><a href="liste/liste.php">FAQ</a></li>
            <li class="ligne right"><a href="inscription.php">Inscription</a></li>
            <li class="ligne right"><a href="connexion.php">Connexion</a></li>
        </ul>
    </div>
    <br>
    <div class="marge">
    <h1>Supprimer une question</h1>

    <h3>Question</h3>

    <textarea name="question" id="question" rows="10" cols="50" >Est ce que le ballon est rond ?</textarea>

    <h3>Réponse</h3>

    <textarea name="reponse" id="reponse" rows="10" cols="50" >Bien sûr que oui</textarea>
    <br></br>
    <input type="submit" value="Supprimer" href="../index.php"/>&nbsp;

    <input type="reset" value="Annuler" href="../index.php"/>
    <br></br>
</body>
</html>