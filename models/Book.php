<?php

  class Book extends Manager {

    public static function listAll() {
      return (new Manager)->select('books', null);
    }

  }

?>