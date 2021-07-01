<?php
include("../config/conn.php");

if (isset($_POST['mdp'], $_POST['mail'], $_POST['update_form'])
    and !empty($_POST['mdp'])
    and !empty($_POST['mail'])
    and !empty($_POST['update_form'])) {


    if (isset($_POST['yes']) and !empty($_POST['yes'])) {

        $mdpA = sha1($_POST['mdp']);
        $mailA = htmlspecialchars($_POST['mail']);

        $reqMailAdherent = $bdd->prepare("SELECT * FROM adherent WHERE mail=?");
        $reqMailAdherent->execute(array($mailA));

        $mailAdherentExist = $reqMailAdherent->rowCount();

        if ($mailAdherentExist == 1) {

            $reqUpdatePass = $bdd->prepare("UPDATE adherent SET mdp = ? WHERE mail = ?");
            $reqUpdatePass->execute(array($mdpA, $mailA));

            header("Location:../login.php");

        } else {
            $msg = "Cet email n'existe pas";
            header("Location:../passwordRecovery.php?erreur=$msg");
        }
    } else {
        $mdpU = sha1($_POST['mdp']);
        $mailU = htmlspecialchars($_POST['mail']);

        $reqMailexistUser = $bdd->prepare("SELECT * FROM customer WHERE mail = ?");
        $reqMailexistUser->execute(array($mailU));

        $mailUserExistU = $reqMailexistUser->rowCount();

        if ($mailUserExistU == 1) {
            $reqUpdatePassU = $bdd->prepare("UPDATE customer SET password = ? WHERE mail = ?");
            $reqUpdatePassU->execute(array($mdpU, $mailU));

            header("Location:../login.php");

        } else {
            $msg = "Cet email n'existe pas";
            header("Location:../passwordRecovery.php?erreur=$msg");
        }

    }

} else{
    $msg = "Veuillez remplir tous les champs";
header("../passwordRecovery.php?erreur=$msg");}

