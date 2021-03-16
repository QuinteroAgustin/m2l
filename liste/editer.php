<?php $active=2; $title = "Editer"; require('../header.php'); require('../sql.php') ?>
<?php
if(isset($_GET['id'])){
    $id = isset($_GET['id'])?$_GET['id']:null;
    $sql = "SELECT question, reponse FROM faq WHERE id_faq=:id";
    try {
    $sth = $dbh->prepare($sql);
    $sth->execute(array(
    ':id' => $id
    ));
    $question=$sth->fetch(PDO::FETCH_ASSOC);
    } catch ( PDOException $ex) {
    die("Erreur lors de la requête SQL : ".$ex->getMessage());
    }
}

?>
  
  <h1>Modifier une question / Répondre</h1>
  <form id="editer" action="editer_validation.php" method="post">
    <h3>Question</h3>
    <textarea name="question" id="question" rows="10" cols="50" ><?= $question['question'];?></textarea>
    <h3>Réponse</h3>
    <textarea name="reponse" id="reponse" rows="10" cols="50" ><?= $question['reponse'];?></textarea>
    <br></br>
    <input type="submit" value="Confirmer"/>
    <input type="reset" value="Vider" />
  </form>
  <br>
  <a href="liste.php"><input type="submit" value="Retour"></a>
<?php require('../footer.php'); ?>