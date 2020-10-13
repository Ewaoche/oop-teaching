<?php

class Database{

public $localhost;
public $tablename;
public $dbuser;
public $dbpass;
public $dbname;
public $conn;

    public function __construct
    (
      $localhost = "localhost",
      $dbuser = "root",
      $dbname = "ecomsdb",
      $tablename = "users",
      $dbpass = ""  
      
      )


    {
       
      $this->localhost = $localhost;
      $this->tablename = $tablename;
      $this->dbuser = $dbuser;
      $this->dbpass  = $dbpass;
      $this->dbname  = $dbname;


      // create connection
       $this->conn = mysqli_connect($localhost, $dbuser, $dbpass);
      if(!$this->conn)
      {
         die("Mysqli connection erro:" . mysqli_connect_error());
      }
      
      // create new database 
       
       $sqlresult = mysqli_query($this->conn, "CREATE DATABASE IF NOT EXISTS $dbname");
       if($sqlresult){
        $this->conn = mysqli_connect($localhost, $dbuser, $dbpass, $dbname);
         $sql = "CREATE TABLE IF NOT EXISTS $tablename(
           id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
           username varchar(100),
           password varchar(100),
           email   varchar(100),
           firstname varchar(100),
           midlename  varchar(100),
           lastname varchar(100)
         );";
         $query = mysqli_query($this->conn, $sql);
         if(!$query)
         echo("Error in creating users table:" . mysqli_error());
       }
       else{
         return false;
       }



    }

  
    public function inSertUsers()
    {
      $getAllUsers = mysqli_query($this->conn, " INSERT INTO  $this->tablename(`username`, `password`, `email`, `firstname`, `midlename`, `lastname`) 
      VALUES('ewaoche', 'ewa12345', 'rad@mail.com', 'Emmanuel', 'Mathew', 'Emmy')");
     
    }

    
    public function getAllUsers()
    {
      $getAllUsers = mysqli_query($this->conn, "SELECT * FROM $this->tablename");
      // $getAllUsers = mysqli_fetch_object($getAllUsers);
      return $getAllUsers;
    }

    public function __destruct(){
      if(is_object($this->conn)){
        mysqli_close($this->conn);	
      }
    }
} 


// $db->inSertUsers();
// $conn =  $conn->connection();
// print_r ($conn);
// if($conn->connection())
//  echo "Database connection is true";

// else  echo "Database connection is true";

// $retuns = $db->getAllUsers();
// print_r($retuns);
// echo $retuns->password;


 


