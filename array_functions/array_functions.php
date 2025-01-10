<!-- /************************
* PHP code to manipulate array functions
***************************/ -->
<?php
$friends = [];
array_push($friends, "Oscar", "Angela");
array_push($friends, "Kevin");

echo "$friends[0], $friends[1], $friends[2] <br>";
sort($friends);
echo "$friends[0], $friends[1], $friends[2] <br>";
echo in_array("Oscar", $friends);
