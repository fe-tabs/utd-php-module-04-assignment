<?php
  include_once 'models/Book.php';

  function routes() {
    if (!isset($_GET['page'])) {
      return false;
    }
    
    switch ($_GET['page']) {
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