<?php

//fetch_user.php

include('database_connection.php');

$connect = new PDO('mysql:host=us-cdbr-east-06.cleardb.net;dbname=heroku_613ab8d128e91a9;port=3306', 'b590e12a78989c', '35b87add');


session_start();

$query = "
SELECT * FROM admins 
WHERE id != '".$_COOKIE['id']."' 
";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();



$output = '
<table class="table table-bordered table-striped">
	<tr>
		<th width="70%">Username</td>
		<th width="10%">Action</td>
	</tr>
';

foreach($result as $row)
{


	$current_timestamp = strtotime(date("Y-m-d H:i:s") . '- 10 second');
	$current_timestamp = date('Y-m-d H:i:s', $current_timestamp);
	$user_last_activity = fetch_user_last_activity($row['id'], $connect);
	$output .= '
	<tr>
		<td>'.$row['nome'].' '.count_unseen_message($row['id'], $_COOKIE['id'], $connect).' '.'</td>
		<td><button type="button" class="btn btn-info btn-xs start_chat" data-touserid="'.$row['id'].'" data-tousername="'.$row['nome'].'"><i class="fas fa-sms" style="color: white"></i>&nbsp;&nbsp; Start Chat</button></td>
	</tr>
	';
}

$output .= '</table>';

echo $output;

?>