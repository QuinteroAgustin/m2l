<?php $active=2; $title = "Ajouter"; require('../header.php'); ?>
<?php
$sql ="insert into faq (id_faq,question,dat_question,id_user)";
$sql.="values (:id_faq,;question,;dat_question,;id_user)";
try {
  $sth = $dbh->prepare($sql);
  $sth->execute(array(
    ':id_faq' => "",
    ':question' => "",
    ':dat_question' => "",
    ':id_user' => ""
  ));
}
?>
  <h1>Maison des Ligues</h1>
  <h2>Ajouter une question à la FAQ</h2>
  <form id="Ajout" action="liste.php" method="post">
    <label for="Question" >Ecrivez votre question :</label><br>
    <textarea name="question" id="question" rows="10" cols="50"></textarea></br>
    </br>
    <input type="submit" value="Soumettre"/>
    <input type="reset" value="Vider" />
  </form>
  <br>
  <a href="liste.php"><input type="submit" value="Annuler"/></a>
<?php require('../footer.php'); ?> 