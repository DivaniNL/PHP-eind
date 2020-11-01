<?php
require 'organism.php';
function __autoload($class_name){
    echo "<hr><strong>The class (".$class_name.") has not been loaded. I will load it now.</strong><hr>";
    include $class_name . '.php';
}
//making an alias
use \Life\Organism as Creature;
//new instance of Student
$student1 = new Creature(20, "Dylan", "van Nierop");
//echo some properties

//do the methods and echo results.
echo $student1->greetMe();
echo "<br>";
echo $student1->allAboutOrganism();
echo "<br>";


$car1 = new Car(4, 4, "black");
echo $car1->carInfo();
echo "<br>";
echo $car1->useHorn();
//i can do this
echo "<br>";
$vehicle1 = new Bus(4, 4, "black");
echo $vehicle1->showProtected();
echo "<br>";
echo $vehicle1->useHorn();
echo "<br>";
//i cannot do this since the vehicle class is abstract.
//$vehicle2 = new Vehicle(4, 4, "black");
echo "<br>";
//i cannot do this, since showProtected can only be used in the child classes from vehicle
//echo $vehicle2->showProtected();
//echo $vehicle2->hasRoof();
//echo "<br>";
$vehicle3 = new Scooter(2, 0, "beige");
//roof is overrided in the scooter class
echo $vehicle3->hasRoof();
echo "<br>";
echo $vehicle3->useHorn();


//in this class aggregration is demonstrated.
$door = new Door("wood", 200, 500);
//right here an object is filled in a property.
$house = new House($door, "large");
echo "<br>";

echo $house->door->show();
echo "<br>";
echo $house->houseInfo();
echo "<br>";

$receipt = new Receipt;
echo $receipt->addProduct("lemonade")->price(10)->amount(3)->show();
