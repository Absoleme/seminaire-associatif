<?php
include("../config/conn.php");
session_start();
if(isset($_POST['nom'], $_POST['prenom'], $_POST['tel'], $_POST['mail'], $_POST['mdp'], $_POST['mdp2'] )
    and !empty($_POST['nom'])
    and !empty($_POST['prenom'])
    and !empty($_POST['tel'])
    and !empty($_POST['mail'])
    and !empty($_POST['mdp'])
    and !empty($_POST['mdp2'])
){
    $prenom = htmlspecialchars($_POST['prenom']);
    $nom = htmlspecialchars($_POST['nom']);
    $tel = htmlspecialchars(($_POST['tel']));
    $mail = htmlspecialchars($_POST['mail']);
    $mdp = sha1($_POST['mdp']);
    $mdp2 = sha1($_POST['mdp2']);

    $prenomlength = strlen($prenom); // compte le nombre de lettre dans la variable prenom et renvoie un nombre

   // if(isset($_POST['no']) and !empty($_POST['no'])) {

    //}
    if(isset($_POST['yes']) and !empty($_POST['yes'])){
        if ($prenomlength <= 250) {

            $reqmail = $bdd->prepare('SELECT * FROM adherent WHERE mail = ?'); // SELECTIONNE TOUS LES MAIL dans la table user
            $reqmail->execute(array($mail));
            $mailexist = $reqmail->rowCount(); // Va contenir le nombre de ligne où le mail rempli est présents

            if ($mailexist == 0) {

                $mdplength = strlen($mdp);

                if ($mdplength <= 250) {

                    if ($mdp == $mdp2) {

                       /* session_start();
                        $userinfo = $reqmail->fetch();
                        $_SESSION['id_adherent'] = $userinfo['id_adherent'];
                        $_SESSION['prenom_adherent'] = $userinfo['prenom'];*/


                        $insertUser = $bdd->prepare('INSERT INTO adherent (prenom, nom, telephone, mdp ,mail) VALUES (?,?,?,?,?)');
                        $insertUser->execute(array($prenom, $nom, $tel, $mdp, $mail));

                        header("Location:../login.php");

                    } else {
                        echo "Vos mots de passes ne correspondent pas";
                    }
                } else {
                    echo "Mot de passe trop long";
                }
            } else {
                echo "Mail déjà existant";
            }
        }
    }else{
        if ($prenomlength <= 250) {

            $reqmail = $bdd->prepare('SELECT * FROM user WHERE mail = ?'); // SELECTIONNE TOUS LES MAIL dans la table user
            $reqmail->execute(array($mail));
            $mailexist = $reqmail->rowCount(); // Va contenir le nombre de ligne où le mail rempli est présents

            if ($mailexist == 0) {

                $mdplength = strlen($mdp);

                if ($mdplength <= 250) {

                    if ($mdp == $mdp2) {

                        $insertUser = $bdd->prepare('INSERT INTO user (prenom, nom, telephone, mail,password) VALUES (?,?,?,?,?)');
                        $insertUser->execute(array($prenom, $nom, $tel, $mail, $mdp));

                        header("Location:../login.php");

                    } else {
                        echo "Vos mots de passes ne correspondent pas";
                    }
                } else {
                    echo "Mot de passe trop long";
                }
            } else {
                echo "Mail déjà existant";
            }
        }
    }

}else{
    echo "Veulliez remplir tous les champs";
}

?>
