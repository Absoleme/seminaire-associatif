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
<section class="Séminaire" id="Séminaire">

    <h1 class="heading"> Mes Séminaires </h1>

    <div class="box-container">
    <?php
    if(isset($_SESSION['id_adherent']) and !empty($_SESSION['id_adherent'])){

        $countA = $reqAdherentSeminar -> rowCount();

        if($countA != 0){
            while($reqFetchA = $reqAdherentSeminar -> fetch()){
                $reqWE = $bdd -> prepare("SELECT * FROM weekend WHERE id_we = ?");
                $reqWE -> execute(array($reqFetchA['id_we']));
                $ra = $reqWE -> fetch();
                ?>
                <div class="box">
                    <h3><?= $ra['name']?></h3>
                    <p> Du <?= $ra['date_debut'] ?> au <?= $ra['date_fin'] ?></p>
                    <p>A présenter le jour du séminaire.</p>
                </div>
                <?php
            }
        }else{
    ?>
        <div class="box">

            <h3>Vous ne vous êtes inscrit à aucun séminaire.</h3>

        </div>
        <?php
        }


        }?>


        <?php
        if(isset($_SESSION['id_user']) and !empty($_SESSION['id_user'])){

            $countU = $reqUserSeminar -> rowCount();
            if($countU != 0){

                while($reqFetchU = $reqUserSeminar -> fetch()){
                    $reqWEU = $bdd -> prepare("SELECT * FROM weekend WHERE id_we = ?");
                    $reqWEU -> execute(array($reqFetchU['id_we']));
                    $ru = $reqWEU -> fetch();
                    ?>
                    <div class="box">
                        <h3><?= $ru['name']?></h3>
                        <p> Du <?= $ru['date_debut'] ?> au <?= $ru['date_fin'] ?></p>
                        <p>A présenter le jour du séminaire.</p>

                    </div>
                    <?php
                }
            }else{
                ?>
                <div class="box">

                    <h3>Vous ne vous êtes inscrit à aucun séminaire.</h3>

                </div>
                <?php
            }

            }
        ?>


    </div>

</section>
<?php
    include ('./include/footer.php');
?>
</body>
