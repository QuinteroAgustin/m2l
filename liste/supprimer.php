<?php $active=2; $title = "Supprimer"; require('../header.php'); ?>
  <h1>Supprimer une question</h1>
  <h3>Question</h3>
  <form action="liste.php" method="POST">
    <textarea name="question" id="question" rows="10" cols="50" >Est ce que le ballon est rond ?</textarea>
    <h3>Réponse</h3>
    <textarea name="reponse" id="reponse" rows="10" cols="50" >Bien sûr que oui</textarea>
    <br>
    <br>
    <input type="submit" value="Supprimer">
  </form>
  </br>
  <a href="liste.php"><input type="submit" value="Annuler"></a>
  <br>
<?php require('../footer.php'); ?>     