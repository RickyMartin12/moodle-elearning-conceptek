<?php

//update.php

$connect = new PDO('mysql:host=us-cdbr-east-05.cleardb.net;dbname=heroku_66fdfb6d3e4b701', 'bfc3454c13359a', '8dffbfd8');

header('Content-Type: text/html; charset=UTF-8');


$user_id = $_COOKIE['id'];

if(isset($_POST["id"]))
{
 $query = "
 UPDATE events 
 SET title=:title, start_event=:start_event, end_event=:end_event, user_id=:user_id
 WHERE id=:id
 ";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':title'  => $_POST['title'],
   ':start_event' => $_POST['start'],
   ':end_event' => $_POST['end'],
   ':user_id' => $user_id,
   ':id'   => $_POST['id']
  )
 );
}

?>
