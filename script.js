// JavaScript-Code für die Webseite

// Funktion, um eine Willkommensnachricht anzuzeigen
/*function showWelcomeMessage() {
    alert('Willkommen auf meiner Webseite!');
}

// Funktion, um auf der Downloadseite eine Nachricht anzuzeigen
function showDownloadMessage() {
    alert('Vielen Dank für das Herunterladen unserer Dateien!');
} */

// Ereignis hinzufügen, das die Willkommensnachricht anzeigt, wenn die Seite geladen wird
window.onload = function() {
    showWelcomeMessage();
    
    // Überprüfen, ob die Seite die Downloadseite ist, und die entsprechende Nachricht anzeigen
    if (window.location.pathname.includes('downloads.html')) {
        showDownloadMessage();
    }
};