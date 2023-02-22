<?php

require $_SERVER['DOCUMENT_ROOT']. "/connect.php";

switch ($_POST['action']){


    case '1':

    	$err='';

    	if (!$_POST['id_cursos'])
	      $err .= "- Name of Course and Sub Course <span class='w3-text-red'> *</span><br>";
	    else{
	     $id_cursos = $_POST['id_cursos'];
	    }

	    if (!$_POST['grades_media'])
	      $err .= "- Course Media <span class='w3-text-red'> *</span><br>";
	    else{
	     $grades_media = $_POST['grades_media'];
	    }

	    if (!$_POST['range'])
	      $err .= "- Course Media Grade <span class='w3-text-red'> *</span><br>";
	    else{
	     $range = $_POST['range'];
	    }


	    if (!$_POST['percent'])
	      $err .= "- Course Media for percent <span class='w3-text-red'> *</span><br>";
	    else{
	     $percent = $_POST['percent'];
	    }

	    $feedback = $_POST['feedback'];

	    if (!$err) 
    {

    	$sql ='INSERT INTO grades_cursos (cursos_id, calcular_media, graus, percentagem, feedback) VALUES ("'.$id_cursos.'", "'.$grades_media.'", "'.$range.'", "'.$percent.'", "'.$feedback.'")';



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

    case '2':
      $obter_comp=" SELECT DISTINCT cursos FROM cursos WHERE 1";
      $var = array();
      $result = mysqli_query($conn, $obter_comp);
      while($obj = mysqli_fetch_object($result)) 
      {
      $var[] = $obj;
          
      }
      echo json_encode($var);


    break;


    case '3':
      $cursos = $_POST['cursos'];
      $obter_comp=' SELECT * FROM cursos WHERE cursos = "'.$cursos.'"';
      $var = array();
      $result = mysqli_query($conn, $obter_comp);
      while($obj = mysqli_fetch_object($result)) 
      {
      $var[] = $obj;
          
      }
      echo json_encode($var);

    break;



    case '4':

    $cursos = $_POST['cursos'];
      $sub_cursos = $_POST['sub_cursos'];

        $sql2 = mysqli_query($conn, 'SELECT id FROM cursos WHERE cursos = "'.$cursos.'" AND sub_cursos = "'.$sub_cursos.'"');
        $exibe = mysqli_fetch_assoc($sql2);
        $id = $exibe['id']; 


      $obter_comp='SELECT grades_cursos.cursos_id, cursos.sub_cursos, AVG(grades_cursos.calcular_media) as "media_sub_cursos" FROM grades_cursos INNER JOIN cursos ON grades_cursos.cursos_id = cursos.id WHERE grades_cursos.cursos_id = '.$id.' GROUP BY grades_cursos.cursos_id';
      $var = array();
      $result = mysqli_query($conn, $obter_comp);
      while($obj = mysqli_fetch_object($result)) 
      {
      $var[] = $obj;
          
      }
      echo json_encode($var);

    break;

    case '5':

   	 $obter_comp='SELECT grades_cursos.id, cursos.cursos, cursos.sub_cursos, grades_cursos.calcular_media, grades_cursos.graus, grades_cursos.percentagem, grades_cursos.feedback FROM grades_cursos INNER JOIN cursos ON grades_cursos.cursos_id = cursos.id ORDER BY grades_cursos.id';

      $var = array();
      $result = mysqli_query($conn, $obter_comp);
      while($obj = mysqli_fetch_object($result)) 
      {
      $var[] = $obj;
          
      }
      echo json_encode($var);

    break;

    case '6':

    $reg_del= "DELETE FROM grades_cursos WHERE id ='{$_POST['id']}'";
    $result = mysqli_query($conn,$reg_del);
    if ($result){
      echo 2; 
    }
    else {
      echo 0;
    }

    break;

    case '7':

    $id = $_POST['id'];
    $id_cursos = $_POST['id_cursos'];

    


    $err='';


	    if (!$_POST['calcular_media'])
	      $err .= "- Course Media <span class='w3-text-red'> *</span><br>";
	    else{
	     $calcular_media = $_POST['calcular_media'];
	    }

	    if (!$_POST['graus'])
	      $err .= "- Course Media Grade <span class='w3-text-red'> *</span><br>";
	    else{
	     $graus = $_POST['graus'];
	    }


	    if (!$_POST['percentagem'])
	      $err .= "- Course Media for percent <span class='w3-text-red'> *</span><br>";
	    else{
	     $percentagem = $_POST['percentagem'];
	    }

	    $feedback = $_POST['feedback'];

	if (!$err) 
    {

    	$sql ="UPDATE grades_cursos SET cursos_id='$id_cursos', calcular_media='$calcular_media', graus='$graus', percentagem='$percentagem', feedback='$feedback' WHERE id=$id";



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


    case '8':

    	$cursos = $_POST['cursos'];

   	 $obter_comp='SELECT cursos.cursos, AVG(grades_cursos.calcular_media) as "media_sub_cursos" FROM grades_cursos INNER JOIN cursos ON grades_cursos.cursos_id = cursos.id WHERE cursos.cursos = "'.$cursos.'" GROUP BY cursos.cursos';

      $var = array();
      $result = mysqli_query($conn, $obter_comp);
      while($obj = mysqli_fetch_object($result)) 
      {
      $var[] = $obj;
          
      }
      echo json_encode($var);

    break;


}