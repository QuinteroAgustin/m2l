<?php
$sql = "update faq set question=:question where id_user=:id_user";
try {
$sth = $dbh->prepare($sql);
$sth->execute(array(
':question' => $question,
':id_user' => $_SESSION['user']['id_user']
));
} catch ( PDOException $ex) {
die("Erreur lors de la requête SQL : ".$ex->getMessage());
}
echo "<p>".$sth->rowcount()." enregistrement modifié</p>";
?>