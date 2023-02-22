<?php

require $_SERVER['DOCUMENT_ROOT']. "/connect.php";

function is_array_empty($arr){
  if(is_array($arr)){     
      foreach($arr as $key => $value){
          if(!empty($value) || $value != NULL || $value != ""){
              return true;
              break;//stop the process we have seen that at least 1 of the array has value so its not empty
          }
      }
      return false;
  }
}


switch ($_POST['action']){


    case '1':

    	$v = array();

    	$files_private = $_POST['files_private'];

    	$id_user = $_POST['user_id'];


          $obter_comp=" SELECT user_id FROM private_files_users ORDER BY user_id ASC";
          $result = mysqli_query($conn, $obter_comp);
          while($obj = mysqli_fetch_object($result)) 
          {
            $v[] = $obj;

          }
          $array = json_decode(json_encode($v), True);

          if (is_array_empty($array) == false)
        	{
        		$sql =" INSERT INTO private_files_users (files_private, user_id) VALUES ('$files_private', '$id_user')";

				$result = mysqli_query($conn,$sql);
				  if ($result) {
				    $response = 1; 
				    $last_id = mysqli_insert_id($conn);
				  }  
				  else {
				    $response = 0;
				    $last_id = 0; 
				  }

				  $r=array('error'=>'','success' => $response,'id' => $last_id, 'id' => $id_user);
  					  echo json_encode($r);
        	}
        	else
        	{
        		$key = array_search($id_user, array_column($array, 'user_id'));
        		if (is_numeric($key))
	            {
	              	$sql = "UPDATE private_files_users SET files_private='$files_private' WHERE user_id=$id_user";

					if (mysqli_query($conn, $sql))
					{
						echo 11;
					}
					else
					{
						$sql =" INSERT INTO private_files_users (files_private, user_id) VALUES ('$files_private', '$id_user')";

						$result = mysqli_query($conn,$sql);
						  if ($result) {
						    $response = 1; 
						    $last_id = mysqli_insert_id($conn);
						  }  
						  else {
						    $response = 0;
						    $last_id = 0; 
						  }

						  $r=array('error'=>'','success' => $response,'id' => $last_id, 'id' => $id_user);
		  					  echo json_encode($r);
					}
	              	exit;
	            }
	            else
	            {
	            	$sql =" INSERT INTO private_files_users (files_private, user_id) VALUES ('$files_private', '$id_user')";

					$result = mysqli_query($conn,$sql);
					  if ($result) {
					    $response = 1; 
					    $last_id = mysqli_insert_id($conn);
					  }  
					  else {
					    $response = 0;
					    $last_id = 0; 
					  }

					  $r=array('error'=>'','success' => $response,'id' => $last_id, 'id' => $id_user);
	  					  echo json_encode($r);
		         }	
        		
        	}

          

         


    break;

    case '2':
    	$id = $_POST['id'];
    	$obter_comp=" SELECT * FROM private_files_users WHERE user_id=$id";
    	$var = array();

		$result = mysqli_query($conn, $obter_comp);
		while($obj = mysqli_fetch_object($result)) 
		{
			$var[] = $obj;
		    
		}
		echo json_encode($var);

    break;

}

mysqli_close($conn);


?>