<?php

//include('database_connection.php');

$connect = new PDO('mysql:host=us-cdbr-east-05.cleardb.net;dbname=heroku_66fdfb6d3e4b701', 'bfc3454c13359a', '8dffbfd8');

//header('Content-Type: text/html; charset=UTF-8');

session_start();

$query = "
UPDATE sessao_logged 
SET last_activity = now() 
WHERE login_details_id = '".$_SESSION["login_details_id"]."'
";

$statement = $connect->prepare($query);

$statement->execute();

?>

