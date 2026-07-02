<?php $titre = "Parc informatique - Entrées/Sorties"; ?>
<?php include 'config.php' ?>
<?php include 'entete.php' ?>

<?php

$pdo = new PDO('mysql:host=' . HOST . ';dbname=' . DB_NAME . ';charset=utf8mb4', DB_USER, DB_PASS);
$requete = $pdo->query('SELECT utilise.*, utilisateurs.nom AS nom_utilisateur, utilisateurs.prenom AS prenom_utilisateur, materiels.no_serie, materiels.modele
                         FROM utilise
                         LEFT JOIN utilisateurs ON utilise.id_utilisateur = utilisateurs.id
                         LEFT JOIN materiels ON utilise.id_materiel = materiels.id');
$mouvements = $requete->fetchAll(PDO::FETCH_ASSOC);

?>



<h1>Parc informatique</h1>
<h2>Entrées/Sorties</h2>

<table>
    <thead>
        <tr>
            <th class="col-id">ID</th>
            <th class="col-utilisateur">Utilisateur</th>
            <th class="col-materiel">Matériel</th>
            <th class="col-date-debut">Date de début</th>
            <th class="col-date-fin-prevue">Date de fin prévue</th>
            <th class="col-date-fin">Date de fin</th>
            <th class="col-commande"></th>

        </tr>
  </thead>
  <tbody>
    <?php
        foreach ($mouvements as $mouvement) {
            echo '<tr>';
            echo '<td>' . $mouvement['id'] . '</td>';
            echo '<td>' . $mouvement['prenom_utilisateur'] . ' ' . $mouvement['nom_utilisateur'] . '</td>';
            echo '<td>' . $mouvement['modele'] . ' (' . $mouvement['no_serie'] . ')</td>';
            echo '<td>' . $mouvement['date_debut'] . '</td>';
            echo '<td>' . $mouvement['date_fin_prevue'] . '</td>';
            echo '<td>' . $mouvement['date_fin'] . '</td>';
            echo '<td><a href="">Modifier</a>&nbsp;<a href="">Supprimer</a></td>';
            echo '</tr>';
    }
    ?>
  </tbody>
</table>

<?php include 'footer.php' ?>