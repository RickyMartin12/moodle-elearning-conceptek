<?php


//delete.php
if(isset($_POST["id"]))
{
 $connect = new PDO('mysql:host=us-cdbr-east-06.cleardb.net;dbname=heroku_613ab8d128e91a9;port=3306', 'b590e12a78989c', '35b87add');

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