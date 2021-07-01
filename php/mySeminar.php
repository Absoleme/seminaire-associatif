<?php

    if(isset($_SESSION['id_user']) and !empty($_SESSION['id_user'])){
        $id_user = (int)$_SESSION['id_user'];
        $reqUserSeminar = $bdd -> prepare('SELECT * FROM mySeminar WHERE id_user = ?');
        $reqUserSeminar -> execute(array($id_user));

    }

    if(isset($_SESSION['id_adherent']) and !empty($_SESSION['id_adherent'])){
        $id_adherent = (int)$_SESSION['id_adherent'];
        $reqAdherentSeminar = $bdd -> prepare('SELECT * FROM mySeminar WHERE id_adherent = ?');
        $reqAdherentSeminar -> execute(array($id_adherent));
    }
?>
