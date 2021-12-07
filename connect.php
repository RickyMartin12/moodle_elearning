<?php

date_default_timezone_set('Europe/Lisbon');//or change to whatever timezone you want
header('Content-Type: text/html; charset=UTF-8');

$servername = "us-cdbr-east-04.cleardb.com";
$username = "bf11f62aeedaa0";
$password = "d4a3e50d";
$dbname = "heroku_f9fbbc4dd7ac956";




$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Erro ao ligar DB" . mysqli_connect_error());
}



header('Access-Control-Allow-Methods: POST');

mysqli_set_charset($conn,"utf8");

?>