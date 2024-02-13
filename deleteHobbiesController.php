<?php
// DeleteHobbiesController.php

// Überprüfe, ob ein POST-Request gesendet wurde
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Überprüfe, ob die Hobby-ID im POST vorhanden ist
    if (isset($_POST["hobby_gym_id"])) {
        // Die Hobby-ID aus dem POST-Daten erhalten
        $hobby_id = $_POST["hobby_gym_id"];

        // Hier kannst du die Logik für das Löschen des Hobbies implementieren
        // Du kannst die Hobby-ID verwenden, um das entsprechende Hobby aus der Datenbank zu löschen
        // Zum Beispiel:
        // 1. Führe eine Datenbankabfrage aus, um das Hobby mit der erhaltenen Hobby-ID zu löschen
        // 2. Gib eine Erfolgsmeldung aus oder leite den Benutzer zu einer anderen Seite weiter
    } else {
        // Wenn die Hobby-ID nicht im POST vorhanden ist, handle den Fehler entsprechend
        echo "Die Hobby-ID wurde nicht gefunden.";
    }
}
