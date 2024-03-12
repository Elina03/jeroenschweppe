<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Empfänger-E-Mail-Adresse
    $empfaenger = "elina.schweppe@gmail.com"; // Hier deine E-Mail-Adresse eintragen

    // Variablen aus dem Formular
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    // E-Mail-Inhalt
    $mailinhalt = "Name: $name\n";
    $mailinhalt .= "E-Mail: $email\n";
    $mailinhalt .= "Betreff: $subject\n\n";
    $mailinhalt .= "Nachricht:\n$message";

    // E-Mail-Header
    $header = "From: $email";

    // E-Mail senden
    if (mail($empfaenger, $subject, $mailinhalt, $header)) {
        echo "E-Mail wurde erfolgreich versendet.";
    } else {
        echo "Fehler beim Versenden der E-Mail.";
    }
}
?>