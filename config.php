<?php
// Informations d'identification
define('DB_SERVER', '127.0.0.1');
define('DB_USERNAME', 'maison2ligue');
define('DB_PASSWORD', 'Maisondeuxligues');
define('DB_NAME', 'm2l');
 
// Connexion a la base de donnees MySQL 
$conn = mysqli_connect('127.0.0.1', 'maison2ligue', 'Maisondeuxligues', 'm2l');
 
// Verifier la connexion
if($conn === false){
    die("ERREUR : Impossible de se connecter. " . mysqli_connect_error());
}
?>