<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$img1 = $_SERVER['DOCUMENT_ROOT'].'/images/cs.png';
$img_ques = $_SERVER['DOCUMENT_ROOT'].'/images/questionnaire.png';
$img_res = $_SERVER['DOCUMENT_ROOT'].'/images/question.png';
$img_right = $_SERVER['DOCUMENT_ROOT'].'/images/play-arrow.png';

$per_1 = $_POST['per_1'];
$obs_per_1 = $_POST['obs_per_1'];
$per_2 = $_POST['per_2'];
$obs_per_2 = $_POST['obs_per_2'];
$per_3 = $_POST['per_3'];

$error_message = '';


if ($per_1 == '')
{
  $error_message .= '<p> - Answer the question number 1 *</p>';
}
if ($per_2 == '')
{
  $error_message .= '<p> - Answer the question number 2 *</p>';
}
if ($per_3 == '')
{
  $error_message .= '<p> - Answer the question number 3 *</p>';
}



$html = '
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<style>
.title-black-white {
    background: #000;
    color: #FFF!important;
}
.right {
    float: right;
    width: 68px;
    position: absolute;
    padding: 10px;
  }
  .botm
  {
    margin-bottom: 40px;
  }
  .center {
    display: block;
    margin-left: 280px;
    margin-right: 280px;
    right: 100px;
  }
  .line-bord {
    border: 1px solid #000;
}
.mylabel {
    color: #fff;
    background: #903a8b !important;
}
.align_div {
    margin-bottom: 15px;
}
.w3-padding-8 {
    padding-top: 8px!important;
    padding-bottom: 8px!important;
}
.w3-card-2, .w3-example {
    box-shadow: 0 2px 4px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12)!important;
}
.bolder
{
    font-weight:bold;
}
</style>

<img src="'.$img1.'" class="center">
<div class="botm"></div>
<h3 style="text-align: center;" class="bolder"> Satisfation Questionnaire </h3>
<div class="botm"></div>
<div class="line-bord">
<div class="modal-header title-black-white">
    <h4 class="modal-title bolder" style="color: #fff;"><img src="'.$img_ques.'" class="img-responsive"> Questionnaire - User: '.$_COOKIE['username'].' </h4> 
</div>
<div class="form-horizontal" id="form">
<div class="panel-body" style="padding: 16px; margin-top: -10px;">


<h5 class="col-xs-12 mylabel w3-padding-8 w3-card-2 align_div bolder"> 
<img src="'.$img_res.'" class="img-responsive">&nbsp;&nbsp;Satisfaction Questionnaire
</h5>

<div class="container">
<div class="row">

<div class="col-xs-12 col-md-12">
<div class="form-group">
<font class="bolder"> 1 - The elearning platform accept all topics desired? </font> 
<br>
<font class="bolder">Answer: </font>'.$per_1.'
<br>
<br>
<img src="'.$img_right.'" class="img-responsive">&nbsp;&nbsp; '.$obs_per_1.'
<br>
<br>


</div>
</div>

<div class="col-xs-12 col-md-12">
<div class="form-group">
<font class="bolder"> 2 - You considerate the elearning platform as a good channel to learn the concept applications? </font>
<br>
<font class="bolder">Answer: </font>'.$per_2.'
<br>
<br>
<img src="'.$img_right.'" class="img-responsive">&nbsp;&nbsp; '.$obs_per_2.'
<br>
<br>

</div>
</div>

<div class="col-xs-12 col-md-12">
<div class="form-group">
<font class="bolder"> 3 - Which improves would you like it? </font>
<br>
<font class="bolder">Answer: </font> '.$per_3.'
<br>
<br>

</div>
</div>






</div>
</div>


</div>
</div>






</div>
</div>

</div>

<br>
Best Regards
<br>
Conceptek a Shiji Group Brand

';


if ($error_message == '')
{
	$mpdf = new \Mpdf\Mpdf();
    $mpdf->WriteHTML($html);
	
	$filename = "Questionnaire - ".$_COOKIE['username']." .pdf";


    $attachment = $mpdf->Output($filename, 'S');
        

	$nome = $_COOKIE['username'];
	$email = $_COOKIE['email'];

        $info_client =
        "<div style='width:95%; margin-left:2.5%;'>
        <h4>Was sent pdf with informations about the questionnaire user $nome with email $email</h4>
        </div>";
		
		
		// Criando uma nova instâcia
		$mail = new PHPMailer(true);
		
		$mail->CharSet = 'UTF-8';

		// Informando para usar SMTP
		$mail->isSMTP();

		/*
		  Habilitando debug SMTP
		  0 = off (uso em produção)
		  1 = Mensagens ao Cliente
		  2 = Mensagens ao Cliente e Servidor
		*/

		$mail->SMTPDebug = 0;

		/*
		  Definir o nome do servidor de e-mail
		  use $mail ->HOST = gethostbyname('email.gmail.com');
		  se sua rede não suportar SMTP over Ipv6
		*/

		$mail->Host = 'smtp.gmail.com';

		/*
		  Defina o numero da porta SMTP - 587 para autenticação TLS,
		  a.k.a. RFC4409 SMTP submission
		*/

		$mail->Port = 587;

		// Define o sistema de criptografia a usar- ssl (depreciado) ou tals
		$mail->SMTPSecure = 'tls';

		// Se vai usar SMTP authentication
		$mail->SMTPAuth = true;

		// Usuário para usar SMTP authentication
		// Use o endereço completodo e-mail do Gmail
		$mail->Username = 'ricardopeleira16@gmail.com';

			// Senha para SMTP authentication
			$mail->Password = 'mktiolwmvnzbsjai';

            // Definir o remetente
            $mail->setFrom('ricardopeleira16@gmail.com', 'Curso');

            // Definir o endereço para respostas
            $mail->addReplyTo('ricardopeleira16@gmail.com', 'Curso');

		// Definir destinatario
		$mail->addAddress($email, 'Destinatário');

		// Definir o Assunto
		$mail->Subject = 'Boas Jovem, os detalhes foram enviados com sucesso';

		// Definir formato de mensagem HTML
		$mail->isHTML(true);

		// Corpo da Mensagem
		$mail->Body = $info_client;
        $mail->AltBody = "Conceptek Questionnaire";
		
		
		$mail->addStringAttachment($attachment, $filename, 'base64', 'application/pdf');
		
		
		//$mail->send();
		
		// Envia a mensagem e verifica os erros
		if (!$mail->send()) {
		  $msgerror = 'Main not send'; 
		} else {
		  $msgsuccess = 'Mail Send Successfully';
		}

}

echo $error_message;

?>