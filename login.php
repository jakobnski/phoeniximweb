<?php
session_start();

// Hier überprüfst du die Anmeldedaten (z.B. aus einer Datenbank)
// Ersetze dies durch deine eigenen Benutzerdaten oder eine Datenbankabfrage
$valid_username = 'benutzer';
$valid_password = 'passwort';

if ($_POST['username'] === $valid_username && password_verify($_POST['password'], $valid_password)) {
    $_SESSION['loggedin'] = true;
    header('Location: upload.php');
} else {
    echo 'Ungültiger Benutzername oder Passwort.';
}
?>
