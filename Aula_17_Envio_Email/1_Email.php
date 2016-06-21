
<?php

include_once './PHPMailer_5.2.0/class.phpmailer.php';

$mail = new PHPMailer();
  

//Informa a classe que sera utiizado SMTP
$mail->isSMTP();        

//Aribui nome do host do SMTP                         
$mail->Host = "smtp.gmail.com";

//Atrbibua trye se o SMTP host requer autenticação para envio de emails
$mail->SMTPAuth = true;   

//Informa usuario e senha    
$mail->Username = "aulaifsul@gmail.com";                 
$mail->Password = "aula123456";    

//Si o SMTP requer encriptacao de  TLS 
//https://en.wikipedia.org/wiki/Transport_Layer_Security
$mail->SMTPSecure = "tls";  

//Configura a porta TCP para conexao
$mail->Port = 587;                                   

$mail->From = "aulaifsul@gmail.com";
$mail->FromName = "Aula Ifsul";

$mail->addAddress("silviogn@hotmail.com", "Teste Email");

$mail->isHTML(false);

$mail->Subject = "Titul do email";
$mail->Body = "Este e o texto que sera enviado.>";


if(!$mail->send()) 
{
    echo "Erro ao enviar o email Error: " . $mail->ErrorInfo;
} 
else 
{
    echo "Email enviado com sucesso";
}