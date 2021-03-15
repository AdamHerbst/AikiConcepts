<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '/home/herbpvzf/public_html/PHPMailer-master/src/Exception.php';
require '/home/herbpvzf/public_html/PHPMailer-master/src/PHPMailer.php';
require '/home/herbpvzf/public_html/PHPMailer-master/public_html/PHPMailer-master/src/SMTP.php';

function sendmail($to,$nameto,$subject,$message,$altmess)  {
    $from  = "info@attackplan.net"; 
    $namefrom = "Admin";
    $mail = new PHPMailer();
    $mail->SMTPDebug = 0;
    $mail->CharSet = 'UTF-8';
    $mail->isSMTP();
    $mail->SMTPAuth   = true;
    $mail->Host   = "smtp.attackplan.net";
    $mail->Port       = 465;
    $mail->Username   = "info@attackplan.net";
    $mail->Password   = "cwZR++1ft${~";
    $mail->SMTPSecure = "ssl";
    $mail->setFrom($from,$namefrom);
    $mail->addCC($from,$namefrom);
    $mail->Subject  = $subject;
    $mail->isHTML();
    $mail->Body = $message;
    $mail->AltBody  = $altmess;
    $mail->addAddress($to, $nameto);
    return $mail->send();
  }
}

