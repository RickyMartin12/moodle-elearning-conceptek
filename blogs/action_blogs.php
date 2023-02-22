<?php

require $_SERVER['DOCUMENT_ROOT']. "/connect.php";

switch ($_POST['action']){


    case '1':

        /*GRAVAR NOVO UTILIZADOR*/

    $err='';

    $user_id = $_POST['user_id'];

    if (!$_POST['title'])
      $err .= "- Blog Title <span class='w3-text-red'> *</span><br>";
    else{
     $title = $_POST['title'];
    }


    if (!$_POST['conteudo'])
      $err .= "- Blog Content <span class='w3-text-red'> *</span><br>";
    else{
     $conteudo = $_POST['conteudo'];
    }

    $ficheiros = $_POST['ficheiros'];

    $hora_pub = date('H:i');
    $data_pub = date("Y-m-d");

    if (!$err) 
    {
    	$sql =" INSERT INTO blog (title, user_id, conteudo, files, hora_pub, data_pub) VALUES ('$title', '$user_id', '$conteudo', '$ficheiros', '$hora_pub', '$data_pub')";

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
      $id_user = $_COOKIE['id'];
    	$obter_clientes="SELECT blog.id, blog.title, blog.user_id, admins.nome, admins.logotipo, blog.conteudo, blog.files, blog.hora_pub, blog.data_pub FROM blog INNER JOIN admins ON blog.user_id = admins.id ORDER BY blog.id";
        $result = mysqli_query($conn, $obter_clientes);
        while($obj = mysqli_fetch_object($result)) 
        {
          $var[] = $obj;
        }
        echo json_encode($var);


    break;

    case '3':

    $id = $_POST['id'];
    $title = $_POST['title'];
    $conteudo = $_POST['conteudo'];
    $files = $_POST['files'];
    $hora_pub = date('H:i');
    $data_pub = date("Y-m-d");



    $sql = "UPDATE blog SET title='$title', conteudo='$conteudo', files='$files', hora_pub='$hora_pub', data_pub='$data_pub' WHERE id=$id";


		if (mysqli_query($conn, $sql)) {
		    echo 1;
		}
		else
		{
			echo 0;
		}


    break;

    case '4':

  	$reg_del= "DELETE FROM blog WHERE id ='{$_POST['id']}'";
  	$result = mysqli_query($conn,$reg_del);
  	if ($result){
  	  echo 2; 
  	}
  	else {
  	  echo 0;
  	}

  	break;


    case '5':

      $blog_id = $_POST['blog_id'];
      $var= array();
      $obter_clientes="SELECT comment.id, comment.com, comment.user_id, admins.nome, admins.logotipo, blog.title, comment.hora_pub, comment.data_pub FROM comment INNER JOIN admins ON comment.user_id = admins.id INNER JOIN blog ON comment.blog_id = blog.id WHERE comment.blog_id = $blog_id AND admins.tipo = 'Administrator'  ORDER BY comment.id";
        $result = mysqli_query($conn, $obter_clientes);
        while($obj = mysqli_fetch_object($result)) 
        {
          $var[] = $obj;
        }
        echo json_encode($var);


    break;


    case '6':
      $obter_clientes="SELECT title from blog";
        $result = mysqli_query($conn, $obter_clientes);
        while($obj = mysqli_fetch_object($result)) 
        {
          $var[] = $obj;
        }
        echo json_encode($var);
    break;

    case '7':
    $title = $_POST['title'];
      $obter_clientes="SELECT id from blog WHERE title='$title' LIMIT 1";
        $result = mysqli_query($conn, $obter_clientes);
        while($obj = mysqli_fetch_object($result)) 
        {
          $var[] = $obj;
        }
        echo json_encode($var);
    break;

    case '8':

    $err='';

    $user_id = $_POST['user_id'];

    if (!$_POST['com'])
      $err .= "- Blog Comment <span class='w3-text-red'> *</span><br>";
    else{
     $com = $_POST['com'];
    }


    if (!$_POST['blog_id'])
      $err .= "- Blog Title comment <span class='w3-text-red'> *</span><br>";
    else{
     $blog_id = $_POST['blog_id'];
    }

    $hora_pub = date('H:i');
    $data_pub = date("Y-m-d");

    if (!$err) 
    {

      $sql =" INSERT INTO comment (com, user_id, blog_id, hora_pub, data_pub) VALUES ('$com', '$user_id', '$blog_id', '$hora_pub', '$data_pub')";

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

    case '9':

    $reg_del= "DELETE FROM comment WHERE id ='{$_POST['id']}'";
    $result = mysqli_query($conn,$reg_del);
    if ($result){
      echo 2; 
    }
    else {
      echo 0;
    }

    break;


    case '10':

    $id_com = $_POST['id_com'];
    $blog_id = $_POST['blog_id'];
    $com = $_POST['com'];
    $hora_pub = date('H:i');
    $data_pub = date("Y-m-d");



    $sql = "UPDATE comment SET com='$com', blog_id='$blog_id', hora_pub='$hora_pub', data_pub='$data_pub' WHERE id=$id_com";


    if (mysqli_query($conn, $sql)) {
        echo 1;
    }
    else
    {
      echo 0;
    }


    break;


    




}

mysqli_close($conn);

?>