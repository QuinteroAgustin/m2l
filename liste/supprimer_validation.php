<?php
$active=2; $title = "Ajouter"; require('../header.php'); require('../sql.php');
$submit=isset($_POST['submit'])?$_POST['submit']:null;
$id=isset($_POST['id'])?$_POST['id']:null;
if($submit){
    $sql ="DELETE FROM faq WHERE id_faq=:id_faq";
    try {
        $sth = $dbh->prepare($sql);
        $sth->execute(array(
            ':id_faq' => $id
        ));
    } catch (PDOException $ex){
        die("Erreur lors de la rêquete SQL : ".$ex->getMessage());
    }
    $_SESSION['messages']=array(
        "FAQ" => "Le message à été supprimé"
    );
}
header("Location: liste.php");
?>