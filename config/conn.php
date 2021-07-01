<?php
/*try
{
    $bdd = new PDO('mysql:host=localhost;dbname=seminaire; charset=utf8', 'root','root');
}
catch (PDOException $e)
{
    die('Erreur : ' . $e->getMessage());
}*/

//Get Heroku ClearDB connection information
$cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
$cleardb_server = $cleardb_url["host"];
$cleardb_username = $cleardb_url["user"];
$cleardb_password = $cleardb_url["pass"];
$cleardb_db = substr($cleardb_url["path"], 1);
$active_group = 'default';
$query_builder = TRUE;
// Connect to DB
//$bdd = new PDO('mysql:host='.$cleardb_server.';dbname='.$cleardb_db.'; charset=utf8,' .$cleardb_username.','.$cleardb_password);
//$bdd = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);
$bdd = new PDO("mysql:host=$cleardb_server; dbname=$cleardb_db;", $cleardb_username, $cleardb_password);
?>
