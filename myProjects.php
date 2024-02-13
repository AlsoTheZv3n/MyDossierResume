<?php include 'header.php'; ?>

<body>

    <?php include 'nav.php'; ?>

    <div class="myProjects-container">

        <div class="myProjects-content">

            <div class="myProjects-textContainer">
                <h1 class="myProjects-h1">Dies sind meine Programmier Projekte</h1>
                <p class="myProjects-text">
                    Dies sind meine Projekte, die ich in meiner Ausbildung und während meines Praktikums bei einer Firma erstellt und darin programmiert habe. Aus vertraulichen Gründen kann ich aber leider nicht alle Projekte zeigen.
                </p>
            </div>

            <div class="myProject-apiSection">

                    <?php
                    // bindet GitHub classe ein
                    require_once 'gitHubApi.php';

                    // Benutzername des GitHub-Profils, dessen Projekte angezeigt werden sollen
                    $username = "AlsoTheZv3n";
                    // Erstellt eine Instanz der GitHubAPI-Klasse mit dem Benutzernamen
                    $api = new GitHubAPI($username);
                    // Ruft die getProjects()-Methode auf, um die GitHub-Projekte abzurufen
                    $projects = $api->getProjects();


                    echo '<table class="myProjects-table">';
                    echo '<thead>
                <tr>
                    <th>Projektname</th>
                    <th>GitHub Link</th>
                    <th>Verwendete Programmiersprachen</th>
                </tr>
                </thead>';
                    echo '<tbody>';

                    // Iteriert durch jedes Projekt und zeigt seine Informationen in der Tabelle an
                    foreach ($projects as $project) {
                        // Extrahiert den Projektnamen
                        $projectName = $project['name'];
                        // Extrahiert den GitHub-Link zum Projekt
                        $githubLink = $project['html_url'];
                        // Extrahiert die URL zum Abrufen der verwendeten Programmiersprachen
                        $languagesUrl = $project['languages_url'];
                        // Ruft die JSON-Daten mit den Programmiersprachen ab
                        $languagesJson = file_get_contents($languagesUrl);
                        // Dekodiert die JSON-Daten in ein assoziatives Array
                        $languagesArray = json_decode($languagesJson, true);
                        // Konvertiert die Schlüssel des Arrays (Programmiersprachen) in eine Zeichenkette und trennt sie durch Kommas
                        $languages = implode(', ', array_keys($languagesArray));

                        // Fügt eine Zeile zur Tabelle hinzu, die den Projektnamen, den GitHub-Link und die verwendeten Programmiersprachen enthält
                        echo "<tr>

                    <td>$projectName</td>
                    <td><a href='$githubLink'>$projectName</a></td>
                    <td>$languages</td>
                     </tr>";
                    }


                    echo '</tbody>
                </table>';
                    ?>
            </div>

        </div>
    </div>

    <?php include 'footer.php'; ?>

    <!-- Include JavaScript for the slider -->
    <script src="slider.js"></script>

</body>

</html>