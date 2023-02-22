<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


$img1 = $_SERVER['DOCUMENT_ROOT'].'/images/cs.png';
$img_ques = $_SERVER['DOCUMENT_ROOT'].'/images/questionnaire.png';
$img_res = $_SERVER['DOCUMENT_ROOT'].'/images/question.png';
$img_right = $_SERVER['DOCUMENT_ROOT'].'/images/play-arrow.png';


require_once __DIR__ . '/vendor/autoload.php';


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
    <h4 class="modal-title bolder" style="color: #fff;"><img src="'.$img_ques.'" class="img-responsive"> Questionnaire - User: Rui </h4> 
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
<font class="bolder">Answer: </font> Sim
<br>
<br>
<img src="'.$img_right.'" class="img-responsive">&nbsp;&nbsp; Nada
<br>
<br>


</div>
</div>

<div class="col-xs-12 col-md-12">
<div class="form-group">
<font class="bolder"> 2 - You considerate the elearning platform as a good channel to learn the concept applications? </font>
<br>
<font class="bolder">Answer: </font> Sim
<br>
<br>
<img src="'.$img_right.'" class="img-responsive">&nbsp;&nbsp; As
<br>
<br>

</div>
</div>

<div class="col-xs-12 col-md-12">
<div class="form-group">
<font class="bolder"> 3 - Which improves would you like it? </font>
<br>
<font class="bolder">Answer: </font> 
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


$mpdf = new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);

$filename = "Reserva - aaa .pdf";

$attachment = $mpdf->Output($filename, 'S');

        


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
$mail->addAddress('r.peleira@hotmail.com', 'Destinatário');

// Definir o Assunto
$mail->Subject = 'Teste PHPMailer';

// Definir formato de mensagem HTML
$mail->isHTML(true);

// Corpo da Mensagem
$mail->Body = 'Uma mensagem <strong> Negrito </strong>';

// Corpo alternativo caso email n�o suporte html
$mail->AltBody = 'Mensangem simples';

$mail->addStringAttachment($attachment, $filename, 'base64', 'application/pdf');




// Envia a mensagem e verifica os erros
if (!$mail->send()) {
  echo "Erro no Mailer: " . $mail->ErrorInfo; 
} else {
  echo 'mensagem enviada! <br>';
}		
		
?>