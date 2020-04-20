<?php
require __DIR__.'/configs.php';
require __DIR__.'/classes/MailSender.php';

error_reporting(true);
header('Content-Type: text/html; charset=utf-8');
$headers = "Content-type: text/html; charset=utf-8\r\n";

// VARIÁVEIS PADRÃO
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['nrPlaca'];
$whatsapp = $_POST['chassis'];
$mensagem = $_POST['cdBoletoDetran'];
$mensagem = "
<table >
	<tr>
    	<td  align='center' style='border-bottom:1px solid #DDDDDD;'>
      		<strong>Contato via Site</strong>
    	</td>
 	</tr>

 	<tr>
    	<td style='border-bottom:1px solid #DDDDDD;'>
      		<strong>Nome: </strong> $nome
    	</td>
 	</tr>

 	<tr>
    	<td style='border-bottom:1px solid #DDDDDD;'>
      		<strong>E-mail: </strong> $email
    	</td>
 	</tr>

 	<tr>
    	<td style='border-bottom:1px solid #DDDDDD;'>
      		<strong>Telefone: </strong> $telefone
    	</td>
 	</tr>

    <tr>
      <td style='border-bottom:1px solid #DDDDDD;'>
          <strong>WhatsApp: </strong> $whatsapp
      </td>
  </tr>
    
	<tr>
    	<td style='border-bottom:1px solid #DDDDDD;'>
      		<strong>Mensagem: </strong> $mensagem
    	</td>
 	</tr>
	
 	<tr>
    	<td style='border-bottom:1px solid #DDDDDD;'>
      		<strong>Tipo de Serviço: </strong> $tipo
    	</td>
 	</tr>

  <tr>
      <td style='border-bottom:1px solid #DDDDDD;'>
          <strong>Quantidade de Contatos: </strong> $quantidade
      </td>
  </tr>


 	<tr>
    	<td style='border-bottom:1px solid #DDDDDD;'>
      		<strong>Tempo de Cada Chamada: </strong> $tempo
    	</td>
 	</tr>

</table>";
$mail = new MailSender("nao.responda@brasilconnecting.com.br", "atendimento@brasilconnecting.com.br", "Brasil Connecting | Call Center e Telemarketing", $mensagem);
$mail->sendMail($configs_username, $configs_password);
echo "<meta http-equiv='refresh' content='0;URL=obrigado.php'> ";
die;

