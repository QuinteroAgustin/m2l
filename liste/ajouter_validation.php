<?php
  $active=2; $title = "Ajouter"; require('../header.php'); require('../sql.php');
  $question=isset($_POST['question']) ? $_POST['question'] :  "";
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
  $_SESSION['messages']=array(
    "FAQ" => "Un nouveaux message à été ajouté"
  );
?>