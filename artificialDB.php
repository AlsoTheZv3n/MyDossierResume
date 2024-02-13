<?php

// Künstliche Datenbankklasse
class ArtificialDB
{
    private $data = array(); // Array zur Speicherung der Daten

    // Funktion zum Hinzufügen von Datensätzen
    public function addRecord($record)
    {
        $this->data[] = $record;
    }

    // Funktion zum Abrufen aller Datensätze
    public function getAllRecords()
    {
        return $this->data;
    }

    // Funktion zum Aktualisieren eines Datensatzes
    public function updateRecord($index, $updatedRecord)
    {
        if (isset($this->data[$index])) {
            $this->data[$index] = $updatedRecord;
            return true;
        }
        return false;
    }

    // Funktion zum Löschen eines Datensatzes
    public function deleteRecord($index)
    {
        if (isset($this->data[$index])) {
            unset($this->data[$index]);
            return true;
        }
        return false;
    }
}

// Erstelle eine Instanz der künstlichen Datenbank
$myDB = new ArtificialDB();

// Hobbies aus dem HTML-Code extrahieren und in die Datenbank einfügen
$hobbies = array(
    array(
        "title" => "Gym",
        "description" => "Ich mache 9x in der Woche Sport. Dabei mache ich eine Variation aus Ausdauer und Kraftsport."
    ),
    array(
        "title" => "Gesundheit",
        "description" => "Ich setze mich sehr gerne mit dem Thema Gesundheit auseinander, da ich es sehr interessant finde und wichtig finde zu verstehen, wie mein Körper funktioniert und wie er auf was reagiert und wie man die Gesundheit optimieren kann."
    ),
    array(
        "title" => "Meditieren",
        "description" => "Ich meditiere jeden Tag seit 4 Jahren und es hilft mir, die Spannung aus dem Alltag zu nehmen und entspannt und konzentriert zu bleiben."
    ),
    array(
        "title" => "Spekulieren mit Aktien und Kryptowährungen",
        "description" => "Seitdem ich 16 Jahre alt bin, beschäftige ich mich mit dem Thema Aktien. Das bedeutet, dass ich damals angefangen habe, Videos und Sachbücher dazu zu lesen, und dann auch angefangen habe zu investieren, mit meinem Geld und auch mit Geld von Verwandten ab meinem 18. Lebensjahr. Zusätzlich kamen dann auch noch Kryptowährungen dazu, zu einem späteren Zeitpunkt."
    ),
    array(
        "title" => "Online Shop",
        "description" => "Ich und mein Kollege aus der Informatikschule hatten die Idee, im Dezember 2023 eine Firma zu gründen und in das E-Commerce-Geschäft einzusteigen und einen Onlineshop zu erstellen und dann Gym-Produkte zu verkaufen darüber. Dies ist aber noch im Umsetzungsprozess und ich verdiene noch kein Geld damit."
    ),
    array(
        "title" => "Musik",
        "description" => "Seit Ende Januar habe ich auch angefangen, regelmäßig herumzubasteln mit einer Musikanwendung, da ich es immer sehr interessant fand, selber Musik digital herstellen zu können mit Samples und eigenen Tonaufnahmen. Auch zu erwähnen ist, dass ich von der Grundschule bis zur Oberstufe regelmäßig Schlagzeug gespielt habe."
    ),
    array(
        "title" => "Programmieren",
        "description" => "Ich habe damals 2020 meine Informatikschule angefangen und habe dann 2023 ein Praktikum gehabt in der Applikationsentwicklung im Bereich Webdevelopment und deswegen probiere ich immer wieder selber Projekte zu erstellen mit den mir bekannten Programmiersprachen, um mein Wissen auf dem aktuellsten Stand zu halten und die Fähigkeit zu behalten."
    )
);

// Füge die Hobbies in die Datenbank ein
foreach ($hobbies as $hobby) {
    $myDB->addRecord($hobby);
}

// Zeige alle Hobbies aus der Datenbank an
$records = $myDB->getAllRecords();
foreach ($records as $record) {
    echo "<div>";
    echo "<h3>" . $record["title"] . "</h3>";
    echo "<p>" . $record["description"] . "</p>";
    echo "</div>";
}
