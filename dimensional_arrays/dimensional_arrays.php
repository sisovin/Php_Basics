<!-- /************************
* PHP code to manipulate 2 dimensional arrays
***************************/ -->
<?php
$number_grid = [[1, 2], [3, 4]];
$number_grid[0][1] = 99;

echo $number_grid[0][0] . "<br>";
echo $number_grid[0][1] . "<br>";
