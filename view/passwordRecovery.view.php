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

<!-- contact section starts  -->

<section class="contact" id="contact">

    <div class="image">
        <img src="./images/amc.png" alt="">
    </div>

    <form action="./php/pass.php" method="post">

        <h1 class="heading">Modifier votre mot de passe</h1>
        <p><?= $_GET['erreur'] ?></p>
        <div class="inputBox">
            <input type="email" name="mail" required>
            <label>Mail</label>
        </div>

        <div class="inputBox">
            <input type="password" name="mdp" required>
            <label>Nouveau Mot de passe</label>
        </div>

        <h2>Suivez vous des cours à la mosquée de Choisy le roi ?</h2>

        <input type="checkbox" name="yes">
        <H3>Oui </H3>

        <input type="submit" class="btn" value="Modifier" name="update_form">


    </form>


</section>
<!-- footer section starts  -->

<?php
include "./include/footer.php";
?>

</body>


