<?php

//delete.php

if(isset($_POST["id"]))
{
 $connect = new PDO('mysql:host=containers-us-west-77.railway.app;dbname=railway;port=6143', 'root', 'Rnjhhqi1DaRKTHsDTePc');

 header('Content-Type: text/html; charset=UTF-8');


 $query = "
 DELETE from events WHERE id=:id
 ";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':id' => $_POST['id']
  )
 );
}

?>