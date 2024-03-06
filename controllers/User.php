<?php 

  include_once '../models/Connection.php';
  include_once '../models/Manager.php';
  include_once '../models/User.php';

  if ($_POST['action']) {
    unset($_POST['action']);

    switch ($_REQUEST['action']) {
      case 'insert':
        $_POST['password'] = md5($_POST['password']);
        User::insertUser($_POST);
        break;
      
      default:
        break;
    }

    header("location: ../index.php?page=list-users");
  }

?>