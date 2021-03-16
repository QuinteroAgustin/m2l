<?php $active=2; $title = "Editer"; require('../header.php'); require('../sql.php') ?>
<?php
$submit=$_POST['submit']?$_POST['submit']:null;
$id=$_POST['id']?$_POST['id']:null;
$question=$_POST['question']?$_POST['question']:null;
$reponse=$_POST['reponse']?$_POST['reponse']:null;
    if($submit){
        $sql ="UPDATE faq SET question=:question, reponse=:reponse, dat_reponse=CURRENT_TIMESTAMP WHERE id_faq=:id";
        try {
          $sth = $dbh->prepare($sql);
          $sth->execute(array(
            ':question' => $question,
            ':reponse' => $reponse,
            ':id' => $id
          ));
        } catch (PDOException $ex){
          die("Erreur lors de la rêquete SQL : ".$ex->getMessage());
        }
        $_SESSION['messages']=array(
          "FAQ" => "Le message à été modifié"
        );
    }
    header("Location: liste.php");
?>