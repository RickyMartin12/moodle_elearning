<?php

//load.php

$connect = new PDO('mysql:host=localhost;dbname=moodle', 'root', '');

header('Content-Type: text/html; charset=UTF-8');


$data = array();

$user_id = $_COOKIE['id'];

$query = "SELECT * FROM events WHERE user_id = $user_id ORDER BY id";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

foreach($result as $row)
{
 $data[] = array(
  'id'   => $row["id"],
  'title'   => $row["title"],
  'start'   => $row["start_event"],
  'end'   => $row["end_event"]
 );
}

echo json_encode($data);

?>