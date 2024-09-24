<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Daten aus dem Formular erhalten
    $song_name = htmlspecialchars($_POST['song_name']);
    $yt_link = htmlspecialchars($_POST['yt_link']);
    
    // E-Mail Details
    $to = "deine-email@beispiel.com";  // Ersetze dies mit deiner E-Mail-Adresse
    $subject = "Neuer Song Vorschlag";
    $message = "Song Name: " . $song_name . "\nYouTube Link: " . $yt_link;
    $headers = "From: no-reply@deine-domain.com";
    
    // E-Mail senden
    if (mail($to, $subject, $message, $headers)) {
        echo "E-Mail erfolgreich gesendet!";
    } else {
        echo "Es gab ein Problem beim Senden der E-Mail.";
    }
}
?>
