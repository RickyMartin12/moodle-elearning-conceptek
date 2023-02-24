<?php

//update_last_activity.php

include('database_connection.php');

$connect = new PDO('mysql:host=us-cdbr-east-06.cleardb.net;dbname=heroku_613ab8d128e91a9;port=3306', 'b590e12a78989c', '35b87add');

session_start();

$query = "
UPDATE sessao_logged 
SET last_activity = now() 
WHERE login_id = '".$_COOKIE["login_id"]."'
";

$statement = $connect->prepare($query);

$statement->execute();

?>

