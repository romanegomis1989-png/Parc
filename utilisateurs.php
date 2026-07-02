<?php $titre = "Parc informatique - Utilisateurs"; ?>
<?php include 'config.php' ?>
<?php include 'entete.php' ?>

<?php

$pdo = new PDO('mysql:host=' . HOST . ';dbname=' . DB_NAME . ';charset=utf8mb4', USER, PWD);
$requete = $pdo->query('SELECT utilisateurs.*, services.nom AS nom_service
                         FROM utilisateurs
                         LEFT JOIN services ON utilisateurs.id_service = services.id');
$utilisateurs = $requete->fetchAll(PDO::FETCH_ASSOC);

?>



<h1>Parc informatique</h1>
<h2>Liste des utilisateurs</h2>

<a href=""><img src="images/pencil-plus.svg" style="height: 20px;"/> Ajouter un utilisateur</a>
<table>
    <thead>
        <tr>
            <th class="col-id">ID</th>
            <th class="col-nom">Nom</th>
            <th class="col-prenom">Prénom</th>
            <th class="col-email">Email</th>
            <th class="col-service">Service</th>
            <th class="col-commande"></th>

        </tr>
  </thead>
  <tbody>
    <?php
        foreach ($utilisateurs as $utilisateur) {
            echo '<tr>';
            echo '<td>' . $utilisateur['id'] . '</td>';
            echo '<td>' . $utilisateur['nom'] . '</td>';
            echo '<td>' . $utilisateur['prenom'] . '</td>';
            echo '<td>' . $utilisateur['email'] . '</td>';
            echo '<td>' . $utilisateur['nom_service'] . '</td>';
            echo '<td><a href=""><img src="images/pencil.svg" style="height: 20px;"/></a>&nbsp;<a href=""><img src="images/trash.svg" style="height: 20px;"/></a></td>';
            echo '</tr>';
    }
    ?>
  </tbody>
</table>

<?php include 'footer.php' ?>