<?php   
namespace MyProject;
use PHPMailer\PHPMailer\PHPMailer;

$nome = $_POST['nome'];
$assunto = $_POST['assunto'];
$mensagem= $_POST['mensagem'];
$email= $_POST['email'];

// Inclui o arquivo class.phpmailer.php localizado na mesma pasta do arquivo php 
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'PHPMailer/src/Exception.php';

// Inicia a classe PHPMailer 
$mail = new PHPMailer(); 

// Método de envio 
$mail->IsSMTP(); 

// Enviar por SMTP 
$mail->Host = "SMTP.office365.com"; 

// Você pode alterar este parametro para o endereço de SMTP do seu provedor 
$mail->Port = 587; 


// Usar autenticação SMTP (obrigatório) 
$mail->SMTPAuth = true; 

// Usuário do servidor SMTP (endereço de email) 
// obs: Use a mesma senha da sua conta de email 
$mail->Username = 'EmailDaEmpresa@outlook.com'; 
$mail->Password = 'SenhaDOemailDaEmpresa'; 

// Configurações de compatibilidade para autenticação em TLS 
$mail->SMTPOptions = array( 'ssl' => array( 'verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true ) ); 

// Você pode habilitar esta opção caso tenha problemas. Assim pode identificar mensagens de erro. 
//$mail->SMTPDebug = 2; 

// Define o remetente 
// Seu e-mail 
$mail->From = "EmailDaEmpresa@outlook.com"; 

// Seu nome 
$mail->FromName = $assunto; 

// Define o(s) destinatário(s) 
$mail->AddAddress("EmailDaEmpresa@outlook.com", 'Nome da empresa (destinatario)'); 

// Opcional: mais de um destinatário
// $mail->AddAddress('fernando@email.com'); 

// Opcionais: CC e BCC
// $mail->AddCC('joana@provedor.com', 'Joana'); 
// $mail->AddBCC('roberto@gmail.com', 'Roberto'); 

// Definir se o e-mail é em formato HTML ou texto plano 
// Formato HTML . Use "false" para enviar em formato texto simples ou "true" para HTML.
$mail->IsHTML(true); 

// Charset (opcional) 
$mail->CharSet = 'UTF-8'; 

// Assunto da mensagem 
$mail->Subject = $assunto; 

//adicionando imagem
$mail->AddEmbeddedImage('img/logoRaio.png', 'logo_ref');

// Corpo do email 
$mail->Body = "<body style='background-color:#F2CB05;'>
    
<center >
    
    <img src='cid:logo_ref' width='20%' alt=''>
    
    <br>
    
    <h1 style='font-family: 'Quicksand', sans-serif; text-shadow: 3px 3px 1px #f29f05; color: #0d0d0d;'>nome da empresa</h1> 
    
    <br>

    <h3 style='font-family: 'Quicksand', sans-serif; text-shadow: 3px 3px 1px #f29f05; color: #0d0d0d;'>O Usuario : <b>".$nome."</b></h3>

    <h3 style='font-family: 'Quicksand', sans-serif; text-shadow: 3px 3px 1px #f29f05; color: #0d0d0d;'>Com o email :<b>".$email."</b></h1>

    <h3 style='font-family: 'Quicksand', sans-serif; text-shadow: 3px 3px 1px #f29f05; color: #0d0d0d;'>enviou um/uma <b>".$assunto."</b>, a seguir a mensagem enviada:</h3>

    <div style='border-style: solid; width: 50%; background-color: #0d0d0d;  box-shadow: 5px 5px 1px #f29f05;'>
        <h4 style='font-family: 'Quicksand', sans-serif; color: white;'><b>".$mensagem."</b></h4>
    </div>
</center>
</body>";

// Opcional: Anexos 
// $mail->AddAttachment("/home/usuario/public_html/documento.pdf", "documento.pdf"); 

// Envia o e-mail 
$enviado = $mail->Send(); 

// Exibe uma mensagem de resultado 
if ($enviado) 
{ 
    echo "Seu email foi enviado com sucesso!"; 
} else { 
    echo "Houve um erro enviando o email: ".$mail->ErrorInfo; 
} 
header ("Location: index.php");

?>