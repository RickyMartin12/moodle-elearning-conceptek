<?php

//delete.php

if(isset($_POST["id"]))
{
 $connect = new PDO('mysql:host=us-cdbr-east-05.cleardb.net;dbname=heroku_66fdfb6d3e4b701', 'bfc3454c13359a', '8dffbfd8');

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