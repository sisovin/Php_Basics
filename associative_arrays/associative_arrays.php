<!-- /************************
* PHP code to manipulate associative arrays
***************************/ -->
<?php
$test_grades = [
  "Andy" => "B+",
  "Stanley" => "C",
  "Ryan" => "A",
  3 => 95.2
];

echo $test_grades["Andy"] . "<br>";
echo $test_grades["Ryan"] . "<br>";
echo $test_grades[3] . "<br>";
