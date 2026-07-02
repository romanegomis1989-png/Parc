<?php $titre = "Parc informatique - Edition des matériels"; ?>
<?php include 'config.php' ?>
<?php include 'entete.php' ?>
<?php
    //enregistrer le matériel dans la base de données
    //if(isset($_POST['enregistrer']))
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $no_serie = $_POST['no_serie'];
        $id_marque = $_POST['id_marque'];
        $modele = $_POST['modele'];
        $date_achat = $_POST['date_achat'];
        $prix_achat = $_POST['prix_achat'];
    
        echo "On a cliqué sur Enregistrer";
    // Validation des données

    // Connexion base de données

    $pdo = new PDO ('mysql:host=' . HOST . ';dbname=' . DB_NAME . ';charset=utf8mb4',USER, PWD);
    $requete = $pdo->prepare('INSERT INTO materiels(no_serie, id_marque, modele, date_achat, prix_achat) VALUES (:no_serie, :id_marque, :modele, :date_achat, :prix_achat);');
    $requete->execute([':no_serie'=>$no_serie, 'id_marque'=>$id_marque, 'modele'=>$modele, 'date_achat'=>$date_achat, 'prix_achat'=>$prix_achat]);
    }
    else {
        echo "On a ouvert la page";
    }



?>

<h1>Parc informatique</h1>
<h2>Edition des matériels</h2>
<p>
    <a href="materiels.php"><img src="images/arrow-back-up.svg" style="height: 20px;"/> Retour à la liste des matériels</a>
</p>

<form action="" method="post">
    <p>
        <label for="no_serie">N° de série</label><br>
        <input type="text" id="no_serie" name="no_serie" required>
    </p>
    <p>
        <label for="id_marque">Marque</label><br>
        <input type="text" id="id_marque" name="id_marque" required>
    </p>
    <p>
        <label for="modele">Modèle</label><br>
        <input type="text" id="modele" name="modele" required>
    </p>
    <p>
        <label for="date_achat">Date d'achat</label><br>
        <input type="text" id="date_achat" name="date_achat" required>
    </p>
    <p>
        <label for="prix_achat">Prix</label><br>
        <input type="text" id="prix_achat" name="prix_achat" required>
    </p>
    <p>
        <button type="submit" id="enregistrer" name="enregistrer">Enregistrer</button>
    </p>
</form>

<?php include 'footer.php' ?>