<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    echo 'Sie müssen sich einloggen, um Dateien hochzuladen.';
    exit;
}
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Datei-Upload</title>
</head>
<body>
    <h2>Datei-Upload</h2>
    <form action="generate_thumbnail.php" method="post" enctype="multipart/form-data">
        <label for="pdf">Wähle eine PDF-Datei:</label>
        <input type="file" id="pdf" name="pdf" required><br><br>
        <input type="submit" value="PDF hochladen und Vorschaubild erstellen">
    </form>
</body>
</html>
