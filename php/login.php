<?php
include("../config/conn.php");

if(isset($_POST['formconnexion'], $_POST['mail'], $_POST['mdp']) and !empty($_POST['formconnexion'])
    and !empty($_POST['mail'])
    and !empty($_POST['mdp'])
){
        $mail = htmlspecialchars($_POST['mail']);
        $mdp = sha1($_POST['mdp']);

        $requser = $bdd -> prepare("SELECT * FROM user WHERE mail = ? and password = ?");
        $requser->execute(array($mail,$mdp));
        $userexist = $requser->rowCount();

        if($userexist == 1){
            session_start();
            $userinfo = $requser -> fetch();
            $_SESSION['id_user'] = $userinfo['id_user'];
            $_SESSION['prenom'] = $userinfo['prenom'];
            $_SESSION['mail'] = $userinfo['mail'];
            header("Location:./index.php?id=".$_SESSION['id_user']);

        }else
        {
            echo "Mauvais mail ou mot de passe";
        }

        $reqadherent = $bdd -> prepare("SELECT * FROM adherent WHERE mail = ? and mdp = ?");
        $reqadherent -> execute(array($mail, $mdp));
        $adherentExist = $reqadherent -> rowCount();

        if($adherentExist == 1){
            session_start();
            $userinfo = $reqadherent -> fetch();
            $_SESSION['id_adherent'] = $userinfo['id_adherent'];
            $_SESSION['prenom'] = $userinfo['prenom'];
            $_SESSION['mail'] = $userinfo['mail'];
            header("Location:../index.php?id_adherent=".$_SESSION['id_adherent']);
        }



}
?>
