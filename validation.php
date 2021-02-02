<?php
  $servername="127.0.0.1";
  $username="maison2ligue";
  $password="Maisondeuxligues";
  //créer une connexion PDO
  $conn= new mysqli($servername, $username, $password);
  //test connexion
  if($conn->connect_error){
    die("Connexion échoué".$conn->connect_error);
  }
  $sql="USE m2l";
  $result = $conn->query($sql);

  $pseudo = $_POST['pseudo'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $password2 = $_POST['password2'];
  $ligue = $_POST['ligue'];

  if(strlen($pseudo) >= 8){
    if(strlen($email) >= 10){
        if($ligue == 1 || $ligue == 2 || $ligue == 3 || $ligue == 4){
            if(strlen($password)>= 8 && $password === $password2){
                $sql="INSERT INTO user (pseudo, mdp, mail, id_ligue) VALUES (".$pseudo.",".$password.",".$email.",".$ligue.")";
                $conn->query($sql);
                echo "User créer avec success";

            }else{
                echo 'Le mot de passe est invalid ou trop court</br>';
            }
        }else{
            echo 'La ligue '.$ligue.' est invalid</br>';
        }
    }else{
        echo 'L\'email '.$email.' est trop courte</br>';
    }
  }else{
      echo 'Le pseudo '.$pseudo.' est trop court</br>';
  }

?>