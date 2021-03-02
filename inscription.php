<?php $active=3; $title = "Inscription"; require('header.php'); require('sql.php'); ?>
<<<<<<< HEAD
    <div class="center">
        <h1>S'inscrire</h1>
        <form action="" method="post">
=======



<?php
require('config.php');
if (isset($_REQUEST['pseudo'], $_REQUEST['email'], $_REQUEST['password'], $_REQUEST['password2'])){
	// récupérer le nom d'utilisateur et supprimer les antislashes ajoutés par le formulaire
	$pseudo = stripslashes($_REQUEST['pseudo']);
	$pseudo = mysqli_real_escape_string($conn, $pseudo); 
	// récupérer l'email et supprimer les antislashes ajoutés par le formulaire
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($conn, $email);
	// récupérer le mot de passe et supprimer les antislashes ajoutés par le formulaire
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($conn, $password);
	//requête SQL + mot de passe crypté
    $query = "INSERT into `user` (pseudo, email, password)
              VALUES ('$pseudo', '$email', '".hash('sha256', $password)."')";
	// Exécute la requête sur la base de données
    $res = mysqli_query($conn, $query);
    if($res){
       echo "<div class='sucess'>
             <h3>Vous êtes inscrit avec succès.</h3>
             <p>Cliquez ici pour vous <a href='connexion.php'>connecter</a></p>
			 </div>";
    }
}else{
?>    
<div class="center">
 <h1>S'inscrire</h1>
        <form action="index.php" method="post">
>>>>>>> 4e778d9d108cf071eed25f0044dfa2b03a3aef31
            <label for="pseudo">*Pseudo : </label>
            <input type="text" id="pseudo" name="pseudo">
            <br><br>
            <label for="email">*Email : </label>
            <input type="text" id="email" name="email">
            <br><br>
            <label for="password">*Mot de passe : </label>
            <input type="password" id="password" name="password">
            <br><br>
            <label for="password2">*Confirmer le mot de passe : </label>
            <input type="password" id="password2" name="password2">
            <br><br> 
            <label for="ligue">*Ligue : </label>
            <select name="ligue" id="ligue">
                <option value="1" selected="selected">Ligue de basket</option>
                <option value="2">Ligue de volley</option>
                <option value="3">Ligue de handball</option>
                <option value="4">Ligue de football</option>
            </select>
            <br>
            <p>* : Champs obligatoires</p>
            <p><a href="connexion.php">Déjà inscrit ?</a></p></body>
            <input type="submit" value="S'inscrire">
        </form>
<<<<<<< HEAD
    </div>
<?php require('footer.php'); ?>
        
=======
 <?php } ?>
</div>
<?php require('footer.php'); ?>
>>>>>>> 4e778d9d108cf071eed25f0044dfa2b03a3aef31
