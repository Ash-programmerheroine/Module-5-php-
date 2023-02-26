<?php
class Human{
    function sayHi(){
        echo 'Salam';
        
    }
   
}
class Cat{
    public $name;
    function sayHi(){
        $this->sayName();// calling function here
        echo 'Meawo';
    }
    function sayName(){
        echo "My name is {$this->name}\n";
    }
}
class Dog{
    function sayHi(){
        echo 'Ghew';
    }
}
$h1 = new Human();
$h2 = new Cat();
$h3 = new Dog();

$h2->name = 'pussy';//set operation
$h2->age = 12;//set an arbitary property outside class
 $h2->name ;//get operation
echo $h2->age;//get
//if i want to show must use echo

// echo $h1->sayHi().PHP_EOL;
echo $h2->sayHi().PHP_EOL;
// echo $h3->sayHi().PHP_EOL;
