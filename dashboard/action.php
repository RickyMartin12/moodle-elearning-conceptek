<?php

require $_SERVER['DOCUMENT_ROOT']. "/connect.php";


if (isset($_POST['action']))
{
	if ($_POST["action"] == "update_time")
	{
		$id = $_COOKIE["login_id"];
		$l_activity = date("Y-m-d H:i:s", STRTOTIME(date('h:i:sa')));
		$sql_act =" UPDATE sessao_logged SET last_activity = '$l_activity' WHERE login_id = $id";

		mysqli_query($conn, $sql_act);
		
	}
	if($_POST["action"] == "fetch_data")
	 {
	  $output = '';
	  $query = "
	  SELECT sessao_logged.user_id, admins.nome, admins.logotipo FROM sessao_logged 
	  INNER JOIN admins 
	  ON admins.id = sessao_logged.user_id 
	  WHERE last_activity > DATE_SUB(NOW(), INTERVAL 5 SECOND)
	  ";
	  $statement = mysqli_query($conn, $query);

	  $result = mysqli_fetch_all($statement,MYSQLI_ASSOC);
	  $count = mysqli_num_rows($statement);
	  $output .= '
	  <div class="table-responsive">
	   <table class="table table-bordered table-striped" id="users_table">
	    <tr>
	     <th>Login ID</th>
	     <th>Username</th>
	     <th>Avatar</th>
	    </tr>
	  ';

	  $i = 0;
	  foreach($result as $row)
	  {
	   $i = $i + 1;
	   $output .= '
	   <tr> 
	    <td>'.$i.'</td>
	    <td>'.$row["nome"].'</td>
	    <td><img src="images/users/'.$row["logotipo"].'" class="img-responsive" width="150" /></td>
	   </tr>
	   ';
	  }
	  $output .= '</table></div>';
	  echo $output;
	 }
}

?>