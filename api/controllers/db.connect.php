<?php

require_once './api/controllers/db.config.php';

class Database
{
  protected function getConnection()
  {
    return new mysqli(HOSTNAME, USERNAME, PASSWORD, DATABASE);
  }

  function __destruct()
  {
    $this->conn->close();
  }
}


class Table extends Database
{
  protected $conn;
  private $name;

  function __construct($name)
  {
    $this->conn = parent::getConnection();

    if ($this->conn->connect_error) {
      die("Connection failed: " . $this->conn->connect_error);
    }

    $this->name = $name;
  }

  function select_all($limit = NULL)
  {

    if (!$limit) {
      return mysqli_query($this->conn, "SELECT * FROM " . $this->name);
    }
    return mysqli_query($this->conn, "SELECT * FROM " . $this->name . " LIMIT " . $limit);
  }

  function delete($id, $id_field = 'id')
  {
    return mysqli_query($this->conn, "DELETE FROM " . $this->name . " WHERE " . $id_field . "=" . $id);
  }

  function update($update_set, $id, $id_field = 'id')
  {
    $column_value_pairs = $update_set;
    array_walk($column_value_pairs, function (&$value, $key) {
      $value = "`{$key}`='{$value}'";
    });

    return mysqli_query(
      $this->conn,
      "UPDATE " . $this->name . " 
    SET 
    " . implode(', ', $column_value_pairs) . "
    WHERE " . $id_field . " = $id"
    );
  }

  function insert($insertion_set)
  {
    $columnNames = $insertion_set;
    array_walk($columnNames, function (&$value, $key) {
      $value = "`{$key}`";
    });

    $values = $insertion_set;
    array_walk($values, function (&$value, $key) {
      $value = "'{$value}'";
    });

    return mysqli_query($this->conn, "INSERT INTO " . $this->name .
      "(" . implode(',', $columnNames) . ")" .
      " VALUES (" . implode(',', $values) . ")");
  }

  // function sql($insertion_set)
  // {
  //   $columnNames = $insertion_set;
  //   array_walk($columnNames, function (&$value, $key) {
  //     $value = "`{$key}`";
  //   });

  //   $values = $insertion_set;
  //   array_walk($values, function (&$value, $key) {
  //     $value = "'{$value}'";
  //   });

  //   return "INSERT INTO " . $this->name .
  //     "(" . implode(',', $columnNames) . ")" .
  //     " VALUES (" . implode(',', $values) . ")";
  // }

  function __destruct()
  {
    parent::__destruct();
  }
}
