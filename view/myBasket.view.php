<<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seminaire ACMC</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://www.paypal.com/sdk/js?client-id=ATqJoT8uledW83BN2RvdA4o9tptMnGw4EUVlV1na6YHhKgqXEHcJXE8t0EZLGsDr4mybfMJ5nXxL10vQ"></script>
    <script src="./js/index.js"></script>
</head>
<body>

<?php
include ('./include/nav.php');
?>
<section class="Séminaire" id="Séminaire">

    <h1 class="heading"> Mon Panier </h1>

    <div class="box-container">

        <div class="box">
            <img src="./images/f-icon1.png" alt="">
            <h3>Récapitulatif :</h3>
            <?php
            // Dans le cas où c'est un adherent
            if(isset($_SESSION['id_adherent']) and !empty($_SESSION['id_adherent'])){
            while($seminarFetch = $reqBasketA -> fetch()){
                $reqSeminar = $bdd -> prepare("SELECT * FROM weekend WHERE id_we = ?");
                $reqSeminar -> execute(array($seminarFetch['id_we']));
                $rsA = $reqSeminar -> fetch();
                ?>
                <p><?= $rsA['name']?> du <?= $rsA['date_debut']?> au <?= $rsA['date_fin']?></p>
                <?php
            }
            ?>
                <div id="paypal-payment-button">

                </div>
            <?php } ?>

            <?php
            // Dans le cas où c'est un user
            if(isset($_SESSION['id_user']) and !empty($_SESSION['id_user'])){
                while($seminarFetchU = $reqBasketU -> fetch()){
                    $reqSeminarU = $bdd -> prepare("SELECT * FROM weekend WHERE id_we = ?");
                    $reqSeminarU -> execute(array($seminarFetchU['id_we']));
                    $rsU = $reqSeminarU -> fetch();
                    ?>
                    <p><?= $rsU['name']?> du <?= $rsU['date_debut']?> au <?= $rsU['date_fin']?></p>
                    <?php
                }
                ?>
                    <div id="paypal-payment-button">

                    </div>
            <?php } ?>
        </div>

    </div>

</section>



<!-- features section ends -->

<!-- footer section starts  -->

<?php
include "./include/footer.php";
?>

</body>


