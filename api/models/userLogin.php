<?php
require_once __DIR__ . '/api/controllers/db.connect.php';

$users = new Table('users');

// While chat is being started with starter information 
if (isset($_POST['submit'])) {
  $users->insert(
    array(
      'datetime' => time(),
      'username' => $_POST['name'],
      'email' => $_POST['email'],
      'phone_number' => $_POST['phone'],
      'anonymous_user' => boolval($_SESSION['username'])
    )
  );
};
