<?php
  include_once 'Connection.php';

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

    public function select($table, $fields, $filters) {
      $query = "SELECT ";
      
      if ($fields != null) {
        $query .= implode(", ", $fields);
      } else {
        $query .= "*";
      }
      
      $query .= " FROM $table";

      if($filters != null){
				$query .= " WHERE ";
				foreach ($filters as $key => $value) {
					$query .= "$key=:$key AND ";
				}
      
        $query = substr($query, 0, -4);
			}
      
      $pdo = parent::get_instance();
      $stmt = $pdo->prepare($query);

      if (!$stmt) {
        echo "\PDO::errorInfo():\n";
        print_r($stmt->errorInfo());
      }

      if ($filters != null) {
        foreach ($filters as $key => $value) {
					$filters[$key] = filter_var($value);
				}

        foreach ($filters as $key => $value) {
					$stmt->bindValue(":$key", $value, PDO::PARAM_STR);
				}
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

    public function selectJoin($fields, $relationships, $filters) {
      $query = "SELECT ";
      
      foreach ($fields as $table => $field){
				if($field != null){
					foreach ($field as $each_field){
						$query .= "$table.$each_field, ";
					}
				}else{
					$query .= "$table.*, "; //quando as colunas nao forem informadas
				}
			}
      $query = substr($query, 0, -2). " FROM ".implode(" INNER JOIN ", array_keys($fields)). " ON ";

      foreach($relationships as $foreign=>$primary){
				$query .= "$foreign = $primary AND "; 
			}

      $query = substr($query, 0, -4);

      if($filters != null){
				$query .= " WHERE ";
				foreach ($filters as $key => $value) {
					$query .= "$key=:$key AND ";
				}
      
        $query = substr($query, 0, -4);
			}
      
      $pdo = parent::get_instance();
      $stmt = $pdo->prepare($query);

      if (!$stmt) {
        echo "\PDO::errorInfo():\n";
        print_r($stmt->errorInfo());
      }

      if ($filters != null) {
        foreach ($filters as $key => $value) {
					$filters[$key] = filter_var($value);
				}

        foreach ($filters as $key => $value) {
					$stmt->bindValue(":$key", $value, PDO::PARAM_STR);
				}
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

    public static function update($table, $data, $filters) {
      $query = "UPDATE $table SET ";

      foreach ($data as $key => $value) {
				$query .= "$key=:$key, ";
			}

      $query = substr($query, 0, -2)." WHERE ";

			foreach ($filters as $key => $value) {
				$query .= "$key=:$key AND ";
			}
      
      $query = substr($query, 0, -4);

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

      foreach ($filters as $key => $value){
				$stmt->bindValue(":$key", $value, PDO::PARAM_STR);
			}

      if($stmt->execute()){
				return true;
			}else{
				return false;
			}
    }

    public static function delete($table, $filters) {
      $query = "DELETE FROM $table WHERE ";
      
      foreach($filters as $key => $value) {
        $query .= "$key = :$key AND ";
      }

      $query = substr($query, 0, -4);

      $pdo = parent::get_instance();
      $stmt = $pdo->prepare($query);

      if (!$stmt) {
        echo "\PDO::errorInfo():\n";
        print_r($stmt->errorInfo());
      }

      foreach ($filters as $key => $value) {
        $stmt->bindValue(":$key", $value[$key], PDO::PARAM_STR);
      }

      if($stmt->execute()){
				return true;
			}else{
				return false;
			}
    }

  }

?>