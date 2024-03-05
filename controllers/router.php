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
      
      default:
        break;
    }
  }

?>