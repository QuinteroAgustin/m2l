<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de connexion</title>
</head>
<body>
<h1>M2L</h1>
<H2>Se connecter</H2>

<div class="mb-3 row">
    <label for="inputpseudo" class="col-sm-2 col-form-label">Pseudo</label>
    <div class="col-sm-10">
      <input type="text" class="form-control-plaintext" id="inputpseudo">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
    <div class="col-sm-10">
      <input type="password" class="form-control" id="inputPassword">
    </div>
    <br>
    <div class="col-auto">
    <form action="index.php"><button type="submit" class="btn btn-primary">Se connecter</button></form>
    <br>
    <form action="index.php"><button type="annulatoin" class="btn btn-primary">Annuler</button></form>
</body>
</html>