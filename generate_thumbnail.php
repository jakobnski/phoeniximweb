<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    echo 'Sie müssen sich einloggen, um diese Aktion auszuführen.';
    exit;
}

if (isset($_FILES['pdf']) && $_FILES['pdf']['error'] == UPLOAD_ERR_OK) {
    $pdfPath = $_FILES['pdf']['tmp_name'];
    $thumbnailPath = 'thumbnails/' . pathinfo($_FILES['pdf']['name'], PATHINFO_FILENAME) . '.jpg';
    
    try {
        $imagick = new Imagick();
        $imagick->setResolution(150, 150);
        $imagick->readImage($pdfPath . '[0]');
        $imagick->setImageFormat('jpeg');
        $imagick->thumbnailImage(200, 200, true);
        $imagick->writeImage($thumbnailPath);
        
        echo 'Vorschaubild erfolgreich erstellt: ' . $thumbnailPath;
    } catch (Exception $e) {
        echo 'Fehler beim Erstellen des Vorschaubildes: ' . $e->getMessage();
    }
} else {
    echo 'Keine gültige PDF-Datei hochgeladen.';
}
?>
