<?php

class Employee extends Person{
  private $jobTitle;
  public function __construct($jobTitle, $firstname, $midname, $lastname, $gender)
  {
  //  $this->jobTitle = $jobTitle;
   $this->setJobTitle($jobTitle);
   parent::__construct($firstname, $midname, $lastname, $gender);
  }

  public function setJobTitle($jobTitle)
  {
    $this->jobTitle = ucfirst($jobTitle);
  }

  public function getJobTitle()
  {
   return $this->jobTitle;
  }
}


class Person{

  public $firstname;
  public $midname;
  public $lastname;
  public $gender;

  public function __construct($firstname, $midname, $lastname, $gender)
  {      
    $this->firstname = $firstname;
    $this->midname = $midname;
    $this->lastname = $lastname;
    $this->gender = $gender;
  }

    public function sayHello()
    {
     return "Hello my name is " . $this->lastname . ' ' . $this->firstname; 
    
    }
    

    
} 


$employee = new Employee('node Developer', 'Ewaoche', 'Emmanuel', 'Emmy', 'MALE');

echo $employee->sayHello();
echo  "<br>";
echo "my Gender is " . $employee->gender; 

echo "<br>";
// $employee->setJobTitle('rrontEnd Dev');
echo $employee->getJobTitle();

// echo  $employee->firstname; 
//   ||
//  protected variable cannot be access from outside the class even though you inherit the class and try calling it with the object i.e it must only be access inside the class that inherit it//