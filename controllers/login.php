<?php 

  include_once '../models/Connection.php';
  include_once '../models/Manager.php';
  include_once '../models/User.php';

  $email = $_POST['email'];
  $password = md5($_POST['password']);

  $data = User::listUserByLogin($email, $password);

  if($data) {
    $user_data['name'] = $data['name'];
    $user_data['email'] = $data['email'];
    $user_data['type'] = $data['type'];

    session_start();
    $_SESSION[md5('user_data')] = $user_data;
  }

  header("location: ../index.php?page=list-books");
?>