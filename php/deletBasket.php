<?php
session_start();
include ('../config/conn.php');

if(isset($_SESSION['id_adherent'], $_GET['id_se']) and !empty($_SESSION['id_adherent']) and !empty($_GET['id_se'])){
    $idweA = (int) $_GET['id_se'];
    $reqDeleteBasket = $bdd -> prepare("DELETE FROM panier WHERE id_adherent = ? and id_we = ?");
    $reqDeleteBasket -> execute(array($_SESSION['id_adherent'], $idweA));
    header("Location:../myBasket.php");

}

if(isset($_SESSION['id_user'], $_GET['id_se']) and !empty($_SESSION['id_user']) and !empty($_GET['id_se'])){
    $idweU = (int) $_GET['id_se'];
    $reqDeleteBasket = $bdd -> prepare("DELETE FROM panier WHERE id_user = ? and id_we = ?");
    $reqDeleteBasket -> execute(array($_SESSION['id_user'], $idweU));
    header("Location:../myBasket.php");

}

?>
