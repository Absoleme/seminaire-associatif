<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seminaire AMC</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://www.paypal.com/sdk/js?client-id=AQoKpF59qjU8iYl8JljTg2t7b01K37bHvjLwtPcptGA_miiaBYkD5NH_XaGBjH98EpX83EII9UYMD1UQ&currency=EUR&disable-funding=credit,card"></script>
</head>
<body>

<?php
include ("./include/nav.php");
?>
<section class="Séminaire" id="Séminaire">

    <h1 class="heading"> Mon Panier </h1>

    <div class="box-container">

        <div class="box">
            <img src="./images/amc.png" alt="">
            <h3>Récapitulatif :</h3>
            <?php
            // Dans le cas où c'est un adherent
            if(isset($_SESSION['id_adherent']) and !empty($_SESSION['id_adherent'])){

                $prixA = 0;

                // Requête pour compter le nombre de séminaire dans le panier
                $reqBasketA = $bdd -> prepare("SELECT * FROM panier WHERE id_adherent = ?");
                $reqBasketA -> execute(array($_SESSION['id_adherent']));
                $countA = $reqBasketA -> rowCount();


                if($countA == 4){
                    $prixA = 150;
                }else{
                    $prixA = $countA * 50;
                }
                while($seminarFetch = $reqBasketA -> fetch()){
                    //var_dump($seminarFetch);
                    //$reqSeminar = $bdd -> prepare("SELECT * FROM weekend WHERE id_we = ?");
                   //$reqSeminar -> execute(array($seminarFetch['id_we']));
                    $reqSeminar = $bdd -> query('SELECT * FROM weekend WHERE id_we='.$seminarFetch['id_we']);
                    $rsA = $reqSeminar -> fetch();

                    ?>
                    <p><?= $rsA['name']?> du <?= $rsA['date_debut']?> au <?= $rsA['date_fin']?></p>  <a href="./php/deletBasket.php?id_se=<?= $rsA['id_we']?>">supprimer</a><br>

                    <?php

                }

                $reqMesSeminaires = $bdd -> prepare("SELECT * FROM  mySeminar WHERE id_adherent = ?");
                $reqMesSeminaires -> execute(array($_SESSION['id_adherent']));
                $countSeminar = $reqMesSeminaires -> rowCount();

                $reqCount = $reqBasketA -> rowCount();

                if($countSeminar == 3){
                    ?>
                    <h3>La mosquée vous offre ce dernier séminaire, étant donné que vous vous êtes déjà inscrit à 3 séminaires.</h3>
                    <a href="./php/approvePayment.php?id_se=<?= $rsA['id_we']?>" class="btn">Ajouter à mes séminaires</a>
                    <?php
                }
                 ?>

                <?php
                if($countSeminar == 2 && $reqCount == 2){
                    $prixA = 50;
                    ?>

                    <p>Total = <?php echo $prixA;?> Euros</p>
                    <div id="paypal-payment-button">

                    </div><?php
                }
                ?>

                <?php
                if($countSeminar == 1 && $reqCount == 3){
                    $prixA = 100;
                    ?>
                    <p>Total = <?php echo $prixA;?> Euros</p>
                    <div id="paypal-payment-button">

                    </div><?php
                }else{
                ?>
                <p>Total = <?php echo $prixA;?> Euros</p>
                <div id="paypal-payment-button">

                </div>
                <?php }}?>



            <?php
            // Dans le cas où c'est un user
            if(isset($_SESSION['id_user']) and !empty($_SESSION['id_user'])){

                $prixU = 0;
                $idU = (int) $_SESSION['id_user'];

                $reqBasketU = $bdd -> prepare("SELECT * FROM panier WHERE id_user = ?");
                $reqBasketU -> execute(array($idU));
                $countU = $reqBasketU -> rowCount();

                if($countU == 4){
                    $prixU = 200;
                }else{
                    $prixU = $countU * 60;
                }



                while($seminarFetchU = $reqBasketU -> fetch()){
                    $reqSeminarU = $bdd -> prepare("SELECT * FROM weekend WHERE id_we = ?");
                    $reqSeminarU -> execute(array($seminarFetchU['id_we']));
                    $rsU = $reqSeminarU -> fetch();
                    ?>
                    <p><?= $rsU['name']?> du <?= $rsU['date_debut']?> au <?= $rsU['date_fin']?></p><a href="./php/deletBasket.php?id_se=<?= $rsU['id_we']?>">supprimer</a><br>
                    <?php
                }
                $reqMesSeminairesU = $bdd -> prepare("SELECT * FROM  mySeminar WHERE id_user = ?");
                $reqMesSeminairesU -> execute(array($_SESSION['id_user']));
                $countSeminarU = $reqMesSeminairesU -> rowCount();

                $reqCountU = $reqBasketU -> rowCount();

                if($countSeminarU == 3){
                    ?>
                    <h3>Vous souhaitez assister aux quatre séminaires, le quatrième est donc au prix de 20 euros au lieu de 60 euros.</h3>
                    <?php
                    $prixU = 20;
                    ?>
                    <p>Total = <?php echo $prixU;?> Euros</p>

                    <div id="paypal-payment-button">

                    </div>

                    <?php
                }?>
                    <?php
                    if($countSeminarU == 2 && $reqCountU == 2){
                        ?>
                        <h3>Vous souhaitez assister aux quatre séminaires, le quatrième est donc au prix de 20 euros au lieu de 60 euros.</h3>
                        <?php
                        $prixU = 80;
                        ?>
                        <p>Total = <?php echo $prixU;?> Euros</p>

                        <div id="paypal-payment-button">

                        </div>

                        <?php
                    }
                ?>

                <?php
                if($countSeminarU == 1 && $reqCountU == 3){
                    ?>
                    <h3>Vous souhaitez assister aux quatre séminaires, le quatrième est donc au prix de 20 euros au lieu de 60 euros.</h3>
                    <?php
                    $prixU = 140;
                    ?>
                    <p>Total = <?php echo $prixU;?> Euros</p>

                    <div id="paypal-payment-button">

                    </div>

                    <?php
                }
                ?>

                <p>Total = <?php echo $prixU;?> Euros</p>

                <div id="paypal-payment-button">

                    </div>
            <?php } ?>
        </div>

    </div>

</section>



<!-- features section ends -->

<!-- footer section starts  -->

<?php
include('./js/script.php');
include "./include/footer.php";
?>

</body>


