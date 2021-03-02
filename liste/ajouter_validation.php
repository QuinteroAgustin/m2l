<?php
$sql ="insert into faq (question,id_user)";
$sql.="values (:question,:id_user)";
try {
  $sth = $dbh->prepare($sql);
  $sth->execute(array(
    ':question' => $question,
    ':id_user' => $_SESSION['user']['id_user']
  ));
} catch (PDOException $ex){
  die("Erreur lors de la rêquete SQL : ".$ex->getMessage());
}
echo "<p>".$sth->rowcount()."enregistrement ajouté </p>";
?>