<?php

  include_once 'Manager.php';

  class Loan extends Manager {

    public static function insertLoan($loan) {
      return (new Manager)->insert('loans', $loan);
    }

    public static function listLoan($id) {
      return (new Manager)->select('loans', null, array('id' => $id))[0];
    }

    public static function listAllLoans() {
      return (new Manager)->select('loans', null, null);
    }

    public static function updateLoan($loan, $id) {
      return (new Manager)->update('loans', $loan, array('id' => $id));
    }

    public static function deleteLoan($id) {
      return (new Manager)->delete('loans', array('id' => $id));
    }

  }

?>