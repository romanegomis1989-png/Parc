<?php
    $destinataire = "philippe.kurz@gmail";
    $sujet = "Formulaire envoyé par le site https://romane.ifcslam2025.fr/parc";
    $message = "Message envoyé par " . $_POST["nom"] . "<br>" . $_POST["message"]; 
    $expediteur = $_POST["email"]; 

    // To send HTML mail, the 'Content-type' header must be set
    $headers  = 'MIME-Version: 1.0' . "\r\n";       
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    // Additional headers
    $headers .= 'From: ' . $_POST["nom"] . ' ' . $_POST["email"] . "\r\n";  

    // echo $destinataire;
    // echo "<br>";
    // echo $sujet;
    // echo "<br>";
    // echo $message;
    // echo "<br>";
    // echo $expediteur;
    // echo "<br>";
    // echo $headers;
    // echo "<br>";

    if (mail($destinataire, $sujet, $message, $headers))
        echo "Votre mail a bien été envoyé ! <a href='index.php'>Retour au site</a>";
    else
        echo "Erreur à l'envoi du mail. <a href='index.php'>Retour au site</a>"

?>