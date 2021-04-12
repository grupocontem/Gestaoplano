<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$mensagem = $_POST['mensagem'];

/*echo''.$nome;
echo'<br>'.$email;
echo'<br>'.$telefone;
echo'<br>'.$mensagem;*/

require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer();
$mail->IsSMTP();

$mail->From = "naoresponda@gestaoplanodesaude.com.br"; //remitente
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls'; //seguridad
$mail->Host = "smtp.hostinger.com.br"; // servidor smtp
$mail->Port = 587; //puerto
$mail->Username ='naoresponda@gestaoplanodesaude.com.br'; //nombre usuario
$mail->Password = 'G3stao2021'; //contraseña
$mail->setFrom('naoresponda@gestaoplanodesaude.com.br', utf8_decode('Contato | Gestão Planos de Saúde'));

$msg = utf8_decode("<br><h3>Contato Gestão planos de saúde </h3><br> Nome: ".$nome."<br>Email: ".$email."<br>"."Celular: ".$telefone."<br><br> Mensagem: ".$mensagem);

$mail->AddAddress('contato@gestaoplanodesaude.com.br');
//$mail->AddBCC('matheus_onlive@live.com', 'HC-Broker');
$mail->Subject = utf8_decode("Contato | Plan Saude");
$mail->IsHTML(true);
$mail->Body = $msg;

if(empty($email) || strlen($telefone) < 10 || empty($nome) || empty($mensagem)){
  echo json_encode("error");
} else {
  $mail->Send();
  echo json_encode("success");
}
