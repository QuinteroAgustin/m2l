<?php
  $dns='mysql:host=127.0.0.1;dbname=m2l';
  $username="maison2ligue";
  $password="Maisondeuxligues";
  //créer une connexion PDO
  try{
    $con = new PDO($dns, $username, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
    return $con;
  }catch (PDOExeption $ex){
    die("Erreur lors de  la requetes SQL : ".$ex->getMessage());
  }
?>