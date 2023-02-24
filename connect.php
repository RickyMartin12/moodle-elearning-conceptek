<?php

date_default_timezone_set('Europe/Lisbon');//or change to whatever timezone you want
header('Content-Type: text/html; charset=UTF-8');

$servername = "us-cdbr-east-06.cleardb.net";
$username = "b590e12a78989c";
$password = "35b87add";
$dbname = "heroku_613ab8d128e91a9";
$port = "3306";
$conn = mysqli_connect($servername, $username, $password, $dbname, $port);
if (!$conn) {
    die("Erro ao ligar DB" . mysqli_connect_error());
}



header('Access-Control-Allow-Methods: POST');

mysqli_set_charset($conn,"utf8");

?>