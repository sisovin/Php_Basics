<!-- /************************
* PHP code to post user input (POST Method)
***************************/ -->
<?php
if (isset($_POST["username"]) && !empty($_POST["username"]) && isset($_POST["age"]) && !empty($_POST["age"])) {
  $username = $_POST['username'];
  $age = $_POST['age'];

  echo "Hello $username, you are $age years old!";
} else {
  echo "Please enter a username and age.";
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>Posting User Input</title>
</head>

<body>
  <form action="user_post_input.php" method="POST">
    Username: <input type="text" name="username">
    Age: <input type="text" name="age">
    <input type="submit">
  </form>
</body>

</html>