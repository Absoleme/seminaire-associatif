<?php
session_start();
include ('../config/conn.php');

if(isset($_SESSION['id_adherent'],$_POST['editForm1'])
    and !empty($_POST['editForm1'])
    and !empty ($_SESSION['id_adherent'])){

    $requserA = $bdd -> prepare("SELECT * FROM adherent WHERE id_adherent = ?");
    $requserA -> execute(array($_SESSION['id_adherent']));
    $userA = $requserA -> fetch();

    if(isset($_POST['firstNameEdit']) and !empty($_POST['firstNameEdit']) and $_POST['firstNameEdit'] != $userA['prenom'])
    {

        $firstName = htmlspecialchars($_POST['firstNameEdit']);
        $firstNameLength = strlen($firstName);

        $updateFirstname = $bdd -> prepare("UPDATE adherent SET prenom = ? WHERE id_adherent = ?");
        $updateFirstname -> execute(array($firstName, $_SESSION['id_adherent']));
        $_SESSION['prenom'] = $firstName;

        header('Location:../profil.php');
    }else{
        header("Location:../profil.php");
    }

    if(isset($_POST['lastNameEdit']) and !empty($_POST['lastNameEdit'])and $_POST['lastNameEdit'] != $userA['nom'])
    {
        $lastName = htmlspecialchars($_POST['lastNameEdit']);
        $lastNameLength = strlen($lastName);

        $updateLastName = $bdd -> prepare("UPDATE adherent SET nom = ? WHERE id_adherent = ?");
        $updateLastName -> execute(array($lastName, $_SESSION['id_adherent']));
        $_SESSION['nom'] = $lastName;

        header("Location:../profil.php");
    }else{
        header("Location:../profil.php");
    }

    if(isset($_POST['emailEdit']) and !empty($_POST['emailEdit'])and $_POST['emailEdit'] != $userA['mail']){

        $email = htmlspecialchars($_POST['emailEdit']);
        $emailLength = strlen($email);

        $updateEmail = $bdd -> prepare("UPDATE adherent SET mail = ? WHERE id_adherent = ?");
        $updateEmail -> execute(array($email, $_SESSION['id_adherent']));
        $_SESSION['mail'] = $email;

        header("Location:../profil.php");
    }else{
        header("Location:../profil.php");
    }


}elseif(isset($_SESSION['id_adherent'],$_POST['editPassForm'], $_POST['passwordEdit'], $_POST['actualPass'])
    and !empty($_POST['editPassForm'])
    and !empty($_POST['passwordEdit'])
    and !empty($_POST['actualPass'])
    and !empty ($_SESSION['id_adherent'])
){
    $actualPass = sha1($_POST['actualPass']);
    $passwordEdit = sha1($_POST['passwordEdit']);

    $requserA = $bdd -> prepare("SELECT * FROM adherent WHERE id_adherent = ?");
    $requserA -> execute(array($_SESSION['id_adherent']));
    $userA = $requserA -> fetch();

    if($actualPass != $passwordEdit and $actualPass == $userA['mdp']){

        $updatePassA = $bdd -> prepare("UPDATE adherent SET mdp = ? WHERE id_adherent = ?");
        $updatePassA -> execute(array($passwordEdit, $_SESSION['id_adherent']));

        header("Location:../profil.php");
    }else{
        $msg = "Le mot de passe actuel ne correspond pas à celui que vous avez écrit";
        header("Location:../profil.php?erreur=$msg");
    }

}elseif(isset($_SESSION['id_user'],$_POST['editForm1'])
    and !empty($_POST['editForm1'])
    and !empty ($_SESSION['id_user'])){

    $requserU = $bdd -> prepare("SELECT * FROM customer WHERE id_user = ?");
    $requserU -> execute(array($_SESSION['id_user']));
    $userU = $requserU -> fetch();

    if(isset($_POST['firstNameEdit']) and !empty($_POST['firstNameEdit']) and $_POST['firstNameEdit'] != $userU['prenom'])
    {

        $firstName = htmlspecialchars($_POST['firstNameEdit']);
        $firstNameLength = strlen($firstName);

        $updateFirstname = $bdd -> prepare("UPDATE customer SET prenom = ? WHERE id_user = ?");
        $updateFirstname -> execute(array($firstName, $_SESSION['id_user']));
        $_SESSION['prenom'] = $firstName;

        header("Location:../profil.php");
    }else{
        header("Location:../profil.php");
    }

    if(isset($_POST['lastNameEdit']) and !empty($_POST['lastNameEdit'])and $_POST['lastNameEdit'] != $userU['nom'])
    {
        $lastName = htmlspecialchars($_POST['lastNameEdit']);
        $lastNameLength = strlen($lastName);

        $updateLastName = $bdd -> prepare("UPDATE customer SET nom = ? WHERE id_user = ?");
        $updateLastName -> execute(array($lastName, $_SESSION['id_user']));
        $_SESSION['nom'] = $lastName;

        header("Location:../profil.php");
    }else{
        header("Location:../profil.php");
    }

    if(isset($_POST['emailEdit']) and !empty($_POST['emailEdit'])and $_POST['emailEdit'] != $userU['mail']){

        $email = htmlspecialchars($_POST['emailEdit']);
        $emailLength = strlen($email);

        $updateEmail = $bdd -> prepare("UPDATE customer SET mail = ? WHERE id_user = ?");
        $updateEmail -> execute(array($email, $_SESSION['id_user']));
        $_SESSION['mail'] = $email;

        header("Location:../profil.php");
    }else{
        header("Location:../profil.php");
    }


}elseif(isset($_SESSION['id_user'],$_POST['editPassForm'], $_POST['passwordEdit'], $_POST['actualPass'])
    and !empty($_POST['editPassForm'])
    and !empty($_POST['passwordEdit'])
    and !empty($_POST['actualPass'])
    and !empty ($_SESSION['id_user'])
){
    $actualPass = sha1($_POST['actualPass']);
    $passwordEdit = sha1($_POST['passwordEdit']);

    $requserAP = $bdd -> prepare("SELECT * FROM customer WHERE id_user = ?");
    $requserAP -> execute(array($_SESSION['id_user']));
    $userAP = $requserAP -> fetch();

    if($actualPass != $passwordEdit and $actualPass == $userAP['mdp']){
        $updatePassAP = $bdd -> prepare("UPDATE customer SET password = ? WHERE id_user = ?");
        $updatePassAP -> execute(array($passwordEdit, $_SESSION['id_user']));
        header("Location:../profil.php");
    }else{
        $msg = "Le mot de passe actuel ne correspond pas à celui que vous avez écrit";
        header("Location:../profil.php?erreur=$msg");
    }

}else
    header("Location:../profil.php");
?>
