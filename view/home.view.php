<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seminaire AMC</title>

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
        <h3>Séminaire Estival <span>L'essentiel de notre religion</span></h3>
        <p>La mosquée de Choisy le roi organise 4 séminaires sur ce que ne doit pas ignorer le musulman </p>
        <?php
        if(!empty($_SESSION['id_adherent']))
        {
            ?>
            <p>Si vous décidez de prendre les 4 séminaires, le quatrième vous sera offert.</p>
        <?php
        }
        ?>
        <?php
        if(!empty($_SESSION['id_user']))
        {
            ?>
            <p>Si vous décidez de prendre les 4 séminaires, le quatrième sera au prix de 20 euros au lieu de 60.</p>
            <?php
        }
        ?>
    </div>

    <div class="image">
        <img src="./images/mosquee-choisy.jpg" alt="">
    </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <h1 class="heading"> Informations </h1>

    <div class="column">

        <div class="image">
            <img src="./images/amc.png" alt="">
        </div>

        <div class="content">
            <h3>En quoi consiste-t-il ?</h3>
            <p>La mosquée de Choisy le Roi vous convie à des séminaires sur le thème « L’essentiel de ma religion »</p>
            <p>Ceux-ci se dérouleront sur 4 week-end (Juillet-Aout 2021)<br><br>
                - 1er séminaire : Commentaire de la « Jazariyya », célèbre texte sur les règles de la récitation du coran (Tajwîd) que tout musulman doit connaître. (Voir les dates et horaires plus bas) <br><br>
                - 2ème séminaire : Commentaire du livre « Matn al-Achmâwiyyah », qui est un condensé du Fiqh malikite (règles pratiques) sur les ablutions, prières, et jeûne. (Voir les dates et horaires plus bas)<br><br>
                - 3ème séminaire : Commentaire du livre « Nour al-Moubîn – la lumière éclatante », qui traite sur tous les points importants de la croyance musulmane et les 6 piliers de la foi.<br><br>
                - 4ème séminaire : Commentaire du livre « Risalah al-Moustarshidîn, l’épitre des postulants », qui développe des éléments cruciaux quant à l’éducation spirituelle du musulman et purification du cœur en toute circonstance.<br><br>
            </p>
            <p>Rappel :<br>
                1)	Tous les séminaires sont en Français<br>
                2)	L’inscription et le paiement au préalable est obligatoire<br>
                3)	(Les livres et/ou supports seront fournis par la mosquée)<br>
                4)	Pas besoin d’avoir un niveau spécifique pour s’inscrire sauf la compréhension du français.<br>
                5)	Les séminaires sont dispensés par les deux imams de la mosquée : Cheikh Ulas, et Cheikh Zakaria<br>
                6)  Les livres et le repas sont offerts<br>
            </p>
        </div>

    </div>

</section>

<!-- about section ends -->
<!-- features section starts  -->

<section class="Séminaire" id="Séminaire">

    <h1 class="heading"> Séminaires </h1>

    <div class="box-container">

        <div class="box">
            <img src="./images/seminaire-1.png" alt="">
            <h3>Week-End 1 : Science du Tajwid</h3>
            <p>Du 10 au 11 Juillet de 9h à 19h30</p>
            <p>Commentaire en Français du poème al jazariya</p>
            <p>Enseignant : Cheikh Zakaria</p>
            <?php
            if(!empty($_SESSION['id_adherent']))
            {
                ?>
                <p>Prix : 50 euros</p>
                <?php
            }
            ?>
            <?php
            if(!empty($_SESSION['id_user']))
            {
                ?>
                <p>Prix : 60 euros</p>
                <?php
            }
            ?>

            <a href="./php/addSeminartoBasket.php?id_we=1" class="btn">Ajouter au panier</a>

        </div>

        <div class="box">
            <img src="./images/seminaire-2.png" alt="">
            <h3>Week-End 2 : Jurisprudence (Fiqh Malikite)</h3>
            <p>Du 24 au 25 Juillet de 9h à 19h30</p>
            <p>Commentaire en Français du livre Achmawiya</p>
            <p>Enseignants : Cheikh Zakaria et Cheikh Ulas</p>
            <?php
            if(!empty($_SESSION['id_adherent']))
            {
                ?>
                <p>Prix : 50 euros</p>
                <?php
            }
            ?>
            <?php
            if(!empty($_SESSION['id_user']))
            {
                ?>
                <p>Prix : 60 euros</p>
                <?php
            }
            ?>

                <a href="./php/addSeminartoBasket.php?id_we=2" class="btn">Ajouter au panier</a>


        </div>

        <div class="box">
            <img src="./images/seminaire-3.png" alt="">
            <h3>Week-End 3 : Aqida</h3>
            <p>Du 14 au 15 Août de 9h à 19h30</p><br><br>
            <p>Commentaire en Français du livre Nour al Moubial</p>
            <p>Enseignants : Cheikh Zakaria et Cheikh Ulas</p>
            <?php
            if(!empty($_SESSION['id_adherent']))
            {
                ?>
                <p>Prix : 50 euros</p>
                <?php
            }
            ?>
            <?php
            if(!empty($_SESSION['id_user']))
            {
                ?>
                <p>Prix : 60 euros</p>
                <?php
            }
            ?>

                <a href="./php/addSeminartoBasket.php?id_we=3" class="btn">Ajouter au panier</a>


        </div>
        <div class="box">
            <img src="./images/seminaire-4.png" alt="">
            <h3>Week-End 4 : Spiritualité</h3>
            <p>Du 28 au 29 Août de 9h à 19h30</p>
            <p>Commentaire en Français du livre risalatou al moustarchidine</p>
            <p>Enseignants : Cheikh Zakaria et Cheikh Ulas</p>
            <?php
            if(!empty($_SESSION['id_adherent']))
            {
                ?>
                <p>Prix : 50 euros</p>
                <?php
            }
            ?>
            <?php
            if(!empty($_SESSION['id_user']))
            {
                ?>
                <p>Prix : 60 euros</p>
                <?php
            }
            ?>
           <a href="./php/addSeminartoBasket.php?id_we=4" class="btn">Ajouter au panier</a>


        </div>

    </div>

</section>

<!-- features section ends -->

<section class="about" id="about">

    <h1 class="heading"> Déroulement du Séminaire </h1>

    <div class="column">

        <div class="image">
            <img src="./images/amc.png" alt="">
        </div>

        <div class="content">
            <h3></h3>
            <p>9h-11h : Commentaire du livre<br><br>
                11h-11h30 : Petit déjeuner <br><br>
                11h30-13h30 : Commentaire du livre <br><br>
                13h30-15h30 : Pause prière et repas <br><br>
                15h30-17h30 : Commentaire du livre <br><br>
                17h30-18h30 : Pause prière <br><br>
                18h30-19h30 : Séance questions réponses <br><br>
            </p>

        </div>

    </div>

</section>

<!-- footer section starts  -->

<?php
include "./include/footer.php";
?>

<!-- footer section ends -->
</body>
</html>
