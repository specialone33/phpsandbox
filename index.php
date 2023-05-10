<?php
 class Person{
     public $name;
     public $age;
     public $vathmos;
     public $birthdate;

     function __construct($name = null, $age = null, $vathmos = null, $birthdate = null){
         $this->name = $name;
         $this->age = $age;
         $this->vathmos = $vathmos;
         $this->birthdate = $birthdate;
     }

      function findAge(){
          $currentyear = date('Y');
          echo $currentyear - $this->birthdate;
         }

     function findAgeCompare($person1, $person2){
         if($person1->age > $person2->age){
             echo $person1->name . 'bigger';
         }
         
     }
 }

 $persont1 = new Person('','20','','1982');
 $persont2 = new Person('','19','', '1993');

 $persont1->findAge();

$lead_id = rand(1, 9);
echo $lead_id;