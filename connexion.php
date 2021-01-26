<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M2L - Connexion</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
  <div>
    <ul class="navbar">
      <li class="ligne left"><a class="tjaune"href="index.php">Accueil</a></li>
      <li class="ligne left"><a href="liste/liste.php">FAQ</a></li>
      <li class="ligne right"><a href="inscription.php">Inscription</a></li>
      <li class="ligne right"><a class="active" href="connexion.php">Connexion</a></li>
    </ul>
  </div>
  <div class="marge">
    <h1>Se connecter</h1>
    <form action="index.php" methode="POST">
      <label for="pseudo">Pseudo</label>
      <input type="text" name="pseudo" id="pseudo">
      <br><br>
      <label for="password">Mot de passe</label>
      <input type="password" name="password" id="password">
      <br>
      <p><a href="inscription.php">déjà inscrit ?</a></p>
      <input type="submit" value="Se connecter">
    </form>
  </div>
</body>
</html>