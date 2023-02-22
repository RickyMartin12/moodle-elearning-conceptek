<?php


require $_SERVER['DOCUMENT_ROOT']. "/connect.php";



switch ($_POST['action']){

	case '1':

		$obter_comp=" SELECT * FROM cursos WHERE 1";
    	$var = array();
	    $result = mysqli_query($conn, $obter_comp);
	    while($obj = mysqli_fetch_object($result)) 
	    {
	    $var[] = $obj;
	        
	    }
	    echo json_encode($var);
	break;

	case '2':


	$reg_del= "DELETE FROM cursos WHERE id ='{$_POST['id']}'";
    $result = mysqli_query($conn,$reg_del);
    if ($result){
      echo 2; 
  	}
  	else
  	{
  		echo 0;
  	}


	break;

	case '3':

	$err='';

    if (!$_POST['nome_curso'])
      $err .= "- Course Name <span class='w3-text-red'> *</span><br>";
    else{
     $nome_curso = $_POST['nome_curso'];
    }

   


    if (!$err) 
    {
    	$sql ='INSERT INTO cursos (cursos, sub_cursos) VALUES ("'.$nome_curso.'", "'.$nome_curso.'")';

            $result = mysqli_query($conn,$sql);
              if ($result) {
                $response = 1; 
                $last_id = mysqli_insert_id($conn);
              }  
              else {
                $response = 0;
                $last_id = 0; 
              }

              $r=array('error'=>'','success' => $response,'id' => $last_id);
              echo json_encode($r);

    }
    else
    {
    	$r = array('error' =>$err, 'success' =>'','id' =>'');
        echo json_encode($r);
    }


	break;

	case '4':

		$obter_comp=" SELECT DISTINCT cursos FROM cursos WHERE 1";
        $var = array();
	    $result = mysqli_query($conn, $obter_comp);
	    while($obj = mysqli_fetch_object($result)) 
	    {
	    $var[] = $obj;
	        
	    }
	    echo json_encode($var);

	break;

	case '5':

	$id= $_POST['id'];
    $curso = $_POST['col_1_'.$id];
    $sub_curso=$_POST['col_2_'.$id];

     $success='';
    
    $query='SELECT * FROM cursos WHERE cursos = "'.$curso.'" AND sub_cursos = "'.$sub_curso.'"';
      $result = mysqli_query($conn,$query);
      $rowCount = mysqli_num_rows($result);
      if($rowCount>1) { 
      $error_message = 9;
            $success .= 2;
    }
    
    
      if ( !isset($error_message) ) {


        $query_upd='UPDATE cursos SET cursos= "'.$curso.'", sub_cursos = "'.$sub_curso.'" WHERE id = "'.$id.'"';

     
      $result_upd = mysqli_query($conn,$query_upd);
        if ($result_upd)
           $success .=1;
        else
           $success .= 2;
      }
    
    echo $success;
    unset($error_message);

	break;

	case '6':

	$err='';

    if (!$_POST['nome_curso'])
      $err .= "- Course Name <span class='w3-text-red'> *</span><br>";
    else{
     $nome_curso = $_POST['nome_curso'];
    }

    if (!$_POST['sub_nome_curso'])
      $err .= "- Sub Course Name <span class='w3-text-red'> *</span><br>";
    else{
     $sub_nome_curso = $_POST['sub_nome_curso'];
    }

   


    if (!$err) 
    {
    	$sql ='INSERT INTO cursos (cursos, sub_cursos) VALUES ("'.$nome_curso.'", "'.$sub_nome_curso.'")';

            $result = mysqli_query($conn,$sql);
              if ($result) {
                $response = 1; 
                $last_id = mysqli_insert_id($conn);
              }  
              else {
                $response = 0;
                $last_id = 0; 
              }

              $r=array('error'=>'','success' => $response,'id' => $last_id);
              echo json_encode($r);

    }
    else
    {
    	$r = array('error' =>$err, 'success' =>'','id' =>'');
        echo json_encode($r);
    }

	break;



	case '7':

		$nome_curso = $_POST['nome_curso'];
		$var = array();
	    $obter_comp='SELECT sub_cursos FROM cursos WHERE cursos = "'.$nome_curso.'"';
	    $result = mysqli_query($conn, $obter_comp);
	    while($obj = mysqli_fetch_object($result)) {
	    $var[] = $obj;}
	    echo json_encode($var);

	break;


	case '8':

		$nome_curso = $_POST['nome_curso'];
		$sub_nome_curso = $_POST['sub_nome_curso'];

	    $obter_comp='SELECT id FROM cursos WHERE cursos = "'.$nome_curso.'" AND sub_cursos = "'.$sub_nome_curso.'"';
	    $result = mysqli_query($conn, $obter_comp);
	    while($obj = mysqli_fetch_object($result)) {
	    $var[] = $obj;}
	    echo json_encode($var);

	break;



}


mysqli_close($conn);
?>