<?php $active=2; $title = "Liste"; require('../header.php'); require('../sql.php');
    $sql="SELECT id_faq, pseudo, question, dat_question, reponse, dat_reponse FROM faq, user WHERE faq.id_user = user.id_user";
    try {
        $sth = $dbh->query($sql);
        $faq = $sth->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $ex) {
        die("Erreur lors de la requête SQL : " . $ex->getMessage());
    }
?>
    <h1>Liste des questions</h1>
    <table>
        <tr>
            <th>Nr</th>
            <th>Auteur</th>
            <th>Question</th>
            <th>Date Question</th>
            <th>Réponse</th>
            <th>Date Réponse</th>
            <?php
                if($_SESSION['user']['id_usertype']>1){
                    echo "<th>Actions</th>";
                }
            ?>
            
        </tr>
        <?php
            foreach($faq as $question){
                echo "<tr>";
                echo "<td>".$question["id_faq"]."</td>";
                echo "<td>".$question["pseudo"]."</td>";
                echo "<td>".$question["question"]."</td>";
                echo "<td>".$question["dat_question"]."</td>";
                echo "<td>".$question["reponse"]."</td>";
                echo "<td>".$question["dat_reponse"]."</td>";
                if($_SESSION['user']['id_usertype']>1){
                    $sql="SELECT id_ligue FROM user, faq WHERE user.id_user = faq.id_user AND faq.id_faq=:id_faq";
                    try {
                        $sth = $dbh->prepare($sql);
                        $sth->execute(array(
                            ":id_faq" => $question['id_faq']
                        ));
                        $id_lig = $sth->fetch(PDO::FETCH_ASSOC);
                    } catch (PDOException $ex) {
                        die("Erreur lors de la requête SQL : " . $ex->getMessage());
                    }
                    if($_SESSION['user']['id_ligue']==$id_lig['id_ligue'] || $_SESSION['user']['id_usertype'] == 3){
                        echo "<td><a href='editer.php?id=".$question["id_faq"]."'>Modifier</a></td>";
                        echo "<td><a href='supprimer.php?id=".$question["id_faq"]."'>Supprimer</a></td>";
                    }
                }
                echo "</tr>";
            }
        ?>
    </table>
    <br>
    <form action="ajouter.php"><button type="submit" class="btn btn-primary">Ajouter une question <img src="../img/add.png" alt="add"></button></form>
<?php require('../footer.php'); ?>