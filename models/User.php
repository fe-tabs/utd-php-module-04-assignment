<?php

  include_once 'Manager.php';

  class User extends Manager {

    public static function listOneUser($email, $password) {
      return (new Manager)->select(
        'users', 
        ['name', 'email', 'type'], 
        array('email' => $email, 'password' => $password)
      );
    }

  }

?>