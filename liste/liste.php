<?php $active=2; $title = "Liste"; require('../header.php'); ?>
    <h1>Liste des questions</h1>
    <table>
        <tr>
            <th>Nr</th>
            <th>Auteur</th>
            <th>Question</th>
            <th>Réponse</th>
            <th>Actions</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Dav</td>
            <td>Est ce que le ballon est rond ?</td>
            <td>Bien sûr que oui</td>
            <td><a href="editer.php">Modifier</a></td>
            <td><a href="supprimer.php">Supprimer</a></td>
        </tr>
        <tr>
            <td>2</td>
            <td>Gus</td>
            <td>Que signifie PSG ?</td>
            <td>Pas sûr de gagner</td>
            <td><a href="editer.php">Modifier</a></td>
            <td><a href="supprimer.php">Supprimer</a></td>
        </tr>
    </table>
    <br>
    <form action="ajouter.php"><button type="submit" class="btn btn-primary">Ajouter une question</button></form>
<?php require('../footer.php'); ?>