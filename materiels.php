<?php $titre = "Parc informatique - Liste des matériels"; ?>
<?php include 'entete.php' ?>

<?php

$pdo = new PDO('mysql:host=localhost;dbname=parc_informatique;charset=utf8mb4', 'root', 'FwJiMeCdqNc0nbFT');
$materiels = $pdo->query('SELECT * FROM materiels')->fetchAll(PDO::FETCH_ASSOC);

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
        </tr>
  </thead>
  <tbody>
        <tr>
            <td>SN-001-ABC</td>
            <td>1</td>
            <td>ThinkPad X1 Carbon</td>
            <td>2023-03-15</td>
            <td>1299.99</td>
        </tr>
        <tr>
            <td>SN-002-DEF</td>
            <td>2</td>
            <td>MacBook Pro 14</td>
            <td>2023-07-22</td>
            <td>2199.00</td>
        </tr>
        <tr>
            <td>SN-003-GHI</td>
            <td>1</td>
            <td>ThinkPad E15</td>
            <td>2024-01-10</td>
            <td>899.50</td>
        </tr>
  </tbody>
</table>

<?php include 'footer.php' ?>