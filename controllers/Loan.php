<?php 

  include_once '../models/Connection.php';
  include_once '../models/Manager.php';
  include_once '../models/Loan.php';

  if ($_POST['action']) {
    unset($_POST['action']);

    switch ($_REQUEST['action']) {
      case 'insert':
        Loan::insertLoan($_POST);
        break;
      
      case 'update':
        $id = $_POST['id'];
        unset($_POST['id']);
        Loan::updateLoan($_POST, $id);
        break;
      
      case 'delete':
        Loan::deleteLoan($_POST, $_POST['id']);
        break;
      
      default:
        break;
    }

    header("location: ../index.php?page=list-books");
  }

?>