<?php $active=2; $title = "Supprimer"; require('../header.php'); require('../sql.php') ?>
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
  
  <h1>Supprimer une question</h1>
  <form id="supprimer" action="supprimer_validation.php" method="post">
    <h3>Question</h3>
    <textarea name="question" id="question" rows="10" cols="50" disabled="disabled"><?= $question['question'];?></textarea>
    <h3>Réponse</h3>
    <textarea name="reponse" id="reponse" rows="10" cols="50" disabled="disabled" ><?= $question['reponse'];?></textarea>
    <br></br>
    <input type="text" name="id" value="<?=$id?>" hidden/>
    <input type="submit" name="submit" value="Confirmer"/>
  </form>
  <br>
  <a href="liste.php"><input type="submit" value="Retour"></a>
<?php require('../footer.php'); ?>