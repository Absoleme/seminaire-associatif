<?php
include("../config/conn.php");

if(isset($_POST['formconnexion'], $_POST['mail'], $_POST['mdp']) and !empty($_POST['formconnexion'])
    and !empty($_POST['mail'])
    and !empty($_POST['mdp'])
){
        $mail = htmlspecialchars($_POST['mail']);
        $mdp = sha1($_POST['mdp']);

        if(isset($_POST['yes']) and !empty($_POST['yes'])){
            $reqadherent = $bdd -> prepare("SELECT * FROM adherent WHERE mail = ? and mdp = ?");
            $reqadherent -> execute(array($mail, $mdp));
            $adherentExist = $reqadherent -> rowCount();

            if($adherentExist == 1){
                session_start();
                $userinfo = $reqadherent -> fetch();
                $_SESSION['id_adherent'] = $userinfo['id_adherent'];
                $_SESSION['prenom'] = $userinfo['prenom'];
                $_SESSION['mail'] = $userinfo['mail'];
                $_SESSION['nom'] = $userinfo['nom'];
                $_SESSION['telephone'] = $userinfo['telephone'];
                $_SESSION['mdp'] = $userinfo['mdp'];

                header("Location:../index.php");
            }else
            {
                $msg = "Mauvais mail ou mot de passe";
                header("Location:../login.php?erreur=$msg");
            }
        }else{
            $requserC = $bdd -> prepare("SELECT * FROM customer WHERE mail = ? and password = ?");
            $requserC -> execute(array($mail,$mdp));
            $userexist = $requserC -> rowCount();

            if($userexist == 1){
                session_start();
                $userinfo = $requserC -> fetch();
                $_SESSION['id_user'] = $userinfo['id_user'];
                $_SESSION['prenom'] = $userinfo['prenom'];
                $_SESSION['mail'] = $userinfo['mail'];
                $_SESSION['nom'] = $userinfo['nom'];
                $_SESSION['telephone'] = $userinfo['telephone'];
                $_SESSION['mdp'] = $userinfo['password'];
                header("Location:../index.php");

            }else
            {
                $msg = "Mauvais mail ou mot de passe";
                header("Location:../login.php?erreur=$msg");
            }
        }



}
?>
