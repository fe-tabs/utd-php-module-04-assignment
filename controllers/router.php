<?php
  include_once 'models/Book.php';

  function routes() {
    if (!isset($_GET['page'])) {
      return false;
    }

    $user_data = array();

    session_start();
  
    if (isset($_SESSION[md5('user_data')])) {
      $user_data = $_SESSION[md5('user_data')];
    }
    
    switch ($_GET['page']) {
      case 'login':
        include_once 'login.php';
        break;

      case 'list-books':
        $data = Book::listAllBooks();
        include_once 'views/modules/books/list.php';
        break;

      case 'insert-book':
        include_once 'views/modules/books/insert.php';
        break;

      case 'update-book':
        $data = Book::listOneBook($_GET['id'])[0];
        include_once 'views/modules/books/update.php';
        break;
      
      default:
        break;
    }
  }

?>