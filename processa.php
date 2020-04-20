<?php
require __DIR__.'/configs.php';
require __DIR__.'/classes/MailSender.php';

error_reporting(false);
header('Content-Type: text/html; charset=utf-8');
$headers = "Content-type: text/html; charset=utf-8\r\n";

// VARIÁVEIS PADRÃO
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$nrPlaca = $_POST['nrPlaca'];
$chassis = $_POST['chassis'];
$cdBoletoDetran = $_POST['cdBoletoDetran'];
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
          <strong>Chassis: </strong> $chassis
      </td>
    </tr>
    
    <tr>
      <td style='border-bottom:1px solid #DDDDDD;'>
          <strong>Placa: </strong> $nrPlaca
      </td>
    </tr>
        
    <tr>
      <td style='border-bottom:1px solid #DDDDDD;'>
          <strong>Código Boleto Detran: </strong> $cdBoletoDetran
      </td>
    </tr>
 
	
</table>";
$mail = new MailSender("automatico@megaplacasgoiania.com.br", "goianiamegaplacas@gmail.com", "Pedido feito pelo site", $mensagem, "Form Contato Site");
$mail->sendMail($configs_username, $configs_password, $configs_host);
echo "<meta http-equiv='refresh' content='0;URL=obrigado.php'> ";
die;

