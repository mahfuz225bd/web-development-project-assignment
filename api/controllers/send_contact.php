<?php
require_once './email.config.php';

// Variables
$name = $_POST['fullname'];
$from = $_POST['email'];
$phoneNumber = $_POST['phone_number'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mail->setFrom($name, $from);
$mail->addAddress("mahfuz225bd@gmail.com"); // Add a recipient

$mail->isHTML(true);
$mail->Subject = $subject;
$mail->Body    = $message . '<br/><br/>==============================<br/><strong>Email:</strong> ' . $from . '<br/><strong>Name:</strong> ' . $name . '<br/> <strong>Phone Number:</strong> ' . $phoneNumber;

if (!$mail->send()) {
    echo '<div class="msg-box error">';
    echo 'Message could not be sent. <br/>';
    echo 'Mailer Error: ' . $mail->ErrorInfo . ' <a href="/contact">Try again</a>.';
    echo '</div>';
} else {
    echo '<div class="msg-box success">Message has been sent successfully. Go to <a href="/">Home page</a>.</div>';
}
