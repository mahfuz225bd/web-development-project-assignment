<?php
require_once '../controllers/db.connect.php';

session_start();


$users = new Table('users');

// While chat is being started with starter information 
if (isset($_POST['name'])) {
  $now = time();

  $_SESSION['username'] = $_POST['name'] . $now;

  $users->insert(
    array(
      'datetime' => date('Y-m-d\TH:i:s.uP', $now),
      'username' => $_POST['name'],
      'email' => $_POST['email'],
      'phone_number' => $_POST['phone'],
      'anonymous_user' => boolval($_SESSION['username'])
    )
  );
};
