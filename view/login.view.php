<<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seminaire ACMC</title>

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

    <form action="./php/login.php" method="post">

        <h1 class="heading">Connexion</h1>

        <div class="inputBox">
            <input type="email" name="mail" required>
            <label>Mail</label>
        </div>

        <div class="inputBox">
            <input type="password" name="mdp" required>
            <label>Mot de passe</label>
        </div>

        <input type="submit" class="btn" value="CONNEXION" name="formconnexion">
        <br>
        Vous n'avez pas de compte ? <a href="../register.php">S'inscrire</a><br>
        <a href="./passwordRecovery.php">Mot de passe oublié ?</a>

    </form>


</section>
<!-- footer section starts  -->

<?php
include "./include/footer.php";
?>

</body>

