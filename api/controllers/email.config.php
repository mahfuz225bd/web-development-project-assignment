<?php

require_once '../../assets/vendor/PHPMailer/src/PHPMailer.php';
require_once '../../assets/vendor/PHPMailer/src/SMTP.php';
require_once '../../assets/vendor/PHPMailer/src/Exception.php';

$mail = new PHPMailer\PHPMailer\PHPMailer();

//$mail->SMTPDebug = 3;                                 // Enable verbose debug output

$mail->isSMTP();                                        // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';                         // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                                 // Enable SMTP authentication
$mail->Username = 'mahfuz225bd@gmail.com';               // SMTP username
$mail->Password = 'fpcdkonazskdrxqx';                   // SMTP password
$mail->SMTPSecure = 'tls';                              // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587; //25                                 // TCP port to connect to