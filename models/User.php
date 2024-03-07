<?php

  include_once 'Manager.php';

  class User extends Manager {

    public static function insertUser($user) {
      return (new Manager)->insert('users', $user);
    }
    
    public static function listUser($id) {
      return (new Manager)->select('users', null, array('id' => $id))[0];
    }

    public static function listUserByLogin($email, $password) {
      return (new Manager)->select(
        'users', 
        ['name', 'email', 'type'], 
        array('email' => $email, 'password' => $password)
      )[0];
    }
    
    public static function listAllUsers() {
      return (new Manager)->select('users', ['id', 'name', 'email', 'type'], null);
    }

    public static function updateUser($user, $id) {
      return (new Manager)->update('users', $user, array('id' => $id));
    }

    public static function deleteUser($id) {
      return (new Manager)->delete('users', array('id' => $id));
    }


  }

?>