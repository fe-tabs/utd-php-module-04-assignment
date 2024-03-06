<?php 

  include_once '../models/Connection.php';
  include_once '../models/Manager.php';
  include_once '../models/User.php';

  $email = $_POST['email'];
  $password = md5($_POST['password']);

  $data = User::listOneUser($email, $password);

  if($data) {
    $user_data['name'] = $data[0]['name'];
    $user_data['email'] = $data[0]['email'];
    $user_data['type'] = $data[0]['type'];

    session_start();
    $_SESSION[md5('user_data')] = $user_data;
  }

  header("location: ../index.php?page=list-books");
?>