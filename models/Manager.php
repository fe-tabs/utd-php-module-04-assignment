<?php

  class Manager extends Connection {

    public function insert($table, $data) {
      $fields = implode(", ", array_keys($data));
      $values = ":".implode(", :", array_keys($data));

      $query = "INSERT INTO $table ($fields) VALUES ($values)";

      $pdo = parent::get_instance();
      $stmt = $pdo->prepare($query);

      if (!$stmt) {
        echo "\PDO::errorInfo():\n";
        print_r($stmt->errorInfo());
      }

      foreach ($data as $key => $value) {
				$data[$key] = filter_var($value);
			}
      foreach ($data as $key => $value){
				$stmt->bindValue(":$key", $value, PDO::PARAM_STR);
			}

      if($stmt->execute()){
				return true;
			}else{
				return false;
			}
    }

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