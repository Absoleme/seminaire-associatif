<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complete responsive app landing page website design tutorial</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="./css/style.css">

</head>
<body>

<!-- header section starts  -->

<header>

    <a href="#" class="logo"><span>ACMC</span> Mosquée Choisy le roi</a>

    <input type="checkbox" id="menu-bar">
    <label for="menu-bar" class="fas fa-bars"></label>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#Séminaire">Séminaires</a>
        <a href="">Informations</a>
    </nav>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

    <div class="content">
        <h3>Séminaire Estival <span>Au nombre de 5</span></h3>
        <p>La mosquée de Choisy le roi organise 5 séminaire sur différents thèmes </p>
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
            <a href="#" class="btn">Inscription</a>
        </div>

        <div class="box">
            <img src="./images/f-icon2.png" alt="">
            <h3>Week-End 2</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam minus recusandae autem, repellendus fugit quaerat provident voluptatum non officiis ratione.</p>
            <a href="#" class="btn">Inscription</a>
        </div>

        <div class="box">
            <img src="./images/f-icon3.png" alt="">
            <h3>Week-End 3</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam minus recusandae autem, repellendus fugit quaerat provident voluptatum non officiis ratione.</p>
            <a href="#" class="btn">Inscription</a>
        </div>
        <div class="box">
            <img src="./images/f-icon1.png" alt="">
            <h3>Week-End 4</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam minus recusandae autem, repellendus fugit quaerat provident voluptatum non officiis ratione.</p>
            <a href="#" class="btn">Inscription</a>
        </div>
        <div class="box">
            <img src="./images/f-icon1.png" alt="">
            <h3>Week-End 5</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ullam minus recusandae autem, repellendus fugit quaerat provident voluptatum non officiis ratione.</p>
            <a href="#" class="btn">Inscription</a>
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
            <h3>Easy And Perfect Solution For Your Business App</h3>
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

<!-- contact section starts  -->

<section class="contact" id="contact">

    <div class="image">
        <img src="./images/contact-img.png" alt="">
    </div>

    <form action="">

        <h1 class="heading">contact us</h1>

        <div class="inputBox">
            <input type="text" required>
            <label>name</label>
        </div>

        <div class="inputBox">
            <input type="email" required>
            <label>email</label>
        </div>

        <div class="inputBox">
            <input type="number" required>
            <label>phone</label>
        </div>

        <div class="inputBox">
            <textarea required name="" id="" cols="30" rows="10"></textarea>
            <label>message</label>
        </div>

        <input type="submit" class="btn" value="send message">

    </form>

</section>

<!-- contact section edns -->

<!-- footer section starts  -->

<div class="footer">

    <div class="box-container">

        <div class="box">
            <h3>about us</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet pariatur rerum consectetur architecto ad tempora blanditiis quo aliquid inventore a.</p>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#">home</a>
            <a href="#">features</a>
            <a href="#">about</a>
            <a href="#">review</a>
            <a href="#">pricing</a>
            <a href="#">contact</a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#">facebook</a>
            <a href="#">instagram</a>
            <a href="#">pinterest</a>
            <a href="#">twitter</a>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <div class="info">
                <i class="fas fa-phone"></i>
                <p> +123-456-7890 <br> +111-2222-333 </p>
            </div>
            <div class="info">
                <i class="fas fa-envelope"></i>
                <p> example@gmail.com <br> example@gmail.com </p>
            </div>
            <div class="info">
                <i class="fas fa-map-marker-alt"></i>
                <p> mumbai, india - 400104 </p>
            </div>
        </div>

    </div>

    <h1 class="credit"> &copy; copyright @ 2021 by mr. web designer </h1>

</div>

<!-- footer section ends -->
</body>
</html>
