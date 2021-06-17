<?php
session_start();

if((isset($_SESSION['id_user']) and !empty($_SESSION['id_user'])) ||
    (isset($_SESSION['id_adherent']) and !empty($_SESSION['id_adherent']))){

    $id_user = (int)$_SESSION['id_user'];
    $id_adherent = (int)$_SESSION['id_adherent'];

    if(isset($_SESSION['id_user']) and !empty($_SESSION['id_user'])){
        $reqUserSeminar = $bdd -> prepare('SELECT * FROM joinTable WHERE id_user = ?');
        $reqUserSeminar -> execute(array($id_user));
        $userTab = $reqUserSeminar -> fetch();

        $reqWE = $bdd -> prepare("SELECT * FROM weekend WHERE id_we = ?");
        $reqWE -> execute(array($userTab['id_we']));

    }

    if(isset($_SESSION['id_adherent']) and !empty($_SESSION['id_adherent'])){
        $reqAdherentSeminar = $bdd -> prepare('SELECT * FROM joinTable WHERE id_adherent = ?');
        $reqAdherentSeminar -> execute(array($id_adherent));
        $adherentTab = $reqAdherentSeminar -> fetch();

        $reqWE = $bdd -> prepare("SELECT * FROM weekend WHERE id_we = ?");
        $reqWE -> execute(array($adherentTab['id_we']));
    }
}
?>
