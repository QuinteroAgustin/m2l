<?php $active=5; $title = "Editer Profile"; require('../header.php'); require('../sql.php') ?>
<?php
//messages d'erreurs
$messages = array();

//Récupère l'id de l'utilisateur
if(isset($_SESSION['user'])){
    $id = isset($_SESSION['user']['id_user'])?$_SESSION['user']['id_user']:null;
    //Prend toutes les données de l'utilisateur
    $sql = "SELECT * FROM user WHERE id_user=:id";
    try {
        $sth = $dbh->prepare($sql);
        $sth->execute(array(
        ':id' => $id
        ));
        $response_user=$sth->fetch(PDO::FETCH_ASSOC);
    //Gestion des erreurs
    } catch ( PDOException $ex) {
        die("Erreur lors de la requête SQL : ".$ex->getMessage());
    }

    //SQL pour la liste des ligues
    $sql_ligue = "SELECT * FROM ligue";
    try {
        $sth = $dbh->prepare($sql_ligue);
        $sth->execute(array(
        ':id' => $id
        ));
        $response_ligue=$sth->fetchAll(PDO::FETCH_ASSOC);
    //Gestion des erreurs
    } catch ( PDOException $ex) {
        die("Erreur lors de la requête SQL : ".$ex->getMessage());
    }

    //Partie update du profil
    $submit = isset($_POST['submit'])? $_POST['submit'] : NULL;
    $mail = isset($_POST['mail'])? $_POST['mail'] : NULL;
    $password = isset($_POST['password'])? $_POST['password'] : NULL;
    $password2 = isset($_POST['password2'])? $_POST['password2'] : NULL;
    $ligue = isset($_POST['ligue'])? $_POST['ligue'] : NULL;

    if($submit){
        if(empty(trim($mail))){
            $messages[] = "L'EMAIL est obligatoire.";
        }else{
            $mail = filter_var($mail, FILTER_SANITIZE_EMAIL);
            if(filter_var($mail, FILTER_VALIDATE_EMAIL) === false){
                $messages[] = "L'EMAIL n'est pas un email valide.";
            }
        }

        if(empty(trim($password))){
            $messages[] = "Le MOT DE PASSE est obligatoire.";
        }

        if(empty(trim($password2))){
            $messages[] = "La vérification de MOT DE PASSE est obligatoire.";
        }

        if(empty(trim($ligue))){
            $messages[] = "La ligue est obligatoire.";
        }

        if($password != $password2){
            $messages[] = "Les mots de passes sont différents.";
        }

        //si il n'y a pas de messages d'erreurs
        if(empty($messages)){
            $hash_pwd = password_hash($password, PASSWORD_BCRYPT);

            $sql_update = "UPDATE user SET mdp = :mdp, mail=:mail, id_ligue=:id_ligue WHERE id_user =:id_user";
            try {
                $sth = $dbh->prepare($sql_update);
                $sth->execute(array(
                ':id_user' => $id,
                ':mdp' => $hash_pwd,
                ':mail' => $mail,
                ':id_ligue' => $ligue
                ));
            //Gestion des erreurs
            } catch ( PDOException $ex) {
                die("Erreur lors de la requête SQL : ".$ex->getMessage());
            }
            if($sth->rowCount() == 1){
                $_SESSION['messages']=array("Account" => ["green", "Profil mis a jour"]);
                header("Location: profile.php");
            }else{
                $_SESSION['messages']=array("Account" => ["red", "Profil non mis a jour"]);
                header("Location: profile.php");
            }
            
        }
    }

}else{
    //si il n'est pas connecté
    header('Location: /m2l/connexion.php');
}
?>
  <h1>Modifier mon profil</h1>
    <?php
    if (count($messages) > 0) {
        echo "<ul>";
        foreach ($messages as $message) {
            echo "<li>" . $message . "</li>";
        }
        echo "</ul>";
    }
    ?>  
    <form id="editer" action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
        <p>Edition du profil de <?= $response_user['pseudo'] ?></p>
        <label for="mail">Adresse mail :</label>
        <input type="email" name="mail" id="mail" value="<?= $response_user['mail'] ?>"><br><br>

        <label for="password">Mot de passe :</label>
        <input type="password" name="password" id="password"><br><br>

        <label for="password2">Vérification du mot de passe :</label>
        <input type="password" name="password2" id="password2"><br><br>

        <label for="ligue">Ligue : </label>
        <select name="ligue" id="ligue">
        <option value=""selected>--Please choose an option--</option>
        <?php
            foreach($response_ligue as $ligue){
                $selectede = NULL;
                if($ligue['id_ligue'] == $response_user['id_ligue']){
                    $selectede = "selected";
                }else{
                    $selectede = NULL;
                }
                echo "<option value=\"".$ligue['id_ligue']."\" $selectede>".$ligue['lib_ligue']."</option>";
            }
        ?>
    </select><br><br>

    <table>
    <tr>
        <td><input class="button green full" type="submit" name="submit" value="Editer"/></td>
        <td><input class="button red" type="reset" value="Vider" /></td>
    </tr>
    </table>
  </form>
<?php require('../footer.php'); ?>