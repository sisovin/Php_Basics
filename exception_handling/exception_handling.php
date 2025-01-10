<!-- /************************
* PHP code to throw and catch exceptions
***************************/ -->
<?php
try {
  throw new Exception('Something bad happened');
} catch (Exception $e) {
  echo $e->getMessage();
} finally {
  echo "<br>This code gets executed no matter what";
}
