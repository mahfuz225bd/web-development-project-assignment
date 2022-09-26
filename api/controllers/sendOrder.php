<?php
require_once __DIR__ . '/api/controllers/email.config.php';

// Variables
$id = $_POST['id'];
$details = $_POST['details'];
$name = $_POST['fullname'];
$from = $_POST['email'];
$phoneNumber = $_POST['phone_number'];
$note = $_POST['note'];

$mail->setFrom($name, $from);
$mail->addAddress("mahfuz225bd@gmail.com"); // Add a recipient

$mail->isHTML(true);
$mail->Subject = "Order from .$name. (Plan#.$id.)";
$mail->Body    = '==============================<br/><strong>Plan ID#:</strong> ' . $id . '<br/><strong>Details:</strong><br/>' . $details . '<br/><strong>Name:</strong> ' . $name . '<br/><strong>Phone Number:</strong> ' . $phoneNumber . '<br/><strong>Note:</strong><br/>' . $note;

if (!$mail->send()) {
    echo '<div class="msg-box error">';
    echo 'Order could not be sent. <br/>';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
    echo '</div>';
} else {
    echo '<div class="msg-box success">Order has been sent successfully. Go to <a href="/">Home page</a>.</div>';
}
