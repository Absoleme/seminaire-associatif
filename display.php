<?php
include './config/conn.php';
session_start();
?>
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

        $reqallSeminar1 = $bdd -> prepare("SELECT * FROM mySeminar WHERE id_we = ?");
        $reqallSeminar1 -> execute(array(1));
        $reqCount1 = $reqallSeminar1 -> rowCount();

        $reqallSeminar2 = $bdd -> prepare("SELECT * FROM mySeminar WHERE id_we = ?");
        $reqallSeminar2 -> execute(array(2));
        $reqCount2 = $reqallSeminar2 -> rowCount();

        $reqallSeminar3 = $bdd -> prepare("SELECT * FROM mySeminar WHERE id_we = ?");
        $reqallSeminar3 -> execute(array(3));
        $reqCount3 = $reqallSeminar3 -> rowCount();

        $reqallSeminar4 = $bdd -> prepare("SELECT * FROM mySeminar WHERE id_we = ?");
        $reqallSeminar4 -> execute(array(4));
        $reqCount4 = $reqallSeminar4 -> rowCount();
        ?>


        <div class="box">
            <h3>Seminaire 1</h3>
            <p> Nombre de personne : <?= $reqCount1 ?></p>
        </div>
        <div class="box">
            <h3>Seminaire 2</h3>
            <p> Nombre de personne : <?= $reqCount2 ?></p>
        </div>
        <div class="box">
            <h3>Seminaire 3</h3>
            <p> Nombre de personne : <?= $reqCount3 ?></p>
        </div>
        <div class="box">
            <h3>Seminaire 4</h3>
            <p> Nombre de personne : <?= $reqCount4 ?></p>
        </div>


    </div>

</section>
<?php
include ('./include/footer.php');
?>
</body>

