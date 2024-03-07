<?php

  include_once 'Manager.php';

  class Loan extends Manager {

    public static function insertLoan($loan) {
      return (new Manager)->insert('loans', $loan);
    }

  }

?>