<?php $titre = "Parc informatique - Liste des matériels"; ?>
<?php include 'entete.php' ?>

<?php

$pdo = new PDO('mysql:host=localhost;dbname=parc_informatique;charset=utf8mb4', 'root', 'FwJiMeCdqNc0nbFT');
$requete = $pdo->query('SELECT * FROM materiels');
$materiels= $requete->fetchAll(PDO::FETCH_ASSOC);

?>



<h1>Parc informatique</h1>
<h2>Liste des matériels</h2>

<table>
    <thead>
        <tr>
            <th class="col-no-serie">Numéro de série</th>
            <th class="col-id">ID</th>
            <th class="col-produit">Produit</th>
            <th class="col-date-achat">Date d'achat</th>
            <th class="col-prix">Prix</th>
            <th class="col-commande"></th>

        </tr>
  </thead>
  <tbody>
    <?php
        foreach ($materiels as $materiel) {
            echo '<tr>';
            echo '<td>' . $materiel['no_serie'] . '</td>';
            echo '<td>' . $materiel['id_marque'] . '</td>';
            echo '<td>' . $materiel['modele'] . '</td>';
            echo '<td>' . $materiel['date_achat'] . '</td>';
            echo '<td>' . $materiel['prix_achat'] . '</td>';
            echo '<td><a href="">Modifier</a>&nbsp;<a href="">Supprimer</a></td>';
            echo '</tr>';
    }
    ?>
  </tbody>
</table>

<?php include 'footer.php' ?>

