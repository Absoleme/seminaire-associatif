<?php
session_start();
include ('../config/conn.php');


if(isset($_SESSION['id_adherent']) and !empty($_SESSION['id_adherent'])){
    // On copie le panier du client dans ses séminaires, une fois fait on supprime son panier
    $reqpanier = $bdd -> prepare("SELECT * FROM panier WHERE id_adherent = ?");
    $reqpanier -> execute(array($_SESSION['id_adherent']));

    while ($reqFetchA = $reqpanier -> fetch()){
        $reqAddinSeminar = $bdd -> prepare("INSERT INTO mySeminar(id_adherent, id_we) VALUES(?,?)");
        $reqAddinSeminar -> execute(array($_SESSION['id_adherent'], $reqFetchA['id_we']));
    }

    $reqDeletePanier = $bdd -> prepare("DELETE FROM panier WHERE id_adherent = ?");
    $reqDeletePanier -> execute(array($_SESSION['id_adherent']));

    header("Location:../mySeminar.php");
}

if(isset($_SESSION['id_user']) and !empty($_SESSION['id_user'])){

    $reqpanierU = $bdd -> prepare("SELECT * FROM panier WHERE id_user = ?");
    $reqpanierU -> execute(array($_SESSION['id_user']));

    while($reqFetchU = $reqpanierU -> fetch()){
        $reqAddinSeminarU = $bdd -> prepare("INSERT INTO mySeminar(id_user, id_we) VALUES(?,?)");
        $reqAddinSeminarU -> execute(array($_SESSION['id_user'], $reqFetchU['id_we']));

    }

    $reqDeletePanierU = $bdd -> prepare("DELETE FROM panier WHERE id_user =?");
    $reqDeletePanierU -> execute(array($_SESSION['id_user']));
    header("Location:../mySeminar.php");

}

?>
