<?php

date_default_timezone_set('Europe/Lisbon');//or change to whatever timezone you want
header('Content-Type: text/html; charset=UTF-8');

$servername = "us-cdbr-east-05.cleardb.net";
$username = "bfc3454c13359a";
$password = "8dffbfd8";
$dbname = "heroku_66fdfb6d3e4b701";




$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Erro ao ligar DB" . mysqli_connect_error());
}



header('Access-Control-Allow-Methods: POST');

mysqli_set_charset($conn,"utf8");

?>