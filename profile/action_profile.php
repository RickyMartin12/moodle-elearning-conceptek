<?php

require $_SERVER['DOCUMENT_ROOT']. "/connect.php";


switch ($_POST['action']){


    case '1':

    	$id = $_POST['id'];
    	$utilizador = $_POST['utilizador'];
    	$pais = $_POST['pais'];
    	$email = $_POST['email'];
    	$tipo_utilizador = $_POST['tipo_utilizador'];
    	$privilegios = $_POST['privilegios'];
    	$departament = $_POST['departament'];
    	$skills = $_POST['skills'];
    	$img_logo = $_POST['img_logo'];


    	$sql = "UPDATE admins SET nome='$utilizador', privilegios='$privilegios', tipo='$tipo_utilizador', email='$email', country='$pais', departament='$departament', skills='$skills', logotipo='$img_logo' WHERE id=$id";

		if (mysqli_query($conn, $sql)) {
		    echo 1;

		    $sql = "SELECT * FROM admins WHERE id=$id";
          	$result = mysqli_query($conn, $sql);
          	$row = mysqli_fetch_assoc($result);
          	$rowcount=mysqli_num_rows($result);

          	if ($rowcount == 1)
          	{
          		  $_SESSION['pr_uid']=$row['id'];
                  $_SESSION['username']=$row['nome'];
                  $_SESSION['privilegios'] = $row['tipo'];
                  $_SESSION['email'] = $row['email'];
                  $_SESSION['country'] = $row['country'];
                  $_SESSION['departament'] = $row['departament'];
                  $_SESSION['skills'] = $row['skills'];
                  $_SESSION['logotipo'] = $row['logotipo'];
                  $_SESSION['access'] = $row['privilegios'];


                  setcookie("username", $_SESSION['username'], time() + (86400 * 30), "/"); 
                  setcookie("id", $_SESSION['pr_uid'], time() + (86400 * 30), "/");
                  setcookie("privilegios", $_SESSION['privilegios'], time() + (86400 * 30), "/");
                  setcookie("email", $_SESSION['email'], time() + (86400 * 30), "/"); 
                  setcookie("country", $_SESSION['country'], time() + (86400 * 30), "/");
                  setcookie("departament", $_SESSION['departament'], time() + (86400 * 30), "/");
                  setcookie("skills", $_SESSION['skills'], time() + (86400 * 30), "/"); 
                  setcookie("logotipo", $_SESSION['logotipo'], time() + (86400 * 30), "/");
                  setcookie("access", $_SESSION['access'], time() + (86400 * 30), "/");
          	}

                  
		} else {
		    echo 0;
		}


    break;

    case '2':

    $id = $_POST['id'];

    $err='';

    if (!$_POST['password'])
      $err .= "- Usermame's Password <span class='w3-text-red'> *</span><br>";
    else{
     $password = $_POST['password'];
    }

    if ($_POST['conf_password']){
      $conf_password = $_POST['conf_password'];
    }
    else
    {
      $err .= "- Confirm Usermame's Password <span class='w3-text-red'> *</span><br>";
    }
    
    if ($_POST['conf_password'] && $_POST['password'])
    {
        if ($password == $conf_password)
        {
            $pass = $password;
        }
        else
        {
            $err .= "- The Passwords must be equals <span class='w3-text-red'> *</span><br>";
        }
    }

    if (!$err) 
    {
      $sql ="UPDATE admins SET pass=MD5('".$pass."') WHERE id='$id'";


      $file = $_SERVER['DOCUMENT_ROOT']. '/request/passlist/big_pass_list.txt';
        // Open the file to get existing content
        $current = file_get_contents($file);
        // Append a new person to the file
        $current .= "\n".$pass;
        // Write the contents back to the file
        file_put_contents($file, $current);

            $result = mysqli_query($conn,$sql);
              if ($result) {
                $response = 1; 
                $last_id = mysqli_insert_id($conn);
              }  
              else {
                $response = 0;
                $last_id = 0; 
              }

              $r=array('error'=>'','success' => $response,'id' => $id);
              echo json_encode($r);

    }
    else
    {
      $r = array('error' =>$err, 'success' =>'','id' =>'');
        echo json_encode($r);
    }




    break;


}


?>