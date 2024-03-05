<?php 

  include_once '../models/Connection.php';
  include_once '../models/Manager.php';
  include_once '../models/Book.php';

  if ($_POST['action']) {
    unset($_POST['action']);

    switch ($_REQUEST['action']) {
      case 'insert':
        Book::insertBook($_POST);
        break;

      case 'update':
        $id = $_POST['id'];
        unset($_POST['id']);
        Book::updateBook($_POST, $id);
        break;

        case 'delete':
        Book::deleteBook($_POST, $_POST['id']);
        break;
      
      default:
        break;
    }

    header("location: ../index.php?page=list-books");
  }

?>