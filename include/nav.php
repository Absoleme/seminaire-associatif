<!-- header section starts  -->

<header>

    <a href="#" class="logo"><span>ACMC</span> Mosquée Choisy le roi</a>

    <input type="checkbox" id="menu-bar">
    <label for="menu-bar" class="fas fa-bars"></label>

    <nav class="navbar">
        <a href="#home">Accueil</a>
        <a href="#Séminaire">Séminaires</a>
        <?php

        if(!empty($_SESSION['id_adherent'])){
            $reqadherent = $bdd -> prepare("SELECT * FROM panier WHERE id_adherent = ?");
            $reqadherent -> execute(array($_SESSION['id_adherent']));
            $count = $reqadherent -> rowCount();
            ?>

            <a href="#">Mes Séminaires</a>
            <a href="./myBasket.php">Mon panier(<?= $count?>)</a>
            <a>Salam <?php echo $_SESSION['prenom']; ?> </a>
        <?php
        }?>

        <?php
        if(!empty($_SESSION['id_user'])){
            $reqadherent = $bdd -> prepare("SELECT * FROM panier WHERE id_user = ?");
            $reqadherent -> execute(array($_SESSION['id_user']));
            $count = $reqadherent -> rowCount();
        ?>
            <a href="#">Mes Séminaires</a>
            <a href="./myBasket.php">Mon panier (<?= $count?>)</a>
            <a>Salam <?php echo $_SESSION['prenom']; ?> </a>
        <?php
        }?>

    </nav>

</header>

<!-- header section ends -->
