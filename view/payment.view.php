<?php
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seminaire AMC</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../css/style.css">

</head>
<body>

<!-- header section starts  -->

<header>

    <a href="#" class="logo"><span>ACMC</span> Mosquée Choisy le roi</a>

    <input type="checkbox" id="menu-bar">
    <label for="menu-bar" class="fas fa-bars"></label>

    <nav class="navbar">
        <a href="../index.php">home</a>
    </nav>

</header>

<!-- header section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

    <div class="image">
        <img src="../images/amc.png" alt="">
    </div>

    <form action="" method="post">

        <h1 class="heading">Inscription</h1>

        <div class="inputBox">
            <input type="text" required>
            <label>Nom</label>
        </div>

        <div class="inputBox">
            <input type="text" required>
            <label>Prénom</label>
        </div>

        <div class="inputBox">
            <input type="tel" required>
            <label>Numéro de téléphone</label>
        </div>

        <!--  <div class="inputBox">
              <textarea required name="" id="" cols="30" rows="10"></textarea>
              <label>message</label>
          </div> -->

        <input type="submit" class="btn" value="S'INSCRIRE" name="subscribe">

    </form>

</section>
<!-- footer section starts  -->

<div class="footer">

    <div class="box-container">

        <div class="box">
            <h3>about us</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet pariatur rerum consectetur architecto ad tempora blanditiis quo aliquid inventore a.</p>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#home">Accueil</a>
            <a href="#">features</a>
            <a href="#about">Informations</a>
        </div>

        <div class="box">
            <h3>Suivez nous</h3>
            <a href="#">Facebook</a>
            <a href="#">Instagram</a>
            <a href="#">Youtube</a>
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
                <p> Choisy le roi - 6 voie des Roses </p>
            </div>
        </div>

    </div>

    <h1 class="credit"> &copy; copyright @ 2021 by mr. web designer </h1>

</div>


</body>
