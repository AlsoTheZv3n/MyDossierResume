<?php
// editHobbiesController.php

// Überprüfe, ob ein POST-Request gesendet wurde
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Überprüfe, ob die Hobby-ID im POST vorhanden ist
    if (isset($_POST["hobby_gym_id"])) {
        // Die Hobby-ID aus dem POST-Daten erhalten
        $hobby_id = $_POST["hobby_gym_id"];

        // Hier kannst du die Logik für das Bearbeiten des Hobbies implementieren
        // Du kannst die Hobby-ID verwenden, um die entsprechenden Daten aus der Datenbank zu laden
        // Dann kannst du das Formular anzeigen, in dem der Benutzer das Hobby bearbeiten kann
        // Zum Beispiel:
        // 1. Lade die Daten des Hobbies mit der erhaltenen Hobby-ID aus der Datenbank
        // 2. Zeige ein Formular an, das die vorhandenen Daten des Hobbies enthält und es dem Benutzer ermöglicht, die Daten zu bearbeiten
    } else {
        // Wenn die Hobby-ID nicht im POST vorhanden ist, handle den Fehler entsprechend
        echo "Die Hobby-ID wurde nicht gefunden.";
    }
}

