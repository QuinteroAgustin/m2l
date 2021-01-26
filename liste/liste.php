<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M2L - Liste</title>
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
    <div>
        <ul class="navbar">
            <li class="ligne left"><a class="tjaune"href="index.php">Accueil</a></li>
            <li class="ligne left"><a class="active" href="liste/liste.php">FAQ</a></li>
            <li class="ligne right"><a href="inscription.php">Inscription</a></li>
            <li class="ligne right"><a href="connexion.php">Connexion</a></li>
        </ul>
    </div>
  <div class="marge">
    <h1>Liste des questions</h1>
    <table>
        <tr>
            <th>Nr</th>
            <th>Auteur</th>
            <th>Question</th>
            <th>Réponse</th>
            <th>Actions</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Dav</td>
            <td>Est ce que le ballon est rond ?</td>
            <td>Bien sûr que oui</td>
            <td><a href="editer.php">Modifier</a></td>
            <td><a href="supprimer.php">Supprimer</a></td>
        </tr>
        <tr>
            <td>1</td>
            <td>Gus</td>
            <td>Que signifie PSG ?</td>
            <td>Pas sûr de gagner</td>
            <td><a href="editer.php">Modifier</a></td>
            <td><a href="supprimer.php">Supprimer</a></td>
        </tr>
    </table>
    <a href="ajouter.php">Ajouter une question</a>
    <a href="../index.php">Retourner à l'accueil</a>
  </div>
</body>
</html>