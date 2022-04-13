<?php

//insert_chat.php

include('database_connection.php');

$connect = new PDO('mysql:host=us-cdbr-east-05.cleardb.net;dbname=heroku_66fdfb6d3e4b701', 'bfc3454c13359a', '8dffbfd8');

session_start();

$data = array(
	':to_user_id'		=>	$_POST['to_user_id'],
	':from_user_id'		=>	$_COOKIE['id'],
	':chat_message'		=>	$_POST['chat_message'],
	':status'			=>	'1'
);

$query = "
INSERT INTO chat_message 
(to_user_id, from_user_id, chat_message, status) 
VALUES (:to_user_id, :from_user_id, :chat_message, :status)
";

$statement = $connect->prepare($query);

if($statement->execute($data))
{
	echo fetch_user_chat_history($_COOKIE['id'], $_POST['to_user_id'], $connect);
}

?>