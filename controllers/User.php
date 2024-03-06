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

      case 'update':
        $id = $_POST['id'];
        unset($_POST['id']);
        User::updateUser($_POST, $id);
        break;

        case 'delete':
          User::deleteUser($_POST, $_POST['id']);
          break;
      
      default:
        break;
    }

    header("location: ../index.php?page=list-users");
  }

?>