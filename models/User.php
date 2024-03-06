<?php

  include_once 'Manager.php';

  class User extends Manager {

    public static function insertUser($user) {
      return (new Manager)->insert('users', $user);
    }

    public static function listOneUser($email, $password) {
      return (new Manager)->select(
        'users', 
        ['name', 'email', 'type'], 
        array('email' => $email, 'password' => $password)
      );
    }

    public static function listAllUsers() {
      return (new Manager)->select('users', ['id', 'name', 'email', 'type'], null);
    }

  }

?>