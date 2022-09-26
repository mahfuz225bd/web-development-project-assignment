<?php

require_once '../models/users.php';
require_once '../models/chats.php';

session_start();

// While chat is being started with starter information 
if (isset($_POST['name'])) {
  $datetime = date('Y-m-d\TH:i:s.uP', time());

  $_SESSION['username'] = $_POST['name'];

  $users->insert(
    array(
      'datetime' => date('Y-m-d\TH:i:s.uP', $datetime),
      'username' => $_POST['name'],
      'email' => $_POST['email'],
      'phone_number' => $_POST['phone'],
      'anonymous_user' => boolval($_SESSION['username'])
    )
  );

  $chats->insert(
    array(
      'datetime' => date('Y-m-d\TH:i:s.uP', $datetime),
      'username' => $_POST['name'],
      'message' => $_POST['email'],
      'user_id' => $getChatUserID
    )
  );
};
