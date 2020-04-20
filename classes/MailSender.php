<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require __DIR__.'/PHPMailer/src/PHPMailer.php';
require __DIR__.'/PHPMailer/src/Exception.php';
require __DIR__.'/PHPMailer/src/SMTP.php';

require __DIR__.'/../configs.php';

class MailSender {

    private $from;
    private $to;
    private $subject;
    private $messageHTML;
    private $username;

    public function __construct($from, $to, $subject, $messageHTML)
    {

        if ($from == null || $to == null || $subject == null || $messageHTML == null) {
            throw new Exception("Todos os parametros devem ser usados: from, to, title, messageHTML");
        }

        $this->from = $from;
        $this->to = $to;
        $this->subject = $subject;
        $this->messageHTML = utf8_decode($messageHTML);

    }

    public function sendMail($username, $password)
    {
        $mail = new PHPMailer(true);

        try {
            //Server settings
            // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host       = 'email-ssl.com.br';         // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = $username;                             // SMTP username
            $mail->Password   = $password;                            // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
            $mail->Port       = 587;                                    // TCP port to connect to

            //Recipients
            $mail->setFrom($this->getFrom(), 'Brasil Connecting Mailer');
            $mail->addAddress($this->getTo());     // Add a recipient

            // Content
            $mail->isHTML(true); // Set email format to HTML
            $mail->Subject = $this->getFrom();
            $mail->Body    = $this->getMessageHTML();
            $mail->Charset = 'UTF-8';

            $mail->send();

            return true;

        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            return false;
        }
    }

    public function getFrom() {
        return $this->from;
    }

    public function getTo() {
        return $this->to;
    }

    public function getSubject() {
        return $this->subject;
    }

    public function getMessageHTML() {
        return $this->messageHTML;
    }




}
