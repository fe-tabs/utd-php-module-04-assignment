<?php

  class Book extends Manager {

    public static function insertBook($book) {
      return (new Manager)->insert('books', $book);
    }

    public static function listAllBooks() {
      return (new Manager)->select('books', null);
    }

  }

?>