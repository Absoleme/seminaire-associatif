<?php

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
}

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
}

?>
