<!-- /************************
* PHP code to manipulate switch statements
***************************/ -->
<?php
// While Loop
$index = 1;
while ($index <= 5) {
  echo $index;
  $index += 1;
}

// Do-While Loop
$index = 1;
do {
  echo $index;
  $index += 1;
} while ($index <= 5);

// For Loop
for ($i = 0; $i < 5; $i++) {
  echo $i;
}

// Foreach Loop
$luckyNums = [4, 8, 15, 16, 23, 42];
foreach ($luckyNums as $luckyNum) {
  echo $luckyNum . "<br>";
}
