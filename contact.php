<?php $titre = "Parc informatique - Contact"; ?>
<?php include 'entete.php' ?>

<h1>Parc informatique</h1>
<h2>Contactez-nous !</h2>

<form action="" method="post">
    <p>
        <label for="nom">Nom</label><br>
        <input type="text" id="nom" name="nom" required>
    </p>
    <p>
        <label for="email">Email</label><br>
        <input type="email" id="email" name="email" required>
    </p>
    <p>
        <label for="message">Message</label><br>
        <textarea id="message" name="message" rows="6" required></textarea>
    </p>
    <p>
        <button type="submit">Envoyer</button>
    </p>
</form>

<?php include 'footer.php' ?>