<?php

//update_is_type_status.php

include('database_connection.php');

session_start();

$query = "
UPDATE sessao_logged 
SET is_type = '".$_POST["is_type"]."' 
WHERE login_id = '".$_COOKIE["login_id"]."'
";

$statement = $connect->prepare($query);

$statement->execute();

?>