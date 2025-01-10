<!-- /************************
* PHP code to manipulate switch statements
***************************/ -->
<?php
$myGrade = "A";
switch ($myGrade) {
  case "A":
    echo "You Pass";
    break;
  case "F":
    echo "You Fail";
    break;
  default:
    echo "Invalid grade";
}
