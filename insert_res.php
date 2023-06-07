<?php
include("connexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $prenom = $_POST["prenom"];
    $nom = $_POST["nom"];
    $mail = $_POST["mail"];
    $nbPersonnes = $_POST["number"];
    $date = $_POST["date"];

    $sql = "INSERT INTO reservation (prenom, nom, mail, nb_personne, date) VALUES ('$prenom', '$nom', '$mail', '$nbPersonnes', '$date')";

    if ($conn->query($sql) === TRUE) {
        echo "Enregistrement créé avec succès.";
    } else {
        echo "Erreur : " . $sql . "<br>" . $conn->error;
    }
    
    $mailTo = "$mail";
    $subject = "Réservation Cin'Air, la référence du cinéma en plein air !";
    $from = 'maxime.scholtes@edu.univ-eiffel.fr';

    $headers  = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

    $headers .= 'From: ' . $from . "\r\n" .
        'Reply-To: ' . $from . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    $message = "Votre réservation a bien été prise en compte ! Merci encore pour votre réservation et à bientôt chez Cin'Air";

    mail($mailTo, $subject, $message, $headers);
    header("Location: index.php");
}