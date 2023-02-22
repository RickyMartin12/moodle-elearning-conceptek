<?php

//update_last_activity.php

include('database_connection.php');

$connect = new PDO('mysql:host=containers-us-west-77.railway.app;dbname=railway;port=6143', 'root', 'Rnjhhqi1DaRKTHsDTePc');

session_start();

$query = "
UPDATE sessao_logged 
SET last_activity = now() 
WHERE login_id = '".$_COOKIE["login_id"]."'
";

$statement = $connect->prepare($query);

$statement->execute();

?>

