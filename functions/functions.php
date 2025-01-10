<!-- /************************
* PHP code to manipulate associative arrays
***************************/ -->
<?php
function addNumbers($num1, $num2 = 99)
{
  return $num1 + $num2;
}

$sum = addNumbers(4, 3);
echo $sum;