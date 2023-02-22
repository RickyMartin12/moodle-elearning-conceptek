<?php

date_default_timezone_set('Europe/Lisbon');//or change to whatever timezone you want
header('Content-Type: text/html; charset=UTF-8');

$servername = "containers-us-west-77.railway.app";
$username = "root";
$password = "Rnjhhqi1DaRKTHsDTePc";
$dbname = "railway";
$port = "6143";
$conn = mysqli_connect($servername, $username, $password, $dbname, $port);
if (!$conn) {
    die("Erro ao ligar DB" . mysqli_connect_error());
}



header('Access-Control-Allow-Methods: POST');

mysqli_set_charset($conn,"utf8");

?>