<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $telephone = $_POST["telephone"];
    $date = $_POST["date"];
    $heure = $_POST["heure"];

    $to = "votre_email@example.com";
    $subject = "Nouvelle réservation de voiture";
    $message = "Nom: $nom\nPrénom: $prenom\nEmail: $email\nTéléphone: $telephone\nDate de réservation: $date\nHeure de réservation: $heure";
    $headers = "From: $email";

    mail($to, $subject, $message, $headers);
    
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // ... (code existant)

    if(mail($to, $subject, $message, $headers)) {
        header("Location: index.html?mailsend");
    }
}
?>