<?php

//update_last_activity.php

include('database_connection.php');

$connect = new PDO('mysql:host=us-cdbr-east-05.cleardb.net;dbname=heroku_66fdfb6d3e4b701', 'bfc3454c13359a', '8dffbfd8');

session_start();

$query = "
UPDATE sessao_logged 
SET last_activity = now() 
WHERE login_id = '".$_COOKIE["login_id"]."'
";

$statement = $connect->prepare($query);

$statement->execute();

?>

