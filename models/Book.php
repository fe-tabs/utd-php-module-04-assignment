<?php
  include_once 'Manager.php';

  class Book extends Manager {

    public static function insertBook($book) {
      return (new Manager)->insert('books', $book);
    }

    public static function listBook($id) {
      return (new Manager)->select('books', null, array('id' => $id))[0];
    }

    public static function listAllBooks() {
      return (new Manager)->select('books', null, null);
    }

    public static function updateBook($book, $id) {
      return (new Manager)->update('books', $book, array('id' => $id));
    }

    public static function deleteBook($id) {
      return (new Manager)->delete('books', array('id' => $id));
    }

  }

?>