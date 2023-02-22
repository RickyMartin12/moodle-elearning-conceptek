<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/connect.php';


    $err='';
    $err_email = '';
    $success = '';

    $username = $_POST['username'];
	$email = $_POST["email"];


    if ($username != '' && $email == '')
	{
    	$username = $_POST['username'];
    	$email = "";
    }
    if ($email != '' && $username == '')
	{
		$username = "";
    	if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false) 
	    {
	       $email = $_POST["email"];
	    } 
	    else 
	    {
	       $err .= "- Invalid Email<span class='w3-text-red'> *</span><br>";
	    }
    }
    if ($email != '' && $username != '')
	{
		$username = $_POST['username'];
    	if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false) 
	    {
	       $email = $_POST["email"];
	    } 
	    else 
	    {
	       $err .= "- Invalid Email<span class='w3-text-red'> *</span><br>";
	    }
    }
    if ($email == '' && $username == '')
	{
		$username = "";
    	if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false) 
	    {
	       $email = $_POST["email"];
	    } 
	    else 
	    {
	       $err .= "- Invalid Email<span class='w3-text-red'> *</span><br>";
	    }
    }

    	


            



    

    if($_SERVER["REQUEST_METHOD"] == "POST") 
	  {
	     if($err == '')
	     {

	     	$pass = "";

	     	if ($username != '' && $email == '')
	     	{
	     		$sql1 = mysqli_query($conn, "SELECT id FROM admins WHERE nome='$username'");
            	$exibe1 = mysqli_fetch_assoc($sql1);
            	$id = $exibe1['id']; 
            	$sql = mysqli_query($conn, "SELECT pass FROM admins WHERE id = $id");


            	$exibe2 = mysqli_fetch_assoc($sql);
            	$pass = $exibe2['pass'];


            	$sql2 = mysqli_query($conn, "SELECT email FROM admins WHERE id = $id");


            	$exibe3 = mysqli_fetch_assoc($sql2);
            	$email_rec = $exibe3['email'];

            	$user_rec = $username;
            	

	     	}

	     	if ($username == '' && $email != '')
	     	{
	     		$sql1 = mysqli_query($conn, "SELECT id FROM admins WHERE email='$email'");
            	$exibe1 = mysqli_fetch_assoc($sql1);
            	$id = $exibe1['id']; 
            	$sql = mysqli_query($conn, "SELECT pass FROM admins WHERE id = $id");


            	$exibe2 = mysqli_fetch_assoc($sql);
            	$pass = $exibe2['pass'];

            	$sql2 = mysqli_query($conn, "SELECT nome FROM admins WHERE id = $id");


            	$exibe3 = mysqli_fetch_assoc($sql2);


            	$user_rec = $exibe3['nome'];
            	$email_rec = $email;

            	

	     	}

	     	if ($username != '' && $email != '')
	     	{
	     		$sql1 = mysqli_query($conn, "SELECT id FROM admins WHERE email='$email' AND nome='$username' ");
            	$exibe1 = mysqli_fetch_assoc($sql1);
            	$id = $exibe1['id']; 
            	$sql = mysqli_query($conn, "SELECT pass FROM admins WHERE id = $id");


            	$exibe2 = mysqli_fetch_assoc($sql);
            	$pass = $exibe2['pass'];

            	$email_rec = $email;
            	$user_rec = $username;
            	

	     	}

	     	$success = 1;


	     	ini_set('memory_limit', '256M');
			ini_set('max_execution_time', 0);
			$corr=0;
			$numm=0;
			$corr=1;
			$numm=1;
			$entext = $pass;
			$a = "";

			$fileread = file('passlist/big_pass_list.txt',FILE_IGNORE_NEW_LINES);
			foreach($fileread as $word){
				$enword=md5($word);
				if($entext==$enword){
					$a = $word;
					$corr++;
					$numm--;
					break;
				}
			}

			



	     	$arr=array('error'=>'','success' => $success,'id' => $id, 'nome' => $user_rec);

            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            // More headers
            $headers .= 'From:' .$email_rec. "\r\n";
            $email_subject = "Send Information autenticate login username ".$user_rec;

            $email_body_client = '<div style="width:95%; margin-left:2.5%;">
            <h4> User Information '.$user_rec.'</h4>
            <hr><b>Username: </b> '.$user_rec.' <br /><br />
            <b>Password: </b> '.$a.' <br /><br/>
            <hr>
            <br>Thank you '.$user_rec.', Elearning Conceptek a Shiji Group
            <br>
            <br>
            <img src="cs.png">
            </div>';
            mail($email_rec,$email_subject,$email_body_client,$headers);

	     	

	     }
	     else
	      {
	          $arr = array('error'=>$err, 'id'=>'', 'success'=>'', 'nome' => '');
	      }

	 }


	 echo json_encode($arr);



?>