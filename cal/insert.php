<?php

//insert.php

$connect = new PDO('mysql:host=localhost;dbname=moodle', 'root', '');
header('Content-Type: text/html; charset=UTF-8');


$user_id = $_COOKIE['id'];

if(isset($_POST["title"]))
{
 $query = "
 INSERT INTO events 
 (title, start_event, end_event, user_id) 
 VALUES (:title, :start_event, :end_event, :user_id)
 ";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':title'  => $_POST['title'],
   ':start_event' => $_POST['start'],
   ':end_event' => $_POST['end'],
   ':user_id' => $user_id,
  )
 );
}


?>