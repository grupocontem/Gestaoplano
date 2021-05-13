<?php


/*require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer();
$mail->IsSMTP();

$naoresponda = utf8_encode("Não Responda");

$mail->From = "naoresponda@grupocontem.com.br"; //remitente
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls'; //seguridad
$mail->Host = "smtp.office365.com"; // servidor smtp
$mail->Port = 587; //puerto
$mail->Username ='naoresponda@grupocontem.com.br'; //nombre usuario
$mail->setFrom('naoresponda@grupocontem.com.br', 'Nao Responda');
$mail->Password = 'Doj67930'; //contraseña

$msg = utf8_decode("Olá, Você solicitou a redefinição da sua senha.\r\n\r\nAcesse o link abaixo para redefinir sua senh");

$mail->AddAddress('matheus_onlive@live.com');
$mail->Subject = utf8_decode("Redefinição de senha");
$mail->Body = $msg;
$mail->Send();*/

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$celular = $_POST['celular'];
$captcha_data = $_POST['g-recaptcha-response'];

require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;
$mail->isSMTP();

$mail->SMTPDebug = 2;
$mail->Host = 'smtp.hostinger.com.br';
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->Username = 'naoresponda@gestaoplanodesaude.com.br';
$mail->Password = 'G3stao2021';
$mail->setFrom('naoresponda@gestaoplanodesaude.com.br', utf8_decode('Contato | Gestão Planos de Saúde'));
$mail->AddAddress('contato@gestaoplanodesaude.com.br');
$mail->Subject = utf8_decode("Contato | Gestão Planos de Saude");
$mail -> IsHTML(true);
$msg = utf8_decode("<br><h3>Contato Gestão planos de saúde </h3><br> Nome: ".$nome."<br>Email: ".$email."<br>"."Celular: ".$telefone."<br> Celular: ".$celular);
$mail->Body = $msg;

if(empty($email) || empty($nome) || empty($celular) || empty($captcha_data)){
  echo json_encode("error");
} else {
  $mail->Send();
  echo json_encode("success");
}

/*echo''.$nome;
echo'<br>'.$email;
echo'<br>'.$telefone;
echo'<br>'.$celular;
*/

/*require 'PHPMailer/PHPMailerAutoload.php';

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

$msg = utf8_decode("<br><h3>Contato Gestão planos de saúde </h3><br> Nome: ".$nome."<br>Email: ".$email."<br>"."Celular: ".$telefone."<br> Celular: ".$celular);

$mail->AddAddress('matheus_onlive@live.com');
//$mail->AddBCC('matheus_onlive@live.com', 'HC-Broker');
$mail->Subject = utf8_decode("Contato | Plan Saude");
$mail->IsHTML(true);
$mail->Body = $msg;

if(empty($email) || strlen($telefone) < 10 || empty($nome) || empty($celular) || empty($captcha_data)){
  echo json_encode("error");
} else {
  $mail->Send();
  echo json_encode("success");
}
*/
