<!-- /************************
* PHP code to get user input (GET Method)
***************************/ -->
<?php
if (isset($_GET["username"])) {
  echo $_GET["username"];
  echo "<br>";
}

if (isset($_GET["age"])) {
  $age = $_GET["age"];
  echo $age;
}
?>

<!DOCTYPE html>
<html>

<head>
  <title>Getting User Input</title>
</head>

<body>
  <form action="user_input.php" method="GET">
    Username: <input type="text" name="username">
    Age: <input type="text" name="age">
    <input type="submit">
  </form>
</body>

</html>