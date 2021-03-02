<?php 
    $active=4; $title = "Connexion"; require('header.php'); require('sql.php');
    $pseudo=isset($_POST['pseudo']) ? $_POST['pseudo'] :  "";
    $password=isset($_POST['password']) ? $_POST['password'] :  "";
    $sql="select * from user where pseudo=:pseudo AND mdp=:password";
    try {
        $sth = $dbh->prepare($sql);
        $sth->execute(array(
            ':pseudo' => $pseudo,
            ':password' => $password
        ));
        $user = $sth->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $ex) {
        die("Erreur lors de la requête SQL : " . $ex->getMessage());
    }
    unset($user["mdp"]);
    $_SESSION['user']=$user;
    $_SESSION['messages']=array(
        "connexion" => "Vous vous etes bien connecté"
    );
    
?>