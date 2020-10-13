<?php

class Person{
   
   public $firstname;
   public $lastname;

   public function __construct($firstname, $lastname){
    $this->firstname = $firstname;
    $this->lastname = $lastname;

    //   $this->PrintStuff();
   }
   public function PrintStuff()
   {
      echo " My name is " . $this->firstname . '  ' . $this->lastname;
   }

  
}

$emmy = new Person('Ewaoche', 'Mathew');
 echo $emmy->PrintStuff();



 










