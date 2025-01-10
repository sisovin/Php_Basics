<!-- /************************
* PHP code to create abstract classes and methods
***************************/ -->
<?php
abstract class Vehicle
{
  public abstract function move();
  public function getDescription()
  {
    echo "Vehicles are used for transportation";
  }
}

class Bicycle extends Vehicle
{
  public function move()
  {
    echo "The bicycle pedals forward";
  }
}

class Plane extends Vehicle
{
  public function move()
  {
    echo "The plane flies through the sky";
  }
}

$plane = new Plane();
$plane->move();
echo "<br>";
$plane->getDescription();