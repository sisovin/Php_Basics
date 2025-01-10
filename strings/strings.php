<!-- /************************
* PHP code to manipulate strings
***************************/ -->
<?php
$greeting = "Hello";
echo strlen($greeting) . "<br>"; // Outputs the length of the string
echo $greeting[0] . "<br>"; // Outputs 'H'
echo $greeting[strlen($greeting) - 1] . "<br>"; // Outputs the last character 'o'
echo str_replace("l", "Z", $greeting) . "<br>"; // Replaces 'l' with 'Z'
echo strstr($greeting, "ll") . "<br>"; // Finds the first occurrence of 'll'
echo $greeting[0] . "<br>"; // Outputs 'H'
echo $greeting[1] . "<br>"; // Outputs 'e'
echo $greeting[2] . "<br>"; // Outputs 'l'
echo $greeting[3] . "<br>"; // Outputs 'l'
echo $greeting[4] . "<br>"; // Outputs 'o'