<?php
require_once './email.config.php';

// Variables
$id = $_POST['id'];
$details = $_POST['details'];
$name = $_POST['fullname'];
$from = $_POST['email'];
$phoneNumber = $_POST['phone_number'];
$note = $_POST['note'];

$mail->setFrom($name, $from);
$mail->addAddress("thelionk91@gmail.com"); // Add a recipient

$mail->isHTML(true);
$mail->Subject = "Order from .$name. (Plan#.$id.)";
$mail->Body    = '==============================<br/> ID: ' . $id . '<br/> Details: <br/>' . $details . '<br/> Name: ' . $name . '<br/>Phone Number: ' . $phoneNumber . '<br/> Note: ' . $note;

if (!$mail->send()) {
    echo '<div class="msg-box error">';
    echo 'Order could not be sent. <br/>';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
    echo '</div>';
} else {
    echo '<div class="msg-box success">Order has been sent successfully.</div>';
}
