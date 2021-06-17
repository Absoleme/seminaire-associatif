<!-- header section starts  -->

<header>

    <a href="#" class="logo"><span>ACMC</span> Mosquée Choisy le roi</a>

    <input type="checkbox" id="menu-bar">
    <label for="menu-bar" class="fas fa-bars"></label>

    <nav class="navbar">
        <a href="#home">Accueil</a>
        <a href="#Séminaire">Séminaires</a>
        <a href="#about">Informations</a>
        <?php
        if(!empty($_SESSION['id_adherent']) || !empty($_SESSION['id_user'])){
            ?>
            <a href="#">Mes Séminaires</a>
            <a>Salam Aleykoum <?php echo $_SESSION['prenom']; ?> </a>
            <?php
        }
        ?>
    </nav>

</header>

<!-- header section ends -->
