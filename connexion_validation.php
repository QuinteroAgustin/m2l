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
    
?>
    <div class="center">
        <h1>Maison des Ligues</h1>
        <h2>Connexion</h2>
        <img src="img/logo.png" alt="Logo_page" title="Deconnexion" id="logo" class="centerpng"/>

        <p>Vous vous êtes bien connecté <?= $_SESSION["user"]["pseudo"]; ?> !</p>
        <a href="index.php"><input type="submit" value="Retour à la page d'accueil"></a>
    </div>
<?php require('footer.php'); ?>