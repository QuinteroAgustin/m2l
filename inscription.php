<?php $active=3; $title = "Inscription"; require('header.php'); ?>
    <div class="center">
        <h1>S'inscrire</h1>
        <!-- Formulaire -->
            <form action="inscription_validation.php" method="post">
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
                    <option value="2" selected="selected">Ligue de basket</option>
                    <option value="3">Ligue de volley</option>
                    <option value="4">Ligue de handball</option>
                    <option value="5">Ligue de football</option>
                </select>
                <br>
                <p>* : Champs obligatoires</p>
                <p><a href="connexion.php">Déjà inscrit ?</a></p></body>
                <input name="submit" type="submit" value="S'inscrire">
            </form>
    </div>
<?php require('footer.php'); ?>