<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>M2L - Inscription</title>
</head>
<body>
    <h1>S'inscrire</h1>
    <form action="index.php" method="POST">
        <label for="pseudo">Pseudo : </label>
        <input type="text" id="pseudo" name="pseudo">
        <br>
        <br>
        <label for="email">Email : </label>
        <input type="text" id="email" name="email">
        <br>
        <br>
        <label for="password">Mot de passe : </label>
        <input type="password" id="password" name="password">
        <br>
        <br>
        <label for="password2">Mot de passe : </label>
        <input type="password" id="password2" name="password2">
        <br>
        <br>
        <label for="ligue">Ligue : </label>
        <select name="ligue" id="ligue">
            <option value="l1" selected="selected">Ligue de basket</option>
            <option value="l1">Ligue de volley</option>
            <option value="l1">Ligue de handball</option>
            <option value="l1">Ligue de football</option>
        </select>
        <br>
        <br>
        <input type="submit" value="S'inscrire">
    </form>
    <a href="index.php">Retourner à l'accueil</a>
</body>
</html>