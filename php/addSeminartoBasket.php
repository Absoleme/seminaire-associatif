<?php
include ("../config/conn.php");
session_start();
if(isset($_GET['id_we']) and !empty($_GET['id_we'])){
    $idwe = (int) $_GET['id_we'];

    if(isset($_SESSION['id_user']) and !empty($_SESSION['id_user'])){

        $reqWeExistinSeminar = $bdd -> prepare("SELECT * FROM mySeminar WHERE id_user = ? and id_we = ?");
        $reqWeExistinSeminar -> execute(array($_SESSION['id_user'], $idwe));
        $inSeminarExist = $reqWeExistinSeminar -> rowCount();

        $reqWeExist = $bdd -> prepare("SELECT * FROM panier WHERE id_we = ? and id_user =?");
        $reqWeExist -> execute(array($idwe, $_SESSION['id_user']));
        $wechech = $reqWeExist -> rowCount();

        if($wechech == 0 && $inSeminarExist == 0){
            $reqaddBasket = $bdd -> prepare("INSERT INTO panier(id_we,id_user) VALUES(?,?)");
            $reqaddBasket -> execute(array($idwe,$_SESSION['id_user']));
            header("Location:../index.php");
        }else{
            header("Location:../index.php");
        }
    }

    if(isset($_SESSION['id_adherent']) and !empty($_SESSION['id_adherent'])){

        $reqWeExistinSeminarA = $bdd -> prepare("SELECT * FROM mySeminar WHERE id_adherent = ? and id_we = ?");
        $reqWeExistinSeminarA -> execute(array($_SESSION['id_adherent'], $idwe));
        $inSeminarExistA = $reqWeExistinSeminarA -> rowCount();

        $reqWeExista = $bdd -> prepare("SELECT * FROM panier WHERE id_we = ? and id_adherent =?");
        $reqWeExista -> execute(array($idwe, $_SESSION['id_adherent']));
        $wechecha = $reqWeExista -> rowCount();

        if($wechecha == 0 && $inSeminarExistA == 0){
            $reqaddBasketAd = $bdd -> prepare("INSERT INTO panier(id_we,id_adherent) VALUES(?,?)");
            $reqaddBasketAd -> execute(array($idwe,$_SESSION['id_adherent']));
            header("Location:../index.php");
        }else{
            header("Location:../index.php");
        }

    }

}

?>
