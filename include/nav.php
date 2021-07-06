<!-- header section starts  -->

<header>

    <a href="./" class="logo"><span>AMC</span> Mosquée Choisy le roi</a>

    <input type="checkbox" id="menu-bar">
    <label for="menu-bar" class="fas fa-bars"></label>

    <nav class="navbar">
        <a href="./index.php">Accueil</a>
        <a href="./index.php#Séminaire">Séminaires</a>
        <?php
            if(empty($_SESSION['id_user']) and empty($_SESSION['id_adherent'])){
        ?>
        <a href="./login.php">Inscription/Connexion</a>
        <?php
            }
        ?>
        <?php

        if(!empty($_SESSION['id_adherent'])){
            $reqadherent = $bdd -> prepare("SELECT * FROM panier WHERE id_adherent = ?");
            $reqadherent -> execute(array($_SESSION['id_adherent']));
            $count = $reqadherent -> rowCount();
            ?>

            <a href="./mySeminar.php">Mes Séminaires</a>
            <a href="./myBasket.php">Mon panier(<?= $count?>)</a>
            <a href="./profil.php"><?php echo $_SESSION['prenom']; ?> </a>
            <a href="./php/logout.php">Déconnexion</a>
        <?php
        }?>

        <?php
        if(!empty($_SESSION['id_user'])){
            $reqadherent = $bdd -> prepare("SELECT * FROM panier WHERE id_user = ?");
            $reqadherent -> execute(array($_SESSION['id_user']));
            $count = $reqadherent -> rowCount();
        ?>
            <a href="./mySeminar.php">Mes Séminaires</a>
            <a href="./myBasket.php">Mon panier (<?= $count?>)</a>
            <a href="./profil.php"><?php echo $_SESSION['prenom']; ?> </a>
            <a href="./php/logout.php">Déconnexion</a>
        <?php
        }?>

    </nav>

</header>

<!-- header section ends -->
