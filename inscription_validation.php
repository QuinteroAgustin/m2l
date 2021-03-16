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
                if($password==$password2) {
                    $sql="SELECT pseudo, mail FROM user WHERE pseudo LIKE :pseudo OR mail lIKE :email";
                    try{
                        $sth = $dbh->prepare($sql);
                        $sth->execute(array(
                            ":pseudo" => $pseudo,
                            ":email" => $email
                        ));
                        $user = $sth->fetch(PDO::FETCH_ASSOC);
                    }catch (PDOException $ex){
                        die("Erreur lors de la requête SQL : " . $ex->getMessage());
                    }
                    if(!($user['mail'] == $email || $user['pseudo']==$pseudo)){
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
                        } catch (PDOException $ex) {
                            die("Erreur lors de la requête SQL : " . $ex->getMessage());
                        }

                        $_SESSION['messages']=array(
                            "inscription" => "Vous vous êtes bien inscrit !"
                        );
                        header("Location: connexion.php");
                    }else{
                        $_SESSION['messages']=array("Password" => "Cet utilisateur ou email existe déjà.");
                        header("Location: inscription.php");
                    }
                }else{
                    $_SESSION['messages']=array("Password" => "Les mots de passe ne sont pas identiques");
                    header("Location: inscription.php");
                }
            }else{
            $_SESSION['messages']=array("Password" => "Vous avez rentré un mot de passe trop court");
            header("Location: inscription.php");
            }
        }else{
            $_SESSION['messages']=array("Pseudo" => "Vous avez rentré un pseudo trop court");
            header("Location: inscription.php");
        }
    }else{
        $_SESSION['messages']=array("tt" => "tt");
        header("Location: inscription.php");
    }
?>