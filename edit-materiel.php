<?php $titre = "Parc informatique - Edition des matériels"; ?>
<?php include 'config.php' ?>
<?php include 'entete.php' ?>

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
        <button type="submit">Enregistrer</button>
    </p>
</form>

<?php include 'footer.php' ?>