Assignment 1:
Q1:
<?php
// programming (Functional)
function greet($name) {
    echo "Hello, $name";
}
 greet( "john");
echo "<br>";
// procedural programming
function greetprocedural($name) {
    echo "Hello, $name";
}
function askHowAreYou() {
    echo "How are you?";
}
    greetprocedural("jane");
askHowAreYou();
echo "  <br>";
//object-oriented programming
class person{
    private $name;
    public function __construct($name){
        $this->name = $name;
    }
    public function greet() {
        echo "Hello, " . $this->name . "!";
    }
    public function askHowAreYou() {
        echo "Howareyou, " .
$this ->name . "?";
    }
}
$person = new person("Alice");
$person->greet();
$person->askHowAreYou();
?>
Q2:

                                 Class



	Cars
	


                            Object	          Properties



Toyota       Mercedes    Volvo        Move     Stop      Spoil  


Q3:
<?php
class fruit {
    private $name;
    private $color;

    public function setName ($name) {
        $this->name = $name;
    }
    public function getName() {
        return $this->name;
    }
public function setColor ($color) {
$this->color = $color;
}
public function getColor () {
return $this->color;
}
}
// instantiate the fruit class with four different names of fruits
$apple = new Fruit();
$apple->setName('Apple');
$apple->setColor('red');

$banana = new Fruit();
$banana->setName('Banana');
$banana->setColor('yellow');

$mango = new Fruit();
$mango->setName('Mango');
$mango->setColor('green');

$orange = new Fruit();
$orange->setName('orange');
$orange->setColor('yellow');
//get and display the names of fruits
echo $apple->getName() . ' (' .
$apple->getColor() . ")\n";
echo "<br>";
echo $banana->getName() . ' (' .
$banana->getColor() . ")\n";
echo "<br>";
echo $mango->getName() . ' (' .
$mango->getColor() . ")\n";
echo "<br>";
echo $orange->getName() . ' (' .
$orange->getColor() . ")\n"; 
echo "<br>";
?>


Assignment 2:

Q1:
Abstraction is a fundamental concept in programming and software development that involves showing showing the necessary Information to the outside world while hiding the internal details. Its like a car:you don’t need to know how the engine works to drive it, you just need to know how to use the steering wheel, pedals, and gears.
Abstraction helps:
. Simplify complex systems.
. Reduce complexity.
. Increase modularity.
. Improve code reusability.
. Enhance security.
Example 1: Banking system
. Abstract class: Bank Account
-methods: deposit(), withdraw(), get Balanced()
-Hides internal details like account number, password, etc.
. Concrete Classes: Savings Account, Current Account.
-Inherit from Bank Account.
- Add specific features like interest rates, overdraft limits, etc.

Example 2: Vehicle system
. Abstract class: vehicle
- Methods: start Engine(), accelerated(), brake().
- Hides internal details like engine type, transmission, etc.
. Concrete Classes: Car, truck, motorcycle.
-inherit from vehicle.
-Add specific features like air conditional, cargo capacity, etc.

In both example, the abstract classes (Bank account and Vehicle) provide a simplified interface from the outside world, while the concrete classes (Savings Account, Current Account, Car, Truck, Motorcycle) hide their internal details and specific features.

By using abstraction, you can:
.  Use a Bank Account without knowing the internal details.
.  Use a Vehicle without knowing how the engine works.
Abstraction makes your code modular, reusable and easier to maintain.

Q2:write a php script to demonstrate ‘’namespace’’ in oop
<?php

// difine a namespace called 'vehicle' namespace vehicle;
// define a class named 'car' inside the 'vehicle' namespace
class car {
public function honk() {
echo "Honk! Honk!";
}
}

// define a namespace called 'Animal' namespace Animal;
// define a class called 'Dog' inside the 'animal' namespace
class dog {
    public function woof() {
        echo "Woof! Woof!"; 
    }
}
 //create an instance of the 'Car' class
$car = new car();
$car->honk(); 
echo "<br>";
// create an instance of the 'dog' class
$dog = new dog();
$dog->woof();
?>



Q3 i:
<?php
class vehicle {
function move() {
echo "the vehicle has stopped";
}
}
class car extends vehicle {
function move() {
echo "the car stopped half way";
}
}
class ship extends vehicle {
function move() {
echo "the ship has started moving";
}
}

$vehicle = new vehicle();
$vehicle->move();
echo "<br>";
$car = new car();
$car->move();
echo "<br>";
$ship = new ship();
$ship->move();
echo "<br>";
Q3 ii:
<?php
class Animal {
public function sound() {
echo "mubinah makes a sound like a bamboo.";
}
}
class Dog extends Animal{
public function sound() {
echo "The dog barks.";
}
}

class Cat extends Animal {
public function sound() {
echo "The cat meows.";
}
}

$animal = new Animal();
$animal->sound();
echo "<br>";
$dog = new Dog();
$dog->sound();
echo "<br>";
$cat = new Cat();
$cat->sound();
echo "<br>";
?>
Q4:
Q4; 
Limitations of oop:
1.Complexity: OOP  can lead to complex code, especially when dealing with deep inheritance hierarchies and multiple layers of abstraction.

2.Over -Engineering: oop’s emphases on modularity and reusability can sometimes lead to over-engineering where simple problems are solved with over complex solutions.

3.Tight Coupling: oop’s emphases on encapsulation can sometimes lead to tight coupling between objects, making it difficult to change or replace individual components without affecting the entire systems.

4.Inflexibility: OOP’s focus on static typing and compile-time checking can make it inflexible, especially when dealing with dynamic or rapidly changing systems. 

5.Performance Overhead: OOP’S use of abstraction, encapsulation, and polymorphism can introduce performance overhead, especially in languages with slow virtual table lookups or excessive memory allocation.

6.Steep Learning Curve: OOP has a steep learning curve, especially for beginners, due to its abstract concepts, complex syntax, and nuanced best practices.

7.Limited Support for Functional Programming: OOP is primarily designed for imperative programming, and its support for functional programming concepts like immutability, recursion, and higher-order functions is limited.

8.Difficulty with Concurrency: OOP’s focus on mutual state and shared memory can make it challenging to write concurrent programs, especially with languages without bullet-in concurrency is supported.

Abstraction makes your code modular, reusable and easier to maintain.
