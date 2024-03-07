<?php
  include_once 'models/Book.php';
  include_once 'models/User.php';
  include_once 'models/Loan.php';

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

      case 'register':
        include_once 'register.php';
        break;

      case 'list-books':
        $data = Book::listAllBooks();
        include_once 'views/modules/books/list.php';
        break;

      case 'list-users':
        $data = User::listAllUsers();
        include_once 'views/modules/users/list.php';
        break;

      case 'list-loans':
        $data = Loan::listAllLoans();
        include_once 'views/modules/loans/list.php';
        break;

      case 'insert-book':
        include_once 'views/modules/books/insert.php';
        break;

      case 'insert-user':
        include_once 'views/modules/users/insert.php';
        break;

      case 'insert-loan':
        $book = Book::listBook($_GET['id']);
        $users = User::listAllUsers();
        include_once 'views/modules/loans/insert.php';
        break;

      case 'update-book':
        $data = Book::listBook($_GET['id']);
        include_once 'views/modules/books/update.php';
        break;

      case 'update-user':
        $data = User::listUser($_GET['id']);
        include_once 'views/modules/users/update.php';
        break;
        
        case 'update-loan':
          $data = Loan::listLoan($_GET['id']);
          $users = User::listAllUsers();
        include_once 'views/modules/loans/update.php';
        break;
      
      default:
        break;
    }
  }

?>