<?php

  include_once '../models/Connection.php';
  include_once '../models/Manager.php';
  include_once '../models/User.php';

  $_POST['password'] = md5($_POST['password']);
  
  User::insertUser($_POST);

  header("location: ../index.php?page=list-books");

?>