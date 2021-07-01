<?php
session_start();
include("./config/conn.php");
if((isset($_SESSION['id_adherent']) and !empty($_SESSION['id_adherent'])) || (isset($_SESSION['id_user']) and !empty($_SESSION['id_user']))){
    include("./view/home.view.php");
}else{
    header("Location:./login.php");
}

?>
