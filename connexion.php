<?php $active=4; $title = "Connexion"; require('header.php'); require('sql.php'); ?>
<<<<<<< HEAD
<?php
  $pseudo=isset($_POST['pseudo']) ? $_POST['pseudo'] :  "";
  $password=isset($_POST['password']) ? $_POST['password'] :  "";
  
?>
=======
 <?php
  // Démarre la session
  session_start(); 

  if (isset($_POST['pseudo'])){
    $pseudo = stripslashes($_REQUEST['pseudo']);
    $pseudo = mysqli_real_escape_string($conn, $pseudo);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($conn, $password);
      $query = "SELECT * FROM `users` WHERE pseudo='$pseudo' and password='".hash('sha256', $password)."'";
    $result = mysqli_query($conn,$query) or die(mysql_error());
    $rows = mysqli_num_rows($result);
    if($rows==1){
        $_SESSION['pseudo'] = $pseudo;
        header("Location: index.php");
    }else{
      $message = "Le nom d'utilisateur ou le mot de passe est incorrect.";
    }
  }
  ?>
>>>>>>> a85c6fc9e3beea5a35c628236ca1380a26f8bb2d
  <div class="center">
    <br>
    <h1>Se connecter</h1>
    <form action="index.php" methode="POST">
      <label for="pseudo">Pseudo :</label>
      <input type="text" name="pseudo" id="pseudo">
      <br><br>
      <label for="password">Mot de passe :</label>
      <input type="password" name="password" id="password">
      <br>
      <p><a href="inscription.php">Pas encore inscrit ?</a></p>
      <input type="submit" value="se connecter" class="box-button">
    </form>
    <?php if($pseudo){echo $pseudo;} ?>
  </div>
<?php require('footer.php'); ?>
