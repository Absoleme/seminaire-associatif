<?php
include("../config/conn.php");

if(isset($_POST['mdp'], $_POST['mail'], $_POST['update_form'])
    and !empty($_POST['mdp'])
    and !empty($_POST['mail'])
    and !empty($_POST['update_form'])){

    $mdp = sha1($_POST['mdp']);
    $mail = htmlspecialchars($_POST['mail']);


    if(isset($_POST['yes']) and !empty($_POST['yes'])){
        echo "log1";
        $reqMailAdherent = $bdd -> prepare("SELECT * FROM adherent WHERE mail=?");
        echo "log2";
        $reqMailAdherent -> execute(array($mail));

        $mailAdherentExist = $reqMailAdherent -> rowCount();
        echo "log3";
        if($mailAdherentExist == 1){
            echo "log4";
            $reqUpdatePass = $bdd -> prepare("UPDATE adherent SET mdp = ? WHERE mail = ?");
            $reqUpdatePass -> execute(array($mdp, $mail));
            echo "log5";
            header("Location:../login.php");

        }else
            echo "Cet email n'existe pas";
    }else{

        $reqMailexistUser = $bdd -> prepare("SELECT * FROM user WHERE mail = ?");
        $reqMailexistUser -> execute(array($mail));

        $mailUserExist = $reqMailexistUser -> rowCount();

        if($mailUserExist == 1){
            $reqUpdatePass = $bdd -> prepare("UPDATE user SET password = ? WHERE mail = ?");
            $reqUpdatePass -> execute(array($mdp, $mail));

            header("Location:../login.php");
        }else
            echo "Cet email n'existe pas";
    }

}else
    echo "Veuillez remplir tous les champs";
?>
