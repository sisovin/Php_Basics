<!-- /************************
* PHP code to manipulate arrays
***************************/ -->
<?php
$lucky_numbers = [4, 8, "fifteen", 16, 23, 42.0];
$lucky_numbers[0] = 90;
echo $lucky_numbers[0] . "<br>";
echo $lucky_numbers[1] . "<br>";
echo count($lucky_numbers) . "<br>";
