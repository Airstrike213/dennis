<?php
$to = "arteagawittdustin@outlook.de"; // Festgelegte Empfänger-E-Mail-Adresse
$subject = $_POST["Subject"]; // Betreff
$message = $_POST["Comment"]; // Nachricht
$headers = "From: " . $_POST["Email"]; // Absender-E-Mail-Adresse

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // E-Mail senden
    if (mail($to, $subject, $message, $headers)) {
        echo "Die E-Mail wurde erfolgreich gesendet!";
    } else {
        echo "Es gab ein Problem beim Senden der E-Mail. Bitte versuche es später erneut.";
    }
}
?>