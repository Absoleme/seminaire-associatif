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
include ('./include/nav.php');
?>
<!-- Informations du compte -->
<section class="Séminaire" id="Séminaire">

    <h1 class="heading"> Mes informations </h1>

    <div class="box-container">
        <div class="box">
            <h3>NOM : <?= $_SESSION['nom'] ?></h3>
            <h3>PRENOM : <?= $_SESSION['prenom'] ?></h3>
            <h3>MAIL : <?= $_SESSION['mail'] ?></h3>
            <h3>telephone: <?= $_SESSION['telephone'] ?></h3>
        </div>

    </div>

    <h1 class="heading"> Modifier mes informations </h1>

    <div class="box-container">
        <div class="box">
            <form action="./php/profilUpdate.php" method="post">

                <div class="inputBox">
                    <input type="text" name="firstNameEdit" required>
                    <label>Prénom</label>
                </div>

                <div class="inputBox">
                    <input type="text" name="lastNameEdit" required>
                    <label>Nom</label>
                </div>

                <div class="inputBox">
                    <input type="email" name="emailEdit" required>
                    <label>Mail</label>
                </div>

                <input type="submit" class="btn" value="MODIFIER" name="editForm1">
                <br>

            </form>
            <br>

            <form action="./php/profilUpdate.php" method="post">
                <p><?= $_GET['erreur']?></p>
                <div class="inputBox">
                    <input type="password" name="actualPass" required>
                    <label>Ancien mot de passe</label>
                </div>

                <div class="inputBox">
                    <input type="password" name="passwordEdit" required>
                    <label>Nouveau mot de passe</label>
                </div>

                <input type="submit" class="btn" value="MODIFIER" name="editPassForm">
                <br>

            </form>
        </div>

    </div>

</section>

<?php
include "./include/footer.php";
?>

</body>


