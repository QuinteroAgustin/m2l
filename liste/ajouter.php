<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M2L - Question </title>
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
<div>
  <ul class="navbar">
      <li class="ligne left"><a class="tjaune" href="../index.php">Accueil</a></li>
      <li class="ligne left"><a class="active" href="liste.php">FAQ</a></li>
      <li class="ligne right"><a href="deconnexion.php">Déconnexion</a></li>
  </ul>
</div>
<div class="marge">
<h1>Maison des Ligues</h1>
<h2>Ajouter une question</h2>
<form id="Ajout" action="liste.php" method="post">
  <label for="Question" >Ecrivez votre question :</label><br>
  <br>
  <textarea name="question" id="question" rows="10" cols="50"></textarea></br>
  </br>
  <input type="submit" value="Soumettre"/>
  <input type="submit" value="Annuler"/>
  </form>
  </p>
</div>
  <footer>
    <div class="footer">
      <ul class="foot_left">INFOS PRATIQUES</ul>
      <ul class="foot_right">CONTACT</ul>
        </div>
  </footer>
</body>
</html>