<!-- /************************
* PHP code to create inheritance
***************************/ -->
<?php
class Chef
{
  public $name;
  public $age;

  function __construct($name, $age)
  {
    $this->name = $name;
    $this->age = $age;
  }

  function makeChicken()
  {
    echo "The chef makes chicken";
  }

  function makeSalad()
  {
    echo "The chef makes salad";
  }

  function makeSpecialDish()
  {
    echo "The chef makes BBQ ribs";
  }
}

class ItalianChef extends Chef
{
  public $countryOfOrigin;

  function __construct($name, $age, $countryOfOrigin)
  {
    $this->countryOfOrigin = $countryOfOrigin;
    parent::__construct($name, $age);
  }

  function makePasta()
  {
    echo "The chef makes pasta";
  }

  function makeSpecialDish()
  {
    echo "The chef makes chicken parm";
  }
}

$chef = new Chef("Gordon Ramsay", 50);
$chef->makeChicken();
echo "<br>";
$italianChef = new ItalianChef("Massimo Bottura", 55, "Italy");
$italianChef->makeChicken();
echo "<br>$italianChef->countryOfOrigin";
