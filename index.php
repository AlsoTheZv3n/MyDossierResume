<?php include 'header.php'; ?>


<body>

    <?php include 'nav.php'; ?>

    <div class="index-container">

        <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

        <!-- Image Slider Container -->
        <div id="image-slider-container" class="slider-container">
            <div id="image-slider">
                <img class="slider-image-index" src="image1.jpg" alt="Image 1">
                <img class="slider-image-index" src="image2.jpg" alt="Image 2">
                <img class="slider-image-index" src="image3.jpeg" alt="Image 3">
            </div>
            <div id="slider-navigation"></div>
        </div>

        <!-- AboutMe Container -->
        <div class="aboutMe-section-container">

            <div class="aboutMe-Img"> <img class="me" src="sven weidenmann.jpeg" alt="Me"> </div>

            <div class="aboutMe-text-container">

                <h1 class="aboutMe-h1">Über Mich</h1>

                <p class="aboutMe-text">Hallo mein Name ist sven und ich bin begeisterter <br> Webentwickler und Hobby Unternehmer.</p>

            </div>

        </div>

    </div>

    <?php include 'footer.php'; ?>



    <!-- Include JavaScript for the slider -->
    <script src="slider.js"></script>

</body>

</html>