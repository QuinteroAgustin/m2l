<?php 
    $active=3; $title = "Inscription"; require('header.php'); require('sql.php');
    $pseudo=isset($_POST['pseudo']) ? $_POST['pseudo'] :  "";
    $email=isset($_POST['email']) ? $_POST['email'] :  "";
    $password=isset($_POST['password']) ? $_POST['password'] :  "";
    $password2=isset($_POST['password2']) ? $_POST['password2'] :  "";
    $ligue=isset($_POST['ligue']) ? $_POST['ligue'] : '';
    $submit=isset($_POST['submit']);
    if ($submit) {
        if(strlen($pseudo)>=8){
            if(strlen($password)>=8){
                if($_POST['password']==$_POST['password2']) {
                    $password=password_hash($password, PASSWORD_BCRYPT);
                    $sql = "INSERT INTO user (pseudo, mdp, mail, id_usertype, id_ligue) VALUES (:pseudo, :password, :mail, :id_usertype,:id_ligue)";
                    try {
                        $sth = $dbh->prepare($sql);
                        $sth->execute(array(
                            ':pseudo' => $pseudo,
                            ':password' => $password,
                            ':mail' => $email,
                            ':id_usertype' => 1,
                            ':id_ligue' => $ligue
                        ));
                        $user = $sth->fetch(PDO::FETCH_ASSOC);
                    } catch (PDOException $ex) {
                        die("Erreur lors de la requête SQL : " . $ex->getMessage());
                    }

                    $_SESSION['messages']=array(
                        "inscription" => "Vous vous etes bien inscrit"
                    );
                    header("Location: connexion.php");
                }else{
                    $_SESSION['messages']=array("Password" => "Les mots de passe ne sont pas identiques");
                    header("Location: inscription.php");
                }
            }else{
            $_SESSION['messages']=array("Password" => "Vous avez rentrez un mot de passe trop court");
            header("Location: inscription.php");
            }
        }else{
            $_SESSION['messages']=array("Pseudo" => "Vous avez rentrez un pseudo trop court");
            header("Location: inscription.php");
        }
    }else{
        $_SESSION['messages']=array("tt" => "tt");
        header("Location: inscription.php");
    }
?>