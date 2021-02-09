<?php $active=4; $title = "Connexion"; require('header.php'); require('sql.php'); ?>
  <div class="center">
    <br>
    <h1>Se connecter</h1>
    <form action="<?=$_SERVER['PHP_SELF'];?>" methode="POST">
      <label for="pseudo">Pseudo :</label>
      <input type="text" name="pseudo" id="pseudo">
      <br><br>
      <label for="password">Mot de passe :</label>
      <input type="password" name="password" id="password">
      <br>
      <p><a href="inscription.php">Pas encore inscrit ?</a></p>
      <input type="submit" value="se connecter" class="box-button">
    </form>
  </div>
<?php require('footer.php'); ?>