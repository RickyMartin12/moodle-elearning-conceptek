<?php

//update.php

$connect = new PDO('mysql:host=containers-us-west-77.railway.app;dbname=railway;port=6143', 'root', 'Rnjhhqi1DaRKTHsDTePc');

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
