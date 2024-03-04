<?php

  class Manager extends Connection {

    public function select($table, $fields) {
      $query = "SELECT ";
      
      if ($fields != null) {
        $query .= implode(", ", $fields);
      } else {
        $query .= "*";
      }
      
      $query .= " FROM $table";
      
      $pdo = parent::get_instance();
      $stmt = $pdo->prepare($query);

      if (!$stmt) {
        echo "\PDO::errorInfo():\n";
        print_r($stmt->errorInfo());
      }

      $stmt->execute();

      $data = [];
      if ($stmt->rowCount()) {
        while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
          $data[] = $result;
        }
      } else {
        return false;
      }

      return $data;
    }

  }

?>