<!-- Permet la connexion del à la base de donnée  -->
<?php
  $dsn='mysql:host=127.0.0.1;dbname=m2l';
  $username="maison2ligue";
  $password="Maisondeuxligues";
  //créer une connexion PDO
  try{
    $dbh = new PDO($dsn, $username, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $dbh;
  }catch (PDOExeption $ex){
    die("Erreur lors de  la requetes SQL : ".$ex->getMessage());
  }
?>