<?php 
    $active=3; $title = "Inscription"; require('header.php'); require('sql.php');
    //Le pseudo saisi par l'user va dans la variable $pseudo
    $pseudo=isset($_POST['pseudo']) ? $_POST['pseudo'] :  "";
    //Le mail saisi par l'user va dans la variable $email
    $email=isset($_POST['email']) ? $_POST['email'] :  "";
    $password=isset($_POST['password']) ? $_POST['password'] :  "";
    $password2=isset($_POST['password2']) ? $_POST['password2'] :  "";
    $ligue=isset($_POST['ligue']) ? $_POST['ligue'] : '';
    $submit=isset($_POST['submit']);
    //Si cliqué sur submit
    if ($submit) {
        //Si pseudo sup à 8 carac.
        if(strlen($pseudo)>=8){
            //Si mdp sup à 8 carac.
            if(strlen($password)>=8){
                //Si 2 mdp identiques
                if($password==$password2) {
                    $sql="SELECT pseudo, mail FROM user WHERE pseudo LIKE :pseudo OR mail lIKE :email";
                    //Lecture du pseudo et du mail dans la BDD pour comparer si ceux-ci existent déjà ou non
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
                    //Si le mail ou le pseudo n'existe pas déjà alors on peut s'inscrire
                    if(!($user['mail'] == $email || $user['pseudo']==$pseudo)){
                        //On crypte le mdp
                        $password=password_hash($password, PASSWORD_BCRYPT);
                        //On insère les champs saisis dans la BDD avec la requête SQL
                        $sql = "INSERT INTO user (pseudo, mdp, mail, id_usertype, id_ligue) VALUES (:pseudo, :password, :mail, :id_usertype,:id_ligue)";
                        //Insertion des infos de l'user dans la BDD
                        try {
                            $sth = $dbh->prepare($sql);
                            $sth->execute(array(
                                ':pseudo' => $pseudo,
                                ':password' => $password,
                                ':mail' => $email,
                                ':id_usertype' => 1,
                                ':id_ligue' => $ligue
                            ));
                        } //Gestion d'erreurs
                        catch (PDOException $ex) {
                            die("Erreur lors de la requête SQL : " . $ex->getMessage());
                        }

                        $_SESSION['messages']=array(
                            "inscription" => "Vous vous êtes bien inscrit !"
                        );
                        header("Location: connexion.php");
                    } //Cas où la connexion échoue
                    else{
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