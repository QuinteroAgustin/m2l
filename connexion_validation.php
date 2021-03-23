<?php 
    $active=4; $title = "Connexion"; require('header.php'); require('sql.php');
    //Le pseudo saisi par l'user va dans la variable $pseudo
    $pseudo=isset($_POST['pseudo']) ? $_POST['pseudo'] :  "";
    //Le mdp saisi par l'user va dans la variable $password
    $password=isset($_POST['password']) ? $_POST['password'] :  "";
    //Si pseudo sup à 8 carac.
    if(strlen($pseudo)>=8){
        //Si mdp sup à 8 carac.
        if(strlen($password)>=8){
            //On rentre la requête sql dans une variable
            $sql="select * from user where pseudo=:pseudo";
            //Lecture du pseudo dans la BDD 
            try {
                $sth = $dbh->prepare($sql);
                $sth->execute(array(
                    ':pseudo' => $pseudo
                ));
                $user = $sth->fetch(PDO::FETCH_ASSOC);
            } //Gestion d'erreurs
            catch (PDOException $ex) {
                die("Erreur lors de la requête SQL : " . $ex->getMessage());
            }
            if($pseudo === $user['pseudo'] && password_verify($password,$user['mdp'])){
                unset($user["mdp"]);
                $_SESSION['user']=$user;
                $_SESSION['messages']=array(
                    "connexion" => ["green", "Vous vous êtes bien connecté"]
                );
                //Redirige vers l'accueil si connexion réussie
                header("Location: index.php");
            //Cas où la connexion échoue
            }else{
                $_SESSION['messages']=array("Account" => ["red", "Ces identifiants sont incorrects"]);
                header("Location: connexion.php");
            }
        }else{
            $_SESSION['messages']=array("Password" => ["red", "Vous avez rentré un mot de passe trop court"]);
            header("Location: connexion.php");
        }
    }else{
        $_SESSION['messages']=array("Pseudo" => ["red", "Vous avez rentré un pseudo trop court"]);
        header("Location: connexion.php");
    }
?>