<!-- hobbies.php -->
<?php include 'header.php'; ?>

<body>

    <?php include 'nav.php'; ?>


    <div class="hobbies-container">


        <h1 class="hobbies-h1">Meine Hobbies </h1>



        <!-- Button zum Erstellen -->
        <form action="createHobbiesControllers.php" method="post">
            <input type="submit" value="Neues Hobby erstellen">
        </form>




        <!--- Gym--->
        <div class="hobbies-gym">
            <img class="hobbies-gym-image" src="image1.jpg" alt="Image 1">
            <h3 class="hobbies-gym-h3"> Gym </h3>
            <p class="hobbies-gym-text"> Ich mache 9x in der Woche Sport. Dabei mache ich eine variation aus Ausdauer und Kraftsport. </p>


            <!-- Button zum Editieren -->
            <form action="editHobbiesController.php" method="post">
                <input type="hidden" name="hobby_gym_id" value="1">
                <input type="submit" value="Hobby bearbeiten">
            </form>

            <!-- Button zum Löschen -->
            <form action="DeleteHobbiesController.php" method="post">
                <input type="hidden" name="hobby_gym_id" value="1">
                <input type="submit" value="Löschen">
            </form>


        </div>




        <!--- Gesundheit--->
        <div class="hobbies-gesundheit">
            <img class="hobbies-gesundheit-image" src="image1.jpg" alt="Image 1">
            <h3 class="hobbies-gesundheit-h3"> Gesundheit </h3>
            <p class="hobbies-gesundheit-text">
                Ich setze mich sehr gerne mit dem Thema gesundheit auseinander,
                da ich es sehr interesannt finde und wichtig finde zu verstehen wie mein körper funktiniert und wie er auf was reagiert und wie man die gesundheit optimieren kann.
            </p>


            <!-- Button zum Editieren -->
            <form action="editHobbiesController.php" method="post">
                <input type="hidden" name="hobby_gesundheit_id" value="2">
                <input type="submit" value="Hobby bearbeiten">
            </form>

            <!-- Button zum Löschen -->
            <form action="DeleteHobbiesController.php" method="post">
                <input type="hidden" name="hobby_gesundheit_id" value="2">
                <input type="submit" value="Löschen">
            </form>

        </div>

        <!--- Meditieren --->
        <div class="hobbies-meditieren">
            <img class="hobbies-meditieren-image" src="image1.jpg" alt="Image 1">
            <h3 class="hobbies-meditieren-h3"> Meditieren </h3>
            <p class="hobbies-meditieren-text">
                Ich Meditieren jedentag seit 4 Jahren und es hift mir die Spannung aus dem Alltag zu nehmen und entspannt und konzentriert zu bleiben.
            </p>


            <!-- Button zum Editieren -->
            <form action="editHobbiesController.php" method="post">
                <input type="hidden" name="hobby_meditierent_id" value="3">
                <input type="submit" value="Hobby bearbeiten">
            </form>

            <!-- Button zum Löschen -->
            <form action="DeleteHobbiesController.php" method="post">
                <input type="hidden" name="hobby_meditierent_id" value="3">
                <input type="submit" value="Löschen">
            </form>

        </div>

        <!--- Spekuleiren mit Wertpapieren und Krypto --->
        <div class="hobbies-spekulieren">
            <img class="hobbies-spekulieren-image" src="image1.jpg" alt="Image 1">
            <h3 class="hobbies-spekulieren-h3"> Spekulieren mit Aktien und Kryptowährungen </h3>
            <p class="hobbies-spekulieren-text">
                Seit dem ich 16 Jahre alt bin befasse ich mit mit dem Thema Aktien,
                d.h damals habe ich angefangen Videos und Sachbücher dazu zu lesen und habe dann,
                auch angefangen zu investiern mit meinem Geld und auch mit Geld von Verwannten mit meinem 18 Lebensjahr.
                usätzlich kammen dann auch noch Kryptowährungen dazu zu einem Späteren Zeitpunkt.
            </p>


            <!-- Button zum Editieren -->
            <form action="editHobbiesController.php" method="post">
                <input type="hidden" name="hobby_spekulieren_id" value="4">
                <input type="submit" value="Hobby bearbeiten">
            </form>

            <!-- Button zum Löschen -->
            <form action="DeleteHobbiesController.php" method="post">
                <input type="hidden" name="hobby_spekulieren_id" value="4">
                <input type="submit" value="Löschen">
            </form>

        </div>

        <!--- Arbeiten an meinem Online Shop --->
        <div class="hobbies-oShop">
            <img class="hobbies-oShop-image" src="image1.jpg" alt="Image 1">
            <h3 class="hobbies-oshop-h3"> Online Shop</h3>
            <p class="hobbies-oShop-text">
                Ich und mein Kollege aus der Informatikschule hatten die Idee im Dezember 2023 eine Firma zu Grüden
                und in das E-Commerce business einzusteigen und einen Onlineshop zu erstellen und dann Gym Produkte zu verkaufen darüber,
                dies ist aber noch im Umsetz Prozess und ich verdiene noch kein Geld damit.
            </p>


            <!-- Button zum Editieren -->
            <form action="editHobbiesController.php" method="post">
                <input type="hidden" name="hobby_oShop_id" value="5">
                <input type="submit" value="Hobby bearbeiten">
            </form>

            <!-- Button zum Löschen -->
            <form action="DeleteHobbiesController.php" method="post">
                <input type="hidden" name="hobby_oShop_id" value="5">
                <input type="submit" value="Löschen">
            </form>

        </div>

        <!--- Musik produktion mit einem Digiralen programm--->
        <div class="hobbies-musik">
            <img class="hobbies-musik-image" src="image1.jpg" alt="Image 1">
            <h3 class="hobbies-musik-h3"> Musik </h3>
            <p class="hobbies-musik-text">
                Seit ende Januar habe ich auch angefangen regelmässig herumzubasteln mit einer Musik anwendung,
                da ich es immer sehr interessant fand selber musik digital herstellen zu können mit samples und eigenen Ton aufnahmen.
                Auch zu erwähen ist das ich von Grundschule bis Oberstuffe regelmässig Schlagzeut gespielt habe.
            </p>


            <!-- Button zum Editieren -->
            <form action="editHobbiesController.php" method="post">
                <input type="hidden" name="hobby_musik_id" value="6">
                <input type="submit" value="Hobby bearbeiten">
            </form>

            <!-- Button zum Löschen -->
            <form action="DeleteHobbiesController.php" method="post">
                <input type="hidden" name="hobby_musik_id" value="6">
                <input type="submit" value="Löschen">
            </form>


        </div>

        <!--- programmieren --->
        <div class="hobbies-programmieren">
            <img class="hobbies-programmieren-image" src="image1.jpg" alt="Image 1">
            <h3 class="hobbies-programmieren-h3"> Programmieren </h3>
            <p class="hobbies-programmieren-text">
                Ich habe damals 2020 meine Infromatikschule angefangen und habe dann 2023 ein Praktikum gehabt in der Applikationsentwicklung
                im bereich Webdevelopment und deswegen probiere ich immer wieder selber Projkte zu erstellen mit den mir bekannten Programmier Sprachen,
                um mein Wissen auf dem aktuellsten stand zu halten und die Fähigkeit zu behalten.
            </p>


            <!-- Button zum Editieren -->
            <form action="editHobbiesController.php" method="post">
                <input type="hidden" name="hobby_programmieren_id" value="7">
                <input type="submit" value="Hobby bearbeiten">
            </form>

            <!-- Button zum Löschen -->
            <form action="DeleteHobbiesController.php" method="post">
                <input type="hidden" name="hobby_programmieren_id" value="7">
                <input type="submit" value="Löschen">
            </form>

        </div>




    </div>



    <?php include 'footer.php'; ?>


</body>


</html>