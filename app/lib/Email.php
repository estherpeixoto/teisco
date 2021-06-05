<?php

namespace App\Lib;

use PHPMailer\PHPMailer\PHPMailer;

class Email
{
	static function enviaEmail($emailRemetente, $nomeRemetente, $assunto, $corpoEmail, $destinatario)
	{
		require 'utilities/phpmailer/vendor/autoload.php';

		$mail = new PHPMailer();

		$mail->isSMTP();
		$mail->CharSet = 'UTF-8';
		$mail->SMTPAuth = true; // Ativa o SMTP autenticado
		$mail->SMTPSecure = 'tls'; // Tipo de segurança
		$mail->Host = 'smtp.gmail.com';
		$mail->Port = 587;
		$mail->Username = ''; // Usuário de e-mail para autenticação
		$mail->Password = ''; // Senha do e-mail de autenticação
		$mail->From = $emailRemetente; // E-mail remetente
		$mail->FromName = $nomeRemetente; // Nome do Remetente

		$mail->addAddress($destinatario); // E-mail Destinatário

		$mail->isHTML(true); // Será HTML
		$mail->Subject = $assunto; // Assunto do e-mail
		$mail->Body = $corpoEmail; // Corpo do E-mail HTML

		if ($mail->send())
		{
			return true;
		}
		else
		{
			return false;
		}
	}
}
