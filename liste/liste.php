<?php $active=2; $title = "Liste"; require('../header.php'); require('../sql.php');
    $sql="select * from faq";
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
            <th>Réponse</th>
            <th>Date</th>
            <th>Actions</th>
        </tr>
        <?php
            foreach($faq as $question){
                echo "<tr>";
                echo "<td>".$question["id_faq"]."</td>";
                echo "<td>".$question["id_user"]."</td>";
                echo "<td>".$question["question"]."</td>";
                echo "<td>".$question["reponse"]."</td>";
                echo "<td>".$question["dat_question"]."</td>";
                echo "<td><a href='editer.php'>Modifier</a></td>";
                echo "<td><a href='supprimer.php'>Supprimer</a></td>";
                echo "</tr>";
            }
        ?>
    </table>
    <br>
    <form action="ajouter.php"><button type="submit" class="btn btn-primary">Ajouter une question <img src="../img/add.png" alt="add"></button></form>
<?php require('../footer.php'); ?>