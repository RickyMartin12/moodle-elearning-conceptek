<?php


require $_SERVER['DOCUMENT_ROOT']. "/connect.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';

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

        /*GRAVAR NOVO UTILIZADOR*/

    $err='';

    // Topico 1 - Serviços

    // Data de Serviços
    
    $password = '';
    
    $passord_conf = '';

        $pass = '';

    if (!$_POST['utilizador'])
      $err .= "- Username <span class='w3-text-red'> *</span><br>";
    else{
     $nome_utilizador = $_POST['utilizador'];
    }

    // Password

    if ($_POST['password']){
      $password = $_POST['password'];
    }
    else
    {
      $err .= "- User Password <span class='w3-text-red'> *</span><br>";
    }
    
    // Confirmar Password
    
    if ($_POST['password_conf']){
      $password_conf = $_POST['password_conf'];
    }
    else
    {
      $err .= "- Confirm User Password <span class='w3-text-red'> *</span><br>";
    }
    
    if ($_POST['password_conf'] && $_POST['password'])
    {
        if ($password == $password_conf)
        {
            $pass = $password;
        }
        else
        {
            $err .= "- The passwords must be equals <span class='w3-text-red'> *</span><br>";
        }
    }

    // Pais

    if ($_POST['pais']){
      $pais= $_POST['pais'];
    }
    else
    {
      $err .= "- User's Country <span class='w3-text-red'> *</span><br>";
    }

    // Tipo do Utilizador 

    if ($_POST['tipo_utilizador']){
      $tipo_utilizador= $_POST['tipo_utilizador'];
    }
    else
    {
      $err .= "- User's Type <span class='w3-text-red'> *</span><br>";
    }


        // Email
        $email = $_POST['email'];


        if ($email == "")
        {
            $err .= "- User's Email <span class='w3-text-red'> * </span><br>"; 
        }
        else
        {
            if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false) 
            {
                 $email = $_POST["email"];
              } 
              else 
              {
                $err .= "- Inválid Email <span class='w3-text-red'> *</span><br>";
              }
        }

        // tipo_utilizador

        if ($_POST['tipo_utilizador']){
          $tipo_utilizador = $_POST['tipo_utilizador'];
        }
        else
        {
          $err .= "- User's Type <span class='w3-text-red'> *</span><br>";
        }

        // departament

        $departament = $_POST['departament'];

        // skills

        $skills = $_POST['skills'];



        // img_logo

          $img_logo = $_POST['img_logo'];
        

     
     
         // Privilegios
         
         if ($_POST['privilegios']){
          $privilegios = $_POST['privilegios'];
        }
        else
        {
          $err .= "- User's Privileges <span class='w3-text-red'> *</span><br>";
        }
    
        $v= array();

        if (!$err) 
        {
          $obter_comp=" SELECT nome FROM admins ORDER BY nome ASC";
          $result = mysqli_query($conn, $obter_comp);
          while($obj = mysqli_fetch_object($result)) 
          {
            $v[] = $obj;
          }

          $array = json_decode(json_encode($v), True);

          //var_dump($array);


          $key_string_users = array_search($nome_utilizador, array_column($array, 'nome'));

          if(is_numeric($key_string_users))
          {
            $error = "O nome do utilizador encontra-se na base de dados. Deverá adicionar outro nome do utilizador";
            $r = array('error' =>$error, 'success' =>'', 'nome' => '', 'email' => '');
            echo json_encode($r);
          }
          else
          {
            $data_criacao = date("Y-m-d");

            $hora_criacao = date('H:i');

              $sql =" INSERT INTO admins (nome, pass, privilegios, tipo, email, country, departament, skills, logotipo, data_criacao, hora_criacao, data_login, hora_login) VALUES ('$nome_utilizador', MD5('".$pass."'), '$privilegios', '$tipo_utilizador', '$email', '$pais', '$departament', '$skills', '$img_logo', '$data_criacao', '$hora_criacao', '', '')";

            $result = mysqli_query($conn,$sql);
              if ($result) {
                $response = 1; 
                $last_id = mysqli_insert_id($conn);
              }  
              else {
                $response = 0;
                $last_id = 0; 
              }

              $email_subject = "Send Information User ".$nome_utilizador;

              $email_body_client = '<div style="width:95%; margin-left:2.5%;">
              <h4> User s Information: '.$nome_utilizador.'</h4>
              <hr><b>Username: </b> '.$nome_utilizador.' <br /><br />
              <b>Password: </b> '.$pass.' <br /><br/>
              <hr>
              <br>Thank you '.$nome_utilizador.', Elearning Conceptek a Shijin Group
              <br>
              <br>
              <img src="https://moodle-elearrning.herokuapp.com/images/cs.png">
              </div>';


              // Criando uma nova inst�cia
            $mail = new PHPMailer(true);


            $mail->CharSet = 'UTF-8';

            // Informando para usar SMTP
            $mail->isSMTP();

            /*
              Habilitando debug SMTP
              0 = off (uso em produ��o)
              1 = Mensagens ao Cliente
              2 = Mensagens ao Cliente e Servidor
            */

            $mail->SMTPDebug = 0;

            /*
              Definir o nome do servidor de e-mail
              use $mail ->HOST = gethostbyname('email.gmail.com');
              se sua rede n�o suportar SMTP over Ipv6
            */

            $mail->Host = 'smtp.mailgun.org';

            /*
              Defina o numero da porta SMTP - 587 para autentica��o TLS,
              a.k.a. RFC4409 SMTP submission
            */

            $mail->Port = 587;

            // Define o sistema de criptografia a usar- ssl (depreciado) ou tals
            $mail->SMTPSecure = 'tls';

            // Se vai usar SMTP authentication
            $mail->SMTPAuth = true;

            // Usu�rio para usar SMTP authentication
            // Use o endere�o completodo e-mail do Gmail
            $mail->Username = 'postmaster@sandbox2733effcb8554e5e8002e809d46561ef.mailgun.org';

            // Senha para SMTP authentication
            $mail->Password = 'c092e5bd7bc54e8912b5c6b47037ea80-162d1f80-21b7ddcb';

            // Definir o remetente
            $mail->setFrom('postmaster@sandbox2733effcb8554e5e8002e809d46561ef.mailgun.org', 'Curso');

            // Definir o endereço para respostas
            $mail->addReplyTo('postmaster@sandbox2733effcb8554e5e8002e809d46561ef.mailgun.org', 'Curso');

            // Definir destinatario
            $mail->addAddress($email, 'Destinatário');

            // Definir o Assunto
            $mail->Subject = $email_subject;

            // Definir formato de mensagem HTML
            $mail->isHTML(true);

            // Corpo da Mensagem
            $mail->Body = $email_body_client;

            // Corpo alternativo caso email n�o suporte html
            $mail->AltBody = 'Mensangem simples';

            $mail->send();

              $r=array('error'=>'','success' => $response,'id' => $last_id, 'nome' => $nome_utilizador);
              echo json_encode($r);
          }




        

          
        }
        else{
          $r = array('error' =>$err, 'success' =>'', 'nome' => '', 'email' => '');
          echo json_encode($r);
        }

        break;

    case '4':
    
    $table=" SELECT * FROM privilegios WHERE id >= 1 AND id <= 2";
      
    $result = mysqli_query($conn, $table);
    while($obj = mysqli_fetch_object($result)) {
    $var[] = $obj;}
    echo json_encode($var);
    
    break;


    case '5':
        

    $estado = $_POST['estado'];

    $tipo = $_POST['tipo'];


    $arr_tipo = explode("-",$tipo);


    $priv_a= " UPDATE privilegios SET  $arr_tipo[0] ='$estado' WHERE tipo = '$arr_tipo[1]' ";
    $result = mysqli_query($conn,$priv_a);
     if ($result)
     {
         echo 1;   
     }
     else 
     {
         echo 0; 
     }

        
    break;

    case '6':
    $obter_comp=" SELECT * FROM admins WHERE 1";

    $var = array();

    $result = mysqli_query($conn, $obter_comp);
    while($obj = mysqli_fetch_object($result)) 
    {
    $var[] = $obj;
        
    }
    echo json_encode($var);
    break;

    case '7':

    $id= $_POST['id'];
    $nome = $_POST['col_1_'.$id];
    $pass=md5($_POST['col_2_'.$id]);
    $email = $_POST['col_3_'.$id];
    $tipo = $_POST['col_4_'.$id];
    $privilegios=$_POST['col_5_'.$id];
    $country = $_POST['col_6_'.$id];
    $departament = $_POST['col_7_'.$id];
    $skills = $_POST['col_8_'.$id];
    $logotipo = $_POST['logotipo'];

     $success='';
    
    $query='SELECT nome FROM admins WHERE nome ="'.$nome.'"';
      $result = mysqli_query($conn,$query);
      $rowCount = mysqli_num_rows($result);
      if($rowCount>1) { 
      $error_message = 9;
            $success .= 2;
    }
    
    
      if ( !isset($error_message) ) {


        // sem actualizar password e sem actualizar a imagem 
          
       if ($_POST['col_2_'.$id] == '' && $_POST['logotipo'] == '')
       {
           $query_upd='UPDATE admins SET nome="'.$nome.'", privilegios="'.$privilegios.'", email= "'.$email.'", tipo="'.$tipo.'", country="'.$country.'", departament="'.$departament.'", skills="'.$skills.'" WHERE id = "'.$id.'"';
       }


       // sem actualizar password e actualizar a imagem

       else if ($_POST['col_2_'.$id] == '' && $_POST['logotipo'] != '')
       {
           $query_upd='UPDATE admins SET nome="'.$nome.'", privilegios="'.$privilegios.'", email= "'.$email.'", tipo="'.$tipo.'", country="'.$country.'", departament="'.$departament.'", skills="'.$skills.'", logotipo="'.$logotipo.'" WHERE id = "'.$id.'"';
       }


       // actualizar password e sem actualizar a imagem

       else if ($_POST['col_2_'.$id] != '' && $_POST['logotipo'] == '')
       {
           $query_upd='UPDATE admins SET nome="'.$nome.'", pass = "'.$pass.'", privilegios="'.$privilegios.'", email= "'.$email.'", tipo="'.$tipo.'", country="'.$country.'", departament="'.$departament.'", skills="'.$skills.'" WHERE id = "'.$id.'"';
       }

       // actualizar password e actualizar a imagem


       else
       {
           $query_upd='UPDATE admins SET nome="'.$nome.'", pass = "'.$pass.'", privilegios="'.$privilegios.'", email= "'.$email.'", tipo="'.$tipo.'", country="'.$country.'", departament="'.$departament.'", skills="'.$skills.'", logotipo="'.$logotipo.'" WHERE id = "'.$id.'"';
       }

     
      $result_upd = mysqli_query($conn,$query_upd);
        if ($result_upd)
           $success .=1;
        else
           $success .= 2;
      }
    
    echo $success;
    unset($error_message);

    if ($_POST['col_2_'.$id] != '')
    {
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
        // More headers
        $headers .= 'From:' .$email. "\r\n";
        $email_subject = "Send Information User changed: ".$_POST['col_1_'.$id];
        
        $email_body_client = '<div style="width:95%; margin-left:2.5%;">
        <h4> User s Information changed '.$_POST['col_1_'.$id].'</h4>
        <hr><b>Username: </b> '.$_POST['col_1_'.$id].' <br /><br />
        <b>Password: </b> '.$_POST['col_2_'.$id].' <br /><br/>
        <hr>
        <br>Thank you '.$_POST['col_1_'.$id].', Elearning Conceptek a Shijin Group
        </div>';


        $mail = new PHPMailer(true);


            $mail->CharSet = 'UTF-8';

            // Informando para usar SMTP
            $mail->isSMTP();

            /*
              Habilitando debug SMTP
              0 = off (uso em produ��o)
              1 = Mensagens ao Cliente
              2 = Mensagens ao Cliente e Servidor
            */

            $mail->SMTPDebug = 0;

            /*
              Definir o nome do servidor de e-mail
              use $mail ->HOST = gethostbyname('email.gmail.com');
              se sua rede n�o suportar SMTP over Ipv6
            */

            $mail->Host = 'smtp.mailgun.org';

            /*
              Defina o numero da porta SMTP - 587 para autentica��o TLS,
              a.k.a. RFC4409 SMTP submission
            */

            $mail->Port = 587;

            // Define o sistema de criptografia a usar- ssl (depreciado) ou tals
            $mail->SMTPSecure = 'tls';

            // Se vai usar SMTP authentication
            $mail->SMTPAuth = true;

            // Usu�rio para usar SMTP authentication
            // Use o endere�o completodo e-mail do Gmail
            $mail->Username = 'postmaster@sandbox2733effcb8554e5e8002e809d46561ef.mailgun.org';

            // Senha para SMTP authentication
            $mail->Password = 'c092e5bd7bc54e8912b5c6b47037ea80-162d1f80-21b7ddcb';

            // Definir o remetente
            $mail->setFrom('postmaster@sandbox2733effcb8554e5e8002e809d46561ef.mailgun.org', 'Curso');

            // Definir o endereço para respostas
            $mail->addReplyTo('postmaster@sandbox2733effcb8554e5e8002e809d46561ef.mailgun.org', 'Curso');

            // Definir destinatario
            $mail->addAddress($email, 'Destinatário');

            // Definir o Assunto
            $mail->Subject = $email_subject;

            // Definir formato de mensagem HTML
            $mail->isHTML(true);

            // Corpo da Mensagem
            $mail->Body = $email_body_client;

            // Corpo alternativo caso email n�o suporte html
            $mail->AltBody = $email_body_client;

            $mail->send();




        //mail($email,$email_subject,$email_body_client,$headers);
    }

    

    break;


    case '8':

    $id = $_POST['id'];

    $sql = mysqli_query($conn, "SELECT * FROM admins WHERE id='$id'");

    $exibe = mysqli_fetch_assoc($sql);
    $email = $exibe['email'];
    $nome = $exibe['nome'];

    $reg_del= "DELETE FROM admins WHERE id ='{$_POST['id']}'";
    $result = mysqli_query($conn,$reg_del);
    if ($result){
      echo 2; 

      $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    // More headers
    $headers .= 'From:' .$email. "\r\n";
    $email_subject = "Send Information User changed: ".$nome;
    
    $email_body_client = '<div style="width:95%; margin-left:2.5%;">
    <h4> User s Information deleted '.$nome.'</h4>
    <br>Thank you '.$nome.', Elearning Conceptek a Shijin Group
    </div>';


    $mail = new PHPMailer(true);


            $mail->CharSet = 'UTF-8';

            // Informando para usar SMTP
            $mail->isSMTP();

            /*
              Habilitando debug SMTP
              0 = off (uso em produ��o)
              1 = Mensagens ao Cliente
              2 = Mensagens ao Cliente e Servidor
            */

            $mail->SMTPDebug = 0;

            /*
              Definir o nome do servidor de e-mail
              use $mail ->HOST = gethostbyname('email.gmail.com');
              se sua rede n�o suportar SMTP over Ipv6
            */

            $mail->Host = 'smtp.mailgun.org';

            /*
              Defina o numero da porta SMTP - 587 para autentica��o TLS,
              a.k.a. RFC4409 SMTP submission
            */

            $mail->Port = 587;

            // Define o sistema de criptografia a usar- ssl (depreciado) ou tals
            $mail->SMTPSecure = 'tls';

            // Se vai usar SMTP authentication
            $mail->SMTPAuth = true;

            // Usu�rio para usar SMTP authentication
            // Use o endere�o completodo e-mail do Gmail
            $mail->Username = 'postmaster@sandbox2733effcb8554e5e8002e809d46561ef.mailgun.org';

            // Senha para SMTP authentication
            $mail->Password = 'c092e5bd7bc54e8912b5c6b47037ea80-162d1f80-21b7ddcb';

            // Definir o remetente
            $mail->setFrom('postmaster@sandbox2733effcb8554e5e8002e809d46561ef.mailgun.org', 'Curso');

            // Definir o endereço para respostas
            $mail->addReplyTo('postmaster@sandbox2733effcb8554e5e8002e809d46561ef.mailgun.org', 'Curso');

            // Definir destinatario
            $mail->addAddress($email, 'Destinatário');

            // Definir o Assunto
            $mail->Subject = $email_subject;

            // Definir formato de mensagem HTML
            $mail->isHTML(true);

            // Corpo da Mensagem
            $mail->Body = $email_body_client;

            // Corpo alternativo caso email n�o suporte html
            $mail->AltBody = $email_body_client;

            $mail->send();


    //mail($email,$email_subject,$email_body_client,$headers);


    }
    else {
      echo 0;
    }


    break;



}






mysqli_close($conn);
?>


