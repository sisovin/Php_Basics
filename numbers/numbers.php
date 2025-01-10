<!-- /************************
* PHP code to perform arithmetic operations
***************************/ -->
<?php
echo (2 * 3) . "<br>";            // Basic Arithmetic: +, -, /, *
echo (2 ** 3) . "<br>";           // Exponentiation
echo (10 % 3) . "<br>";           // Modulus: returns remainder of 10/3
echo (1 + 2 * 3) . "<br>";        // Order of operations
echo (10 / 3.0) . "<br><br>";     // Division with float

$num = 10;
$num += 100;                      // +=, -=, /=, *=
echo $num . "<br>";

$num++;
echo $num . "<br><br>";

// Useful math methods
echo max(2, 3) . "<br>";
echo sqrt(144) . "<br>";
echo round(2.7) . "<br>";
