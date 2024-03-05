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
      
      default:
        break;
    }

    header("location: ../index.php?page=list-books");
  }

?>