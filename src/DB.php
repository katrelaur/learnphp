<?php
namespace App;

use App\Models\Article;
use PDO;
use PDOException;

class DB {
    public $conn;

    public function __construct()
    {
        try {
            $this->conn = new PDO("sqlite:db.sqlite");
            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function all($table, $class){
        $stmt = $this->conn->prepare("SELECT * FROM $table");
        $stmt->execute();

        // set the resulting array to associative
        $stmt->setFetchMode(PDO::FETCH_CLASS, $class);
        return $stmt->fetchAll();
    }

    public function find($table, $class, $id){
        $stmt = $this->conn->prepare("SELECT * FROM $table WHERE id=$id");
        $stmt->execute();

        // set the resulting array to associative
        $stmt->setFetchMode(PDO::FETCH_CLASS, $class);
        return $stmt->fetch();
    }

    public function where($table, $class, $field, $value){
        $stmt = $this->conn->prepare("SELECT * FROM $table WHERE $field='$value'");
        $stmt->execute();

        // set the resulting array to associative
        $stmt->setFetchMode(PDO::FETCH_CLASS, $class);
        return $stmt->fetchAll();
    }

    public function insert($table, $fields){
        foreach($fields as $key=>$field){
            if($field === NULL){
                unset($fields[$key]);
            }
        }
        $fieldNames = array_keys($fields);
        $fieldNamesText = implode(', ', $fieldNames);
        $fieldValuesText = implode("', '", $fields);
       
        $sql = "INSERT INTO $table ($fieldNamesText)
        VALUES ('$fieldValuesText')";
       
        $this->conn->exec($sql);
    }

    public function update($table, $fields){
        $id = $fields['id'];
        unset($fields['id']);
        $fieldsText = '';
        foreach($fields as $name=>$field){
            $fieldsText .= "$name='$field',";
        }
        $fieldsText = trim($fieldsText, ',');
        $sql = "UPDATE $table SET $fieldsText WHERE id=$id";

        // Prepare statement
        $stmt = $this->conn->prepare($sql);
      
        // execute the query
        $stmt->execute();
    }

    public function delete($table, $id){
        $sql = "DELETE FROM $table WHERE id=$id";

        // use exec() because no results are returned
        $this->conn->exec($sql);
    }
}