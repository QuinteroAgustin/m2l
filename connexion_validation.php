<?php 
    $active=4; $title = "Connexion"; require('header.php'); require('sql.php');
    $pseudo=isset($_POST['pseudo']) ? $_POST['pseudo'] :  "";
    $password=isset($_POST['password']) ? $_POST['password'] :  "";
    if(strlen($pseudo)>=8){
        if(strlen($password)>=8){
            $sql="select * from user where pseudo=:pseudo";
            try {
                $sth = $dbh->prepare($sql);
                $sth->execute(array(
                    ':pseudo' => $pseudo
                ));
                $user = $sth->fetch(PDO::FETCH_ASSOC);
            } catch (PDOException $ex) {
                die("Erreur lors de la requête SQL : " . $ex->getMessage());
            }
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            if($pseudo === $user['pseudo'] && password_verify($password,$hashed_password)){
                unset($user["mdp"]);
                $_SESSION['user']=$user;
                $_SESSION['messages']=array(
                    "connexion" => "Vous vous etes bien connecté"
                );
                header("Location: index.php");
            }else{
                $_SESSION['messages']=array("Account" => "Ces identifiants sont incorrecte");
                header("Location: connexion.php");
            }
            
        }else{
            $_SESSION['messages']=array("Password" => "Vous avez rentrez un mot de passe trop court");
            header("Location: connexion.php");
        }
    }else{
        $_SESSION['messages']=array("Pseudo" => "Vous avez rentrez un pseudo trop court");
        header("Location: connexion.php");
    }
?>