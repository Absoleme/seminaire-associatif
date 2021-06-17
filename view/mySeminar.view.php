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
<section class="Séminaire" id="Séminaire">

    <h1 class="heading"> Mes Séminaires </h1>

    <div class="box-container">
    <?php
        while($reqFetch = $reqWE -> fetch()){
            ?>
            <div class="box">
                <img src="./images/f-icon1.png" alt="">
                <h3><?php $reqFetch['name']?></h3>
                <p> Du <?php $reqFetch['date_debut'] ?> au <?php $reqFetch['date_fin'] ?></p>
            </div>
        <?php
        }
    ?>


    </div>

</section>
<?php
    include ('./include/footer.php');
?>
</body>
