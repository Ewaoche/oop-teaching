<?php
include('index.php');
class DatabaseOperation{


    public function getAllCustomers()
    {
      $getAllCustomers = mysqli_query($this->connection(), "SELECT * FROM customers");
      return $getAllCustomers;
    }
}



$databaseOperation = new DatabaseOperation();
print_r($databaseOperation->getAllCustomers());