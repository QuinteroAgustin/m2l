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
<br>
<h2>Maison des Ligues</h2>
<h3>Ajouter une question</h3>
<form id="Ajout" action="liste.php" method="post">
  <label for="Question" >Question</label></br>
  <textarea name="question" id="question" rows="10" cols="50">Poser votre question</textarea></br>
  </br>
  <input type="submit" value="Enregistrer"/>
  <input type="reset" value="Annuler" />
  </form>
</p>
</body>
</html>