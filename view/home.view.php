<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Séminaire Mosquée de Choisy le roi</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="./css/style.css">

</head>
<body>

<?php
include "./include/nav.php";
?>

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3>Séminaire Estival <span>Au nombre de 4</span></h3>
        <p>La mosquée de Choisy le roi organise 4 séminaires sur différents thèmes </p>
        <!--<a href="#" class="btn">download now</a>-->
    </div>

    <div class="image">
        <img src="./images/mosquee-choisy.jpg" alt="">
    </div>

</section>

<!-- home section ends -->

<!-- features section starts  -->

<section class="Séminaire" id="Séminaire">

    <h1 class="heading"> Séminaire </h1>

    <div class="box-container">

        <div class="box">
            <img src="./images/f-icon1.png" alt="">
            <h3>Week-End 1</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam minus recusandae autem, repellendus fugit quaerat provident voluptatum non officiis ratione.</p>
            <a href="./view/payment.view.php" class="btn">Inscription</a>
        </div>

        <div class="box">
            <img src="./images/f-icon2.png" alt="">
            <h3>Week-End 2</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam minus recusandae autem, repellendus fugit quaerat provident voluptatum non officiis ratione.</p>
            <a href="./view/payment.view.php" class="btn">Inscription</a>
        </div>

        <div class="box">
            <img src="./images/f-icon3.png" alt="">
            <h3>Week-End 3</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam minus recusandae autem, repellendus fugit quaerat provident voluptatum non officiis ratione.</p>
            <a href="./view/payment.view.php" class="btn">Inscription</a>
        </div>
        <div class="box">
            <img src="./images/f-icon1.png" alt="">
            <h3>Week-End 4</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam minus recusandae autem, repellendus fugit quaerat provident voluptatum non officiis ratione.</p>
            <a href="./view/payment.view.php" class="btn">Inscription</a>
        </div>

    </div>

</section>

<!-- features section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading"> Informations </h1>

    <div class="column">

        <div class="image">
            <img src="./images/amc.png" alt="">
        </div>

        <div class="content">
            <h3>Titre</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nulla placeat deserunt saepe repudiandae veniam soluta minima dolor hic aperiam iure.</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium, quaerat. Dolorem ratione saepe magni quo inventore porro ab voluptates eos, nam eius provident accusantium, quia similique est, repellendus et reiciendis.</p>
         <!--   <div class="buttons">
                <a href="#" class="btn"> <i class="fab fa-apple"></i> app store </a>
                <a href="#" class="btn"> <i class="fab fa-google-play"></i> google-play </a>
            </div> -->
        </div>

    </div>

</section>

<!-- about section ends -->

<!-- footer section starts  -->

<?php
include "./include/footer.php";
?>

<!-- footer section ends -->
</body>
</html>
