<?php

//load.php

$connect = new PDO('mysql:host=us-cdbr-east-06.cleardb.net;dbname=heroku_613ab8d128e91a9;port=3306', 'b590e12a78989c', '35b87add');

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