<!-- /************************
* PHP code to manipulate if statements
***************************/ -->
<?php
$isStudent = false;
$isSmart = false;

if ($isStudent && $isSmart) {
  echo "You are a student";
} elseif ($isStudent && !$isSmart) {
  echo "You are not a smart student";
} else {
  echo "You are not a student and not smart";
}
echo "<br>";

// Comparison examples
if (1 > 3) {
  echo "Number comparison was true";
}
echo "<br>";

if ("dog" == "cat") {
  echo "String comparison was true";
}
