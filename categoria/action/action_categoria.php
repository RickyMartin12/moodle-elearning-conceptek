<?php


require $_SERVER['DOCUMENT_ROOT']. "/connect.php";



switch ($_POST['action'])
{

	case '1':

	$err='';

    if (!$_POST['id_cursos'])
      $err .= "- Course Name <span class='w3-text-red'> *</span><br>";
    else{
     $id_cursos = $_POST['id_cursos'];
    }

    if (!$_POST['category_course'])
      $err .= "- Course Catogory <span class='w3-text-red'> *</span><br>";
    else{
     $category_course = $_POST['category_course'];
    }

    if (!$_POST['funcoes_course'])
      $err .= "- Course Function <span class='w3-text-red'> *</span><br>";
    else{
     $funcoes_course = $_POST['funcoes_course'];
    }


    $contexto_course = $_POST['contexto_course'];

    
    $ficheiros = $_POST['ficheiros'];

    if (!$err) 
    {

    	$sql ="INSERT INTO cursos_videos (cursos_id, categoria, funcoes, contexto, ficheiro) VALUES ('$id_cursos', '$category_course', '$funcoes_course', '$contexto_course', '$ficheiros')";



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


      $obter_comp=' SELECT DISTINCT categoria FROM cursos_videos WHERE cursos_id = "'.$id.'"';
      $var = array();
      $result = mysqli_query($conn, $obter_comp);
      while($obj = mysqli_fetch_object($result)) 
      {
      $var[] = $obj;
          
      }
      echo json_encode($var);


    break;

    case '5':

    $cursos = $_POST['cursos'];
    $sub_cursos = $_POST['sub_cursos'];
    $categoria = $_POST['categoria'];

    $sql2 = mysqli_query($conn, 'SELECT id FROM cursos WHERE cursos = "'.$cursos.'" AND sub_cursos = "'.$sub_cursos.'"');
        $exibe = mysqli_fetch_assoc($sql2);
        $id = $exibe['id']; 


      $obter_comp=' SELECT * FROM cursos_videos WHERE cursos_id = "'.$id.'" AND categoria="'.$categoria.'"';
      $var = array();
      $result = mysqli_query($conn, $obter_comp);
      while($obj = mysqli_fetch_object($result)) 
      {
      $var[] = $obj;
          
      }
      echo json_encode($var);




    break;


    case '6':

    $id = $_POST['id'];

    $obter_comp=' SELECT * FROM cursos_videos WHERE id = "'.$id.'"';
      $var = array();
      $result = mysqli_query($conn, $obter_comp);
      while($obj = mysqli_fetch_object($result)) 
      {
      $var[] = $obj;
          
      }
      echo json_encode($var);

    break;


    case '7':

    $obter_comp='SELECT cursos_videos.id, cursos.cursos, cursos.sub_cursos, cursos_videos.categoria, cursos_videos.funcoes, cursos_videos.contexto, cursos_videos.ficheiro FROM cursos_videos INNER JOIN cursos ON cursos_videos.cursos_id = cursos.id ORDER BY cursos_videos.id';
      $var = array();
      $result = mysqli_query($conn, $obter_comp);
      while($obj = mysqli_fetch_object($result)) 
      {
      $var[] = $obj;
          
      }
      echo json_encode($var);

    break;

    case '8':

    $reg_del= "DELETE FROM cursos_videos WHERE id ='{$_POST['id']}'";
    $result = mysqli_query($conn,$reg_del);
    if ($result){
      echo 2; 
    }
    else {
      echo 0;
    }

    break;

    case '9':


      $err='';

      $id = $_POST['id'];

      $id_cursos = $_POST['id_cursos'];

      if (!$_POST['category_course'])
        $err .= "- Course Category <span class='w3-text-red'> *</span><br>";
      else{
       $category_course = $_POST['category_course'];
      }

      if (!$_POST['funcoes_course'])
        $err .= "- Course Function <span class='w3-text-red'> *</span><br>";
      else{
       $funcoes_course = $_POST['funcoes_course'];
      }


      $contexto_course = $_POST['contexto_course'];
      
      $ficheiros = $_POST['ficheiros'];

      if (!$err) 
    {

      $sql = "UPDATE cursos_videos SET cursos_id='$id_cursos', categoria='$category_course', funcoes='$funcoes_course', contexto='$contexto_course', ficheiro='$ficheiros' WHERE id=$id";



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


mysqli_close($conn);
?>