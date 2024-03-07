<?php

  include_once 'Manager.php';

  class Loan extends Manager {

    public static function insertLoan($loan) {
      return (new Manager)->insert('loans', $loan);
    }

    public static function deleteLoan($id) {
      return (new Manager)->delete('loans', array('id' => $id));
    }

    public static function listAllLoans() {
      return (new Manager)->select('loans', null, null);
    }

  }

?>