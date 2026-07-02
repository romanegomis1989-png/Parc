<?php $titre = "Parc informatique - Liste des matériels"; ?>
<?php include 'config.php' ?>
<?php include 'entete.php' ?>

<?php

$pdo = new PDO('mysql:host=' . HOST . ';dbname=' . DB_NAME . ';charset=utf8mb4', USER, PWD);
$requete = $pdo->query('SELECT * FROM materiels');
$materiels= $requete->fetchAll(PDO::FETCH_ASSOC);

?>



<h1>Parc informatique</h1>
<h2>Liste des matériels</h2>

<a href="edit-materiel.php"><img src="images/pencil-plus.svg" style="height: 20px;"/> Ajouter un matériel</a>

<table>
    <thead>
        <tr>
            <th class="col-no-serie">Numéro de série</th>
            <th class="col-id">Marque</th>
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
            echo '<td><a href=""><img src="images/pencil.svg" style="height: 20px;"/></a>&nbsp;<a href=""><img src="images/trash.svg" style="height: 20px;"/></a></td>';
            echo '</tr>';
    }
    ?>
  </tbody>
</table>

<?php include 'footer.php' ?>

