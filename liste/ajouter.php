<?php $active=2; $title = "Ajouter"; require('../header.php'); ?>
  <h1>Maison des Ligues</h1>
  <h2>Ajouter une question à la FAQ</h2>
  <form id="Ajout" action="ajouter_validation.php" method="post">
    <label for="Question" >Ecrivez votre question :</label><br>
    <textarea name="question" id="question" rows="10" cols="50"></textarea></br>
    </br>
    <input type="submit" value="Soumettre"/>
    <input type="reset" value="Vider" />
  </form>
  <br>
  <a href="liste.php"><input type="submit" value="Annuler"/></a>
<?php require('../footer.php'); ?> 