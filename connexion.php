<?php $active=4; $title = "Connexion"; require('header.php');?>
  <div class="center">
    <h1>Se connecter</h1>
    <form action="connexion_validation.php" method="post">
      <label for="pseudo">Pseudo :</label>
      <input type="text" name="pseudo" id="pseudo">
      <br><br>
      <label for="password">Mot de passe :</label>
      <input type="password" name="password" id="password">
      <br>
      <p><a href="inscription.php">Pas encore inscrit ?</a></p>
      <input type="submit" name="submit" value="se connecter" class="box-button">
    </form>
  </div>
<?php require('footer.php'); ?>
