<?php
include("connexion.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $prenom = $_POST["prenom"];
    $nom = $_POST["nom"];
    $mail = $_POST["mail"];
    $nbPersonnes = $_POST["number"];
    $date = $_POST["date"];

    $sql = "INSERT INTO scholtes_resaweb (prenom, nom, mail, nb_personne, date) VALUES ('$prenom', '$nom', '$mail', '$nbPersonnes', '$date')";

    if ($conn->query($sql) === TRUE) {
        echo "Enregistrement créé avec succès.";
    } else {
        echo "Erreur : " . $sql . "<br>" . $conn->error;
    }
}
?>