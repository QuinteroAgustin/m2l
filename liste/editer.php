<?php $active=2; $title = "Editer"; require('../header.php'); ?>
  <h1>Modifier une question / Répondre</h1>
  <form id="editer" action="liste.php" method="post">
    <h3>Question</h3>
    <textarea name="question" id="question" rows="10" cols="50" >Est ce que le ballon est rond ?</textarea>
    <h3>Réponse</h3>
    <textarea name="reponse" id="reponse" rows="10" cols="50" >Bien sûr que oui</textarea>
    <br></br>
    <input type="submit" value="Confirmer"/>
    <input type="reset" value="Vider" />
  </form>
  <br>
  <a href="liste.php"><input type="submit" value="Retour"></a>
<?php require('../footer.php'); ?>