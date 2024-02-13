<?php include 'header.php'; ?>


<body>

    <?php include 'nav.php'; ?>




    <div class="skills-container">


        <div class="skills-textContainer">

            <h1 class="skills-h1"> Meine Skills</h1>
            <p class="skills-text"> Die unten aufgelisteten Diagramme sind meine skills im verhältnis in Prozent.</p>

        </div>



        <div class="skills-diagramm-container">


            <!-- Include-Anweisung für die Skills-Klasse -->
            <?php include 'skillsObj.php'; ?>

            <div class="skills-diagramme">
                <!-- Sprachkenntnisse -->
                <h3 class="skills-h3-title">Meine Sprachkenntnisse</h3>
                <?php
                // Skills für Sprachkenntnisse einfügen
                foreach ($skillSet->getSkills() as $skill) {
                    if (in_array($skill->getName(), array_column($skillsData['languages'], 0))) {
                        echo '<div class="skill">';
                        echo '<span class="skill-name">' . $skill->getName() . '</span>';
                        echo '<div class="skill-bar">';
                        echo '<div class="skill-progress" style="width: ' . $skill->getProgress() . '%;"></div>';
                        echo '</div>';
                        //echo '<span class="skill-percent">' . $skill->getPercent() . '</span>';
                        echo '</div>';
                    }
                }
                ?>

                <!-- Programmiersprachen -->
                <h3 class="skills-h3-title">Mein Programmiersprachenwissen</h3>
                <?php
                // Skills für Programmiersprachen einfügen
                foreach ($skillSet->getSkills() as $skill) {
                    if (in_array($skill->getName(), array_column($skillsData['programmingLanguages'], 0))) {
                        echo '<div class="skill">';
                        echo '<span class="skill-name">' . $skill->getName() . '</span>';
                        echo '<div class="skill-bar">';
                        echo '<div class="skill-progress" style="width: ' . $skill->getProgress() . '%;"></div>';
                        echo '</div>';
                        //echo '<span class="skill-percent">' . $skill->getPercent() . '</span>';
                        echo '</div>';
                    }
                }
                ?>

                <!-- Frameworks -->
                <h3 class="skills-h3-title">Frameworks</h3>
                <?php
                // Skills für Frameworks einfügen
                foreach ($skillSet->getSkills() as $skill) {
                    if (in_array($skill->getName(), array_column($skillsData['frameworks'], 0))) {
                        echo '<div class="skill">';
                        echo '<span class="skill-name">' . $skill->getName() . '</span>';
                        echo '<div class="skill-bar">';
                        echo '<div class="skill-progress" style="width: ' . $skill->getProgress() . '%;"></div>';
                        echo '</div>';
                        //echo '<span class="skill-percent">' . $skill->getPercent() . '</span>';
                        echo '</div>';
                    }
                }
                ?>

            </div>
        </div>

    </div>

    <script src="dynamischeBalkenSkills.js"></script>

    <?php include 'footer.php'; ?>


</body>

</html>